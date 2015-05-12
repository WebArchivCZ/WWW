<?php

namespace AdminModule;

use Nette\Application\UI\Form;
use Nette\Utils\Html;

final class SearchLogsPresenter extends SecuredPresenter {

	private $logsPerPage = 50;	
	
	public function startup() {
        parent::startup();
    }

/* SHOW */
/********/

    public function actionDefault() {
		
		$vp = $this['vp']; 
        $paginator = $vp->paginator;		
		$paginator->setItemCount(count($this->searchLogs->findAll())); 
		$paginator->setItemsPerPage($this->logsPerPage); 		

		$this->template->searchLogs = $this->searchLogs->findAll()->order('added DESC')->limit($paginator->getLength(), $paginator->getOffset());;
    }



	
}