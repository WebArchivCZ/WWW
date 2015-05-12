<?php

namespace AdminModule;

use Nette\Application\UI\Form;
use Nette\Utils\Html;

final class HomepageNewsPresenter extends SecuredPresenter {

	public $homepageNew;

	public $imageSizes;
	public $filenamePrefix;
	public $dirPath;
	
    public $uploadCount = 1;
	
	public function startup() {
        parent::startup();
		$this->filenamePrefix = "image";
    }

/* SHOW */
/********/

    public function actionDefault() {
		$this->template->homepageNews = $this->homepageNews->findAll()->order('order_num DESC');
    }

    public function actionEdit($id = 0) {
		$this->homepageNew = $this->homepageNews->find($id);
		if(!$this->homepageNew) {
            $this->flashMessage("Záznam nenalezen",'warning');
            $this->redirect('SelectedResources:');
        }
		$this->imageSizes = array('x'=>400,'y'=>NULL,'xBig'=>NULL,'yBig'=>NULL);
		$this->dirPath = "images/news/";
    }

    public function renderEdit() {
        $form = $this['homepageNewForm'];
        if (!$form->isSubmitted()) {
			$form->setDefaults($this->homepageNew);
		}
        $this->template->homepageNew = $this->homepageNew;
     }

/* UTIL */
/********/
	
	public function uploadingHelper() { // pomaha resit nektere veci, ktere se deji pri uploadu obrazku pro tuto sekci

		return $this->filenamePrefix ."_". $this->homepageNew->id.".jpg";
	}
	 
	 
/* HANDLERY */
/************/

    public function handlePublish($id = 0) {
		$homepageNew = $this->homepageNews->find($id);
		$newState = ($homepageNew->active ? FALSE : TRUE);
		if($homepageNew->active) {
			$newState = FALSE;
			$this->flashMessage('Novinka byla skryta.', 'success');
		} else {
			$newState = TRUE;
			$this->flashMessage('Novinka byla publikována.', 'success');
		}
		$homepageNew->update(array(
			'active' => $newState
		));
        $this->redirect('this');
	}

    public function handleDelete($id = 0) {
        $homepageNew = $this->homepageNews->find($id);
        if($homepageNew) {
            $homepageNew->delete();
            $this->flashMessage('Novinka smazána.', 'success');
        }
        $this->redirect('HomepageNews:');
    }

    public function handleShift($id = 0, $direction = "") {
        $item = $this->homepageNews->find($id);
        if($item) {
            $secondItem = NULL;
            // hledame za co to vymenime
            if($direction == "bigger") {$secondItem = $this->homepageNews->findBy(array('order_num > '.$item->order_num))->order('order_num ASC')->limit(1)->fetch();}
            if($direction == "smaller") {$secondItem = $this->homepageNews->findBy(array('order_num < '.$item->order_num))->order('order_num DESC')->limit(1)->fetch();}

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
	
    public function handleDeleteImage($id = 0) {

		$bigUrl = "images/news/big/image_".$id.".jpg";
		$smallUrl = "images/news/image_".$id.".jpg";

		if(file_exists($bigUrl)) {unlink($bigUrl);}
        if(file_exists($smallUrl)) {unlink($smallUrl);}

        $this->flashMessage('Fotka smazána.', 'success');
    }		
	

/* KOMPONENTY */
/**************/

    public function createComponentAddHomepageNewForm() {

		$form = new Form;
		
        $form->addGroup();
		$form->addText('title', 'Interní název *:', 40, 150)
             ->addRule(Form::FILLED, 'Zadejte prosím interní název.');

        $form->addGroup('Uložení');
        $form->addSubmit('save', 'Uložit');
		
        $form->addSubmit('saveAndPublish', 'Uložit a publikovat');

		$form->onSuccess[] = callback($this, 'processHomepageNewForm');

        return $form;
	}	
	
    public function createComponentHomepageNewForm() {

        $id = (int) $this->getParam('id');
        $homepageNew = $this->homepageNews->find($id);		
		
		$form = new Form;
		
        $form->addGroup();
		$form->addText('title', 'Interní název *:', 40, 150)
             ->addRule(Form::FILLED, 'Zadejte prosím interní název.');
		$form->addTextArea('text_cs', 'Obsah novinky CZ', 41, 15);
        $form->addTextArea('text_en', 'Obsah novinky EN:', 41, 15);

        $form->addGroup('Uložení');
        $form->addSubmit('save', 'Uložit');
		
        // jestli pridat druhej submit ?
        if(!$homepageNew || $homepageNew->active == FALSE) {
            $form->addSubmit('saveAndPublish', 'Uložit a publikovat');
        }
        $form->onSuccess[] = callback($this, 'processHomepageNewForm');

        return $form;
	}


/* ZPRACOVANI FORMULARE */
/************************/

   public function processHomepageNewForm(Form $form) {

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
				$homepageNew = $this->homepageNews->find($id);
                $homepageNew->update($values);
            } else { // add
				$homepageNew = $this->homepageNews->create($values);
				$homepageNew->update(array('added'=>new \DateTime(), 'order_num'=>$homepageNew->id));
            }
            $this->flashMessage('Novinka byla uložena'.$suffix.'.', 'success');
            $this->redirect('edit',  array('id'=>$homepageNew->id));
        }
        $this->redirect('HomepageNews:');
    }
	
	
}