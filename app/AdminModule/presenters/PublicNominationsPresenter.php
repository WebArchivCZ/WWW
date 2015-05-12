<?php

namespace AdminModule;

use Nette\Application\UI\Form;
use Nette\Utils\Html;

final class PublicNominationsPresenter extends SecuredPresenter {

	public $selectedResource;
	
	public function startup() {
        parent::startup();
    }

/* SHOW */
/********/

    public function actionDefault() {
		$this->template->publicNominations = $this->publicNominations->findAll()->order('added DESC');
    }

/* HANDLERY */
/************/

/* KOMPONENTY */
/**************/

/* ZPRACOVANI FORMULARE */
/************************/

	
}