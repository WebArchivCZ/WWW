<?php

namespace AdminModule;

use Nette\Application\UI\Form;
use Nette\Image;

abstract class BaseAdminPresenter extends \BasePresenter {

    public function startup() {
        parent::startup();
            $this->template->user = $this->user;
	}
    
	protected function beforeRender() {
		$this->template->menuItems = array(
            'HomepageNews:' => 'Novinky',
            'SelectedResources:' => 'Výběr z katalogu',
            'TopicCollections:' => 'Tématické sbírky',
            'PublicNominations:' => 'Nominace veřejnosti',
            'SearchLogs:' => 'Záznamy hledání',
        );
    }

/* KOMPONENTY */
/**************/
	
    public function createComponentImageForm() {

		$form = new Form;
		for($i=1; $i<=$this->uploadCount; $i++) {
            if($this->uploadCount==1) {$i1 = "";} else {$i1 = $i;} // jen kvuli UX
            $form->addUpload('file'.$i, 'Obr.'.$i1.':');
             //->addRule(Form::IMAGE, 'Obrázek musí být JPEG, PNG nebo GIF.')
             //->addRule(Form::MAX_FILE_SIZE, 'Maximální velikost souboru je 1,5 MB.', 1572864 /* v bytech */);
        }
        $form->addSubmit('save', 'Nahrát');

        $form->onSuccess[] = callback($this, 'processImageForm');

        return $form;
    }	
	
/* UKLADANI FORMULARE */
/**********************/
	
	
    public function processImageForm(Form $form) { // uklada fotky

	if($form->isSubmitted()) {
            $uploaded = 0;
            $dirPath = $this->dirPath;

            for($i=1; $i<=$this->uploadCount; $i++) {
                $file = $form['file'.$i]->getValue();

                if (empty($file)) {
                    $this->flashMessage('Nebyl vybrán žádný soubor nebo byl datově příliš velký.','warning');
                } elseif ($file->isOK()) {
                    if($file->getContentType() == 'image/jpeg' || $file->getContentType() == 'image/jpg' || $file->getContentType() == 'image/png') {
                        $tmp = WWW_DIR.'/images/tmp/img.jpg';
                        $file->move($tmp);

						$filename = $this->uploadingHelper();
						
						$image = Image::fromFile($tmp);
						if($this->imageSizes['x']) {$image->resize($this->imageSizes['x'], $this->imageSizes['y'], Image::SHRINK_ONLY);}
						$image->save($dirPath.$filename, 85, Image::JPEG);
						
						$imageBig = Image::fromFile($tmp);
						if($this->imageSizes['xBig']) {$imageBig->resize($this->imageSizes['xBig'], $this->imageSizes['yBig'], Image::SHRINK_ONLY);}
						$imageBig->save($dirPath.'big/'.$filename, 85, Image::JPEG);

						$uploaded++;
                    } else {
                        $this->flashMessage('Soubor není v požadovaném formátu.','warning');
                    }
                }
            }
		}
        if($uploaded > 0) {
            $this->flashMessage($uploaded. ' obrázků bylo úspěšně nahráno.', 'success');
        } else {
            $this->flashMessage('Nahráno 0 souborů.');
        }

        $this->redirect('this');
	}	
	
}
