<?php

namespace AdminModule;

use Nette\Security;


class DefaultPresenter extends BaseAdminPresenter {

    public function startup() {
        
        parent::startup();
//        $user = NEnvironment::getUser();

        if (!$this->user->isLoggedIn()) {
            if ($this->user->getLogoutReason() === \Nette\Security\IUserStorage::INACTIVITY ) {
                $this->flashMessage('Uplynula doba neaktivity! Systém vás z bezpečnostných dôvodov odhlásil.', 'warning');
            }
            //$backlink = $this->getApplication()->storeRequest();
            //$this->redirect('Auth:', array('backlink' => $backlink));
            $this->redirect('Auth:');
        }
        else {
            /*if (!$this->user->isAllowed($this->reflection->name, $this->getAction())) {
                $this->flashMessage('Na vstup do této sekce nemáte dostatečné oprávnění!', 'warning');
                $this->redirect('Auth:');
            }*/
        }
    }

    public function actionDefault() {
        $this->redirect('HomepageNews:');
    }

    public function actionLogout() {
        
		$this->getUser()->logout();
        $this->flashMessage('Právě jste se odhlásili z administrace.');
        $this->redirect('Auth:');
    }
}