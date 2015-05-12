<?php

namespace AdminModule;

use Nette\Application\UI\Form;
use Nette\Utils\Html;

final class SelectedResourcesPresenter extends SecuredPresenter {

	public $selectedResource;
	
	public function startup() {
        parent::startup();
    }

/* SHOW */
/********/

    public function actionDefault() {
		$this->template->selectedResources = $this->selectedResources->findAll()->order('order_num DESC');
    }

    public function actionEdit($id = 0) {
		$this->selectedResource = $this->selectedResources->find($id);
		if(!$this->selectedResource) {
            $this->flashMessage("Záznam nenalezen",'warning');
            $this->redirect('SelectedResources:');
        }
    }

    public function renderEdit() {
        $form = $this['selectedResourceForm'];
        if (!$form->isSubmitted()) {
			$form->setDefaults($this->selectedResource);
		}
        $this->template->selectedResource = $this->selectedResource;
     }

/* HANDLERY */
/************/

    public function handlePublish($id = 0) {
		$selectedResource = $this->selectedResources->find($id);
		$newState = ($selectedResource->active ? FALSE : TRUE);
		if($selectedResource->active) {
			$newState = FALSE;
			$this->flashMessage('Výběr zdroje byl skryt.', 'success');
		} else {
			$newState = TRUE;
			$this->flashMessage('Výběr zdroje byl publikován.', 'success');
		}
		$selectedResource->update(array(
			'active' => $newState
		));
        $this->redirect('this');
	}

    public function handleDelete($id = 0) {
        $selectedResource = $this->selectedResources->find($id);
        if($selectedResource) {
            $selectedResource->delete();
            $this->flashMessage('Výběr zdroje smazán.', 'success');
        }
        $this->redirect('SelectedResources:');
    }

    public function handleShift($id = 0, $direction = "") {
        $item = $this->selectedResources->find($id);
        if($item) {
            $secondItem = NULL;
            // hledame za co to vymenime
            if($direction == "bigger") {$secondItem = $this->selectedResources->findBy(array('order_num > '.$item->order_num))->order('order_num ASC')->limit(1)->fetch();}
            if($direction == "smaller") {$secondItem = $this->selectedResources->findBy(array('order_num < '.$item->order_num))->order('order_num DESC')->limit(1)->fetch();}

            if($secondItem) {
                // vymena order_num
                $changeorder_num = $item->order_num;
                $item->update(array('order_num' => $secondItem->order_num));
                $secondItem->update(array('order_num' => $changeorder_num));
            } else {
				$this->flashMessage('Vybranou položku nebylo možné posunout.','warning');
            }
        } else {
            $this->flashMessage('Vybranou položku nebylo možné posunout.','warning');
		}
    }	
	
	

/* KOMPONENTY */
/**************/

    public function createComponentFindSourceForm() {

		$form = new Form;

        $form->addText('resource_id', 'ID zdroje:', 10, 15)
             ->addRule(Form::FILLED, 'Zadejte prosím ID zdroje.');
        $form->addSubmit('save', 'Vybrat');

        $form->onSuccess[] = callback($this, 'processFindSourceForm');

        return $form;
	}

    public function createComponentUseOriginalResourceForm() {

		$form = new Form;

        $form->addSubmit('save', 'Obnovit původní data zdroje');

        $form->onSuccess[] = callback($this, 'processFindSourceForm');

        return $form;
	}
	
	
    public function createComponentSelectedResourceForm() {

		$form = new Form;

        $id = (int) $this->getParam('id');
        $selectedResource = $this->selectedResources->find($id);
		$originalKeywords = $this->keywordsResources->findBy(array('resource_id'=>$selectedResource->resource_id));
		$selectedKeywords = explode(',',$selectedResource->keywords);
		
		// titulek a URL
		$form->addGroup();
		$form->addText('title', 'Titulek: *', 60, 200)
			 ->addRule(Form::FILLED, 'Zadejte prosím titulek.');
		$form->addText('url', 'URL: *', 60, 255)
			 ->addRule(Form::FILLED, 'Zadejte prosím URL.');
		$form->addText('publisher', 'Vydavatel:', 60, 150);
		$form->addTextArea('annotation', 'Anotace:', 61, 7);

		foreach($originalKeywords as $ok) {
	        $form->addCheckbox('keyword_'.$ok->keyword_id, ' '.$ok->keyword->keyword);
			if(in_array($ok->keyword_id, $selectedKeywords)) {
				$form['keyword_'.$ok->keyword_id]->setDefaultValue(1);
			}
		}
        $form->addGroup('Uložení');
        $form->addSubmit('save', 'Uložit');

        // jestli pridat druhej submit ?
        if(!$selectedResource || $selectedResource->active == FALSE) {
            $form->addSubmit('saveAndPublish', 'Uložit a publikovat');
        }
        $form->onSuccess[] = callback($this, 'processSelectedResourceForm');

        return $form;
    }


/* ZPRACOVANI FORMULARE */
/************************/

