<?php

namespace AdminModule;

use Nette\Application\UI\Form;

final class AuthPresenter extends BaseAdminPresenter
{

    /** @persistent */
    public $backlink = '';

    protected function createComponentLoginForm($name)
    {
        $form = new Form($this, $name);

        $form->addText('username', 'Uživatelské jméno:')
             ->addRule(Form::FILLED, 'Prosím zadejte uživatelské jméno.');

        $form->addPassword('password', 'Heslo:')
             ->addRule(Form::FILLED, 'Prosím zadejte heslo.');

        $form->addProtection('Prosím odešlete přihlašovací údaje znovu (vypršela platnost tzv. bezpečnostního tokenu).');
        $form->addSubmit('send', 'Přihlásit se!');

        $form->onSuccess[] = array($this, 'loginFormSubmitted');
    }

    public function actionLogin() {
        $this->redirect('Auth:');
    }

    public function loginFormSubmitted($form)
    {
        try {
            $this->user->login($form['username']->value, $form['password']->value);
            $this->restoreRequest($this->backlink);
            $this->redirect('Default:');
        }
        catch (\Nette\Security\AuthenticationException $e) {
            $this->flashMessage('Zadali jste špatné přihlašovací údaje', 'warning');
        }
    }

}