<?php

namespace AdminModule;

abstract class SecuredPresenter extends BaseAdminPresenter
{
    public function startup()
    {
        parent::startup();

        if (!$this->getUser()->isLoggedIn()) {
            $this->redirect('Default:');
        }
    }
}