   public function processFindSourceForm(Form $form) {

	   // existence id znaci jestli se jedna o editaci nebo novy zaznam
		$id = (int) $this->getParam('id');
		
		if($form->isSubmitted()) {
            $values = $form->getValues();

			if($id == 0) { // pokud se jedna o pokus o vlozeni noveho zaznamu, ktery ale uz existuje
				$existedSelection = $this->selectedResources->findOneBy(array('resource_id'=>$values['resource_id']));
				if($existedSelection) {
					$this->flashMessage('Zdroj s ID '.$values['resource_id'].' byl již dříve vybrán, nyní se nacházíte v jeho editaci.');
					$this->redirect('edit',  array('id'=>$existedSelection->id));
				}
				$resource = $this->resources->find($values['resource_id']);
			} else {
				$selectedResource = $this->selectedResources->find($id);
				$resource = $this->resources->find($selectedResource->resource_id);
			}
			
			if($resource) {
				$publisher = $this->publishers->find($resource->publisher_id);
				$keywords = $this->keywordsResources->findBy(array('resource_id'=>$resource->id));
				$selectedKeywords = array();
				foreach($keywords as $keyword) {
					$selectedKeywords[] = $keyword['keyword_id'];
				}
				$resourceValues = array(
					'resource_id'=>$resource->id,
					'title'=>$resource->title,
					'url'=>$resource->url,
					'publisher'=>$publisher->name,
					'annotation'=>$resource->annotation,
					'keywords'=>implode(',',$selectedKeywords),
				);
				// vytvorim nebo edituji vybrany zdroj
				if($id == 0) {
					$selectedResource = $this->selectedResources->create($resourceValues);
					$selectedResource->update(array('added'=>new \DateTime(), 'order_num'=>$selectedResource->id));
					$this->flashMessage('Výběr zdroje byl uložen.', 'success');
				} else {
					$selectedResource->update($resourceValues);
					$selectedResource->update(array('added'=>new \DateTime()));
					$this->flashMessage('Výběru zdroje byl obnoven podle originálu.', 'success');
				}
				$this->redirect('edit',  array('id'=>$selectedResource->id));
			} else {
				$this->flashMessage('Zdroj s ID '.$values['resource_id'].' neexistuje.', 'warning');
				$this->redirect('add');
			}
        }
        $this->redirect('SelectedResources:');
    }
	
	public function processSelectedResourceForm(Form $form) {

        $id = (int) $this->getParam('id');
		$suffix = "";

		if($form->isSubmitted()) {
            $values = $form->getValues();

            // pokud bylo odeslano pomoci 'ulozit a publikovat', rovnou se to publikuje
            if(isset($form['saveAndPublish']) && $form['saveAndPublish']->isSubmittedBy()) {
                $values['active'] = TRUE;
                $suffix = " a publikován";
            }

			// nacteme si potrebne zaznamy z databaze
			$selectedResource = $this->selectedResources->find($id);
			$originalKeywords = $this->keywordsResources->findBy(array('resource_id'=>$selectedResource->resource_id));
			
			// projdeme vsechny originalni klicova slova ke zdroji a ty co se shoduji s vybranymi, dame do pole
			$selectedKeywords = array();
			foreach($originalKeywords as $ok) {
				if($values['keyword_'.$ok->id]==TRUE) {
					$selectedKeywords[] = $ok->id;
				}
				unset($values['keyword_'.$ok->id]); // at se to nesnazi ulozit do db
			}
			$values['keywords'] = implode(',', $selectedKeywords);
			$selectedResource->update($values);
			
            $this->flashMessage('Výběr zdroje byl uložen'.$suffix.'.', 'success');
            //$this->redirect('edit',  array('id'=>$selectedResource->id));
        }
        $this->redirect('SelectedResources:');
    }
	
}