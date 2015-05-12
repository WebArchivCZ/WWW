<?php

namespace AdminModule;

use Nette\Application\UI\Form;
use Nette\Utils\Html;

final class TopicCollectionsPresenter extends SecuredPresenter {

	public $topicCollection;
	
	public function startup() {
        parent::startup();
    }

/* SHOW */
/********/

    public function actionDefault() {
		$this->template->topicCollections = $this->topicCollections->findAll()->order('order_num DESC');
    }

    public function actionEdit($id = 0) {
		$this->topicCollection = $this->topicCollections->find($id);
		if(!$this->topicCollection) {
            $this->flashMessage("Záznam nenalezen",'warning');
            $this->redirect('TopicCollections:');
        }
    }

    public function renderEdit() {
        $form = $this['topicCollectionForm'];
        if (!$form->isSubmitted()) {
			$form->setDefaults($this->topicCollection);
		}
        $this->template->topicCollection = $this->topicCollection;
     }

/* HANDLERY */
/************/

    public function handlePublish($id = 0) {
		$topicCollection = $this->topicCollections->find($id);
		$newState = ($topicCollection->active ? FALSE : TRUE);
		if($topicCollection->active) {
			$newState = FALSE;
			$this->flashMessage('Sbírka byla skryta.', 'success');
		} else {
			$newState = TRUE;
			$this->flashMessage('Sbírka byla publikována.', 'success');
		}
		$topicCollection->update(array(
			'active' => $newState
		));
        $this->redirect('this');
	}

    public function handleDelete($id = 0) {
        $topicCollection = $this->topicCollections->find($id);
        if($topicCollection) {
            $topicCollection->delete();
            $this->flashMessage('Tématická sbírka smazána.', 'success');
        }
        $this->redirect('TopicCollections:');
    }

    public function handleShift($id = 0, $direction = "") {
        $item = $this->topicCollections->find($id);
        if($item) {
            $secondItem = NULL;
            // hledame za co to vymenime
            if($direction == "bigger") {$secondItem = $this->topicCollections->findBy(array('order_num > '.$item->order_num))->order('order_num ASC')->limit(1)->fetch();}
            if($direction == "smaller") {$secondItem = $this->topicCollections->findBy(array('order_num < '.$item->order_num))->order('order_num DESC')->limit(1)->fetch();}

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

    public function createComponentTopicCollectionForm() {

		$form = new Form;

        $id = (int) $this->getParam('id');
		$topicCollection = $this->topicCollections->find($id);
		
		// titulek a URL
        $form->addGroup('Česká verze');
		$form->addText('title_cs', 'Titulek česky: *', 60, 250)
			 ->addRule(Form::FILLED, 'Zadejte prosím český titulek.');
		$form->addTextArea('text_cs', 'Anotace:', 61, 7);

		$form->addGroup('Anglická verze');
		$form->addText('title_en', 'Titulek anglicky: *', 60, 250)
			 ->addRule(Form::FILLED, 'Zadejte prosím anglický titulek.');
		$form->addTextArea('text_en', 'Anotace:', 61, 7);

		$form->addGroup('Statistiky');
		$form->addText('dates', 'Datumy (ve tvaru mm/yyyy):', 60, 250);
		$form->addText('files_count', 'Počet souborů:', 60, 50);
		$form->addText('size_mb', 'Velikost v MB:', 60, 50);
		
        $form->addGroup('Uložení');
        $form->addSubmit('save', 'Uložit');

        // jestli pridat druhej submit ?
        if(!$topicCollection || $topicCollection->active == FALSE) {
            $form->addSubmit('saveAndPublish', 'Uložit a publikovat');
        }
        $form->onSuccess[] = callback($this, 'processTopicCollectionForm');

        return $form;
    }


/* ZPRACOVANI FORMULARE */
/************************/

   public function processTopicCollectionForm(Form $form) {

        $id = (int) $this->getParam('id');
		$suffix = "";

		if($form->isSubmitted()) {
            $values = $form->getValues();
            
			// pokud bylo odeslano pomoci 'ulozit a publikovat', rovnou se to publikuje
            if(isset($form['saveAndPublish']) && $form['saveAndPublish']->isSubmittedBy()) {
                $values['active'] = TRUE;
                $suffix = " a publikována";
            }
			// ukladani nebo editace
			if($id > 0) { // edit
				$topicCollection = $this->topicCollections->find($id);
                $topicCollection->update($values);
            } else { // add
				$topicCollection = $this->topicCollections->create($values);
				$topicCollection->update(array('order_num'=>$topicCollection->id));
            }
            $this->flashMessage('Sbírka byla uložena'.$suffix.'.', 'success');
            //$this->redirect('edit',  array('id'=>$topicCollection->id));
        }
        $this->redirect('TopicCollections:');
    }
		
	

	
}