<?php

use Nette\Application\UI\Form;
use Nette\Mail\SendmailMailer;
use Nette\Mail\Message;
use Nette\Image;

class DefaultPresenter extends \BasePresenter {

    /** @persistent */
	public $display = "images"; // styl zobrazeni (text / images)
	public $query;
	public $keyword;

	private $resourcesPerPage = 12;
	
	private $categories;
	private $subcategories;

    public function startup() {
        parent::startup();
		if($this->lang=='cs') {
			$this->categories = $this->categoriesCs;
			$this->subcategories = $this->subcategoriesCs;
		} else {
			$this->categories = $this->categoriesEn;
			$this->subcategories = $this->subcategoriesEn;
		}
    }

    public function renderDefault() {
		
		$this->template->homepageNew = $this->homepageNews->findBy(array('active'=>1))->order('order_num DESC')->limit(1)->fetch();
		
		$selectedResources = array();
		foreach($this->selectedResources->findBy(array('active'=>1))->order('order_num DESC')->limit(2) as $key => $value) {
			$selectedResources[$key] = $value->toArray();
			$selectedResources[$key]['keywords'] = $this->keywords->findBy(array('id'=>explode(',',$selectedResources[$key]['keywords'])));
		}
		$this->template->selectedResources = $selectedResources;
		
		// informace o velikosti webarchivu
		$wsPath = APP_DIR . "/templates/util/webarchiveSize.txt";
		if(file_exists($wsPath)) {
			$wsFile = fopen($wsPath, "r"); 
			$this->template->webarchiveSize = fgets($wsFile);
		}
		
		$this->template->resourceCount = $this->resources->findBy(array('contract_id IS NOT NULL'))->count();
		$this->template->lastResources = $this->resources->findBy(array('contract_id IS NOT NULL'))->order('id DESC')->limit(5);
		
    }
	
    public function renderTopicCollections() {
		
		$this->template->topicCollections = $topicCollections = $this->topicCollections->findBy(array('active'=>1))->order('order_num DESC');

		foreach($this->topicCollections->findAll() as $topicCollection) {
			$topicCollection->update(array('order_num'=>$topicCollection->id));
		}
	}	

    public function renderSearchResults($query) {
		
		$this->template->display = $this->display;

		// automaticke doplneni predchozi hledaneho vyrazu
		$this['smallSearchBox']->setDefaults(array('query'=>$query));
		
		// poprve nacteme a zjistime tak pocet zdroju
		$results = $this->resources->findWithFulltext($query);
		//$results = $this->resources->findBy(array('annotation LIKE' => new \Nette\Database\SqlLiteral($pattern),'contract_id IS NOT NULL'));
		
		// pripravime strankovani
		$vp = $this['vp']; 
        $paginator = $vp->paginator;		
		$paginator->setItemCount(count($results)); 
		$paginator->setItemsPerPage($this->resourcesPerPage); 

		// nacteme zdroje se strankovanim
		$r = $this->resources->findWithFulltext($query)->order('title ASC')->limit($paginator->getLength(), $paginator->getOffset());
		//$r = $this->resources->findBy(array('annotation LIKE' => new \Nette\Database\SqlLiteral($pattern),'contract_id IS NOT NULL'))->order('title ASC')->limit($paginator->getLength(), $paginator->getOffset());

		// nacteme prislusne informace ke zdrojum
		$resources = array();
		foreach($r as $key => $value) {
			$resources[$key] = $value->toArray();
			$resources[$key]['publisher'] = $this->publishers->find($resources[$key]['publisher_id']);
			$resources[$key]['keywords'] = $this->keywordsResources->findBy(array('resource_id'=>$key));
		}
		$this->template->resources = $resources;
		$this->template->query = $query;
		$this->template->paginator = $paginator;
	}

	
    public function renderKeywordResults($keyword) {
		
		$this->template->display = $this->display;

		$keyword = $this->keywords->find($keyword);
		if(!$keyword) {
			$this->redirect('error');
		}
		// zjistime ID zdroju co maji smlouvu a jsou propojeny s keyword
		$resourceIds = array();
		foreach($this->keywordsResources->findBy(array('keyword_id'=>$keyword)) as $key => $value) {
			$resource = $this->resources->find($value->resource_id);
			if($resource && $resource->contract_id) {
				$resourceIds[] = $resource->id;
			}
		}
		
		// pripravime strankovani
		$vp = $this['vp']; 
        $paginator = $vp->paginator;		
		$paginator->setItemCount(count($resourceIds)); 
		$paginator->setItemsPerPage($this->resourcesPerPage); 

		// nacteme zdroje se strankovanim
		$r = $this->resources->findBy(array('id IN'=>$resourceIds))->order('title ASC')->limit($paginator->getLength(), $paginator->getOffset());

		// nacteme prislusne informace ke zdrojum
		$resources = array();
		foreach($r as $key => $value) {
			$resources[$key] = $value->toArray();
			$resources[$key]['publisher'] = $this->publishers->find($resources[$key]['publisher_id']);
			$resources[$key]['keywords'] = $this->keywordsResources->findBy(array('resource_id'=>$key));
		}
		$this->template->keyword = $this->keywords->find($keyword);
		$this->template->resources = $resources;
		$this->template->paginator = $paginator;
	}
	
	
    public function renderCatalog($category = 0, $subcategory = 0) {

		$this->template->display = $this->display;
		
		$this->template->currentCategory = $this->categories->find($category);
		$this->template->currentSubcategory = $this->subcategories->findOneBy(array('id'=>$subcategory));
		$this->template->resourcesCount = count($this->resources->findBy(array('contract_id IS NOT NULL')));
		$this->template->categoryResourcesCount = count($this->resources->findBy(array('conspectus_id'=>$category,'contract_id IS NOT NULL')));
		
		// nacteme kategorie
		$categories = array();
		foreach($this->categories->findAll()->order('category ASC') as $key => $value) {
			$categoryResourceCount = count($this->resources->findBy(array('conspectus_id'=>$key,'contract_id IS NOT NULL'))); 
			if($categoryResourceCount > 0) { // dale pracuju jen s tema, v kterych jsou nejaky zdroje
				$categories[$key] = $value->toArray();
				$categories[$key]['count'] = $categoryResourceCount; 
			} else {
				continue;
			}
		}
		$this->template->categories = $categories;

		// nacteme podkategorie
		$subcategories = array();
		foreach($this->subcategories->findBy(array('conspectus_id'=>$category))->order('subcategory ASC') as $key => $value) {
			$subcategoryResourceCount = count($this->resources->findBy(array('conspectus_subcategory_id'=>$key,'contract_id IS NOT NULL')));
			if($subcategoryResourceCount > 0) { // dale pracuju jen s tema, v kterych jsou nejaky zdroje
				$subcategories[$key] = $value->toArray();
				$subcategories[$key]['count'] = $subcategoryResourceCount;
			} else {
				continue;
			}
		}
		$this->template->subcategories = $subcategories;
		
		// pripravime strankovani
		if($category == 0) {
			$resourceCount = $this->resources->findBy(array('contract_id IS NOT NULL'))->count();
		} elseif($category > 0 && $subcategory == 0) {
			$resourceCount = $this->resources->findBy(array('conspectus_id'=>$category,'contract_id IS NOT NULL'))->count();
		} elseif($category > 0 && $subcategory > 0) {
			$resourceCount = $this->resources->findBy(array('conspectus_subcategory_id'=>$subcategory,'contract_id IS NOT NULL'))->count();
		}
        $vp = $this['vp']; 
        $paginator = $vp->paginator;		
		$paginator->setItemCount($resourceCount); 
		$paginator->setItemsPerPage($this->resourcesPerPage); 

		// nacteme zdroje
		if($category == 0) {
			$r = $this->resources->findBy(array('contract_id IS NOT NULL'))->order('title ASC')->limit($paginator->getLength(), $paginator->getOffset());
		} elseif($category > 0 && $subcategory == 0) {
			$r = $this->resources->findBy(array('conspectus_id'=>$category,'contract_id IS NOT NULL'))->order('title ASC')->limit($paginator->getLength(), $paginator->getOffset());
		} elseif($category > 0 && $subcategory > 0) {
			$r = $this->resources->findBy(array('conspectus_subcategory_id'=>$subcategory,'contract_id IS NOT NULL'))->order('title ASC')->limit($paginator->getLength(), $paginator->getOffset());
		}
		$resources = array();
		foreach($r as $key => $value) {
			$resources[$key] = $value->toArray();
			$resources[$key]['publisher'] = $this->publishers->find($resources[$key]['publisher_id']);
			$resources[$key]['keywords'] = $this->keywordsResources->findBy(array('resource_id'=>$key));
		}
		$this->template->resources = $resources;
		$this->template->paginator = $paginator;
		

    }

	
/* UTIL */
/********/
	
	public function searchLog($query, $dateFrom = NULL, $dateTill = NULL) {
		
		$httpRequest = $this->context->container->getByType('Nette\Http\Request'); 

		if($dateFrom == "") {$dateFrom = NULL;}
		if($dateTill == "") {$dateTill = NULL;}
		
		$this->searchLogs->create(array(
			'query'=>$query,
			'date_from'=>$dateFrom,
			'date_till'=>$dateTill,
			'added'=>new \DateTime(),
			'ip'=>$httpRequest->getRemoteAddress()
		));
		
	}
	
/* KOMPONENTY */
/**************/

    public function createComponentSmallSearchBox() {

		$form = new Form;

        $form->addText('query', 'Hledaný výraz:', 32)
			 ->addRule(Form::FILLED, NULL);
        $form->addSubmit('submit', 'Enter');

        $form->onSuccess[] = callback($this, 'processSearchBox');

        return $form;
    }
	
	
    public function createComponentBigSearchBox() {

		$form = new Form;

        $form->addText('query', 'Hledaný výraz:', 32)->setAttribute('autofocus')
			 ->addRule(Form::FILLED, NULL);
        $form->addSubmit('submit', 'Enter');
		
        $form->onSuccess[] = callback($this, 'processSearchBox');

        return $form;
    }

    public function createComponentAdvancedSearchForm() {

		$form = new Form;
		$form->addAntispam();

		$form->addText('query', 'URL:*')
			 ->addRule(Form::FILLED, 'Zadejte prosím platné URL.');
		$form->addDatePicker('dateFrom', 'Od:', 10, 10)
			 ->setAttribute('class', 'text');
		$form->addDatePicker('dateTill', 'Do:', 10, 10)
			 ->setAttribute('class', 'text');
		$form->addSubmit('submit', 'Vyhledat');

		$form->onSuccess[] = callback($this, 'processAdvancedSearchForm');

        return $form;
    }	
	
    public function createComponentAddWebForm() {

		$form = new Form;
		$form->addAntispam();

		$form->addText('url', 'URL:*')
			 ->addRule(Form::FILLED, 'Zadejte prosím platné URL.');
		$form->addCheckbox('representative');
		$form->addCheckbox('cc');
		$form->addText('name', 'Jméno:', '', 256);
		$form->addText('email', 'E-mail:*', '', 256)
			 ->addRule(Form::FILLED, 'Zadejte prosím e-mailovou adresu.')
			 ->addRule(Form::EMAIL, 'Zadejte prosím platnou e-mailovou adresu.');
		$form->addTextArea('note', 'Poznámka:');
		$form->addSubmit('submit', 'Přidat web');

		$form->onSuccess[] = callback($this, 'processAddWebForm');

        return $form;
    }	

     public function createComponentFeedbackWebForm() {

		$form = new Form;
		$form->addAntispam();

		$form->addText('name', 'Kontakt:', '', 256);
		$form->addTextArea('note', 'Co se pokazilo? ')
			 ->addRule(Form::FILLED, 'Zadejte prosím, co se pokazilo.');
		$form->addSubmit('submit', 'Odeslat');

		$form->onSuccess[] = callback($this, 'processFeedbackWebForm');

        return $form;
    }

	
/* UKLADANI FORMULARE */
/**********************/

   public function processSearchBox(Form $form) {

		if($form->isSubmitted()) {
            $values = $form->getValues();
			$this->searchLog($values['query']);

			if($this->isUrl($values['query'])) {
				$url = $values['query'];
				// add possible missing http:// protocol
				$url = parse_url($url, PHP_URL_SCHEME) === null ? 'http://' . $url : $url;
				$this->redirectUrl("http://wayback.webarchiv.cz/wayback/query?type=urlquery&url=".$url);
			} else {
				$this->redirect('searchResults', array('query'=>$values['query']));
			}
		}
    }		

   public function processAdvancedSearchForm(Form $form) {

		if($form->isSubmitted()) {
            $values = $form->getValues();
			$this->searchLog($values['query'], $values['dateFrom'], $values['dateTill']);
			$url = $values['query'];
			
			$dateFrom = trim($values['dateFrom'] ? $values['dateFrom']->format('Ymd') : "");
			$dateTill = trim($values['dateTill'] ? $values['dateTill']->format('Ymd') : "");		
			
			if($dateFrom!="" || $dateTill!="") {
				$url .= "&exactdate=&startdate=".$dateFrom."&enddate=".$dateTill;
			}
			// add possible missing http:// protocol
			$url = parse_url($url, PHP_URL_SCHEME) === null ? 'http://' . $url : $url;
			$this->redirectUrl("http://wayback.webarchiv.cz/wayback/query?type=urlquery&url=".$url);
		}
    }		
	
	
	public function processAddWebForm(Form $form) {
		
		if($form->isSubmitted()) {
            $values = $form->getValues();
			$values['added'] = new \DateTime();
			unset($values['spam']);
			unset($values['form_created']);

			// vlozime do DB
			$this->publicNominations->create($values);
			
			if(\Nette\Diagnostics\Debugger::$productionMode) {
				
				$cc = ($values['cc'] == 1 ? "ano" : "ne");
				$representative = ($values['representative'] == 1 ? "ano" : "ne");
				
	            if($this->sendEmails) {
					$mail = new Message;
					$mail->setFrom('Webarchiv.cz  <'.SYSTEM_EMAIL.'>')
						->addTo(SYSTEM_EMAIL)
						->setSubject('Nová nominace webu')
						->setBody("URL: ".$values['url']."\n\nJednatel: ".$representative."\n\nCC: ".$cc."\n\nJméno: ".$values['name']."\n\nE-mail: ".$values['email']."\n\nPoznámka: ".$values['note']);			
					$mailer = new SendmailMailer;
					$mailer->send($mail);			
				}
			}
            $this->flashMessage('Děkujeme za vložení nového webu! Naši kurátoři se Vám brzy ozvou.', 'success');
		}
		$this->redirect('this');
	}		
    


public function processFeedbackWebForm(Form $form) {
		
		if($form->isSubmitted()) {
            $values = $form->getValues();
			$values['added'] = new \DateTime();
			unset($values['spam']);
			unset($values['form_created']);

			// vlozime do DB
			$this->feedback->create($values);
			
            $this->flashMessage('Děkujeme za to, že pomáháte vylepšit český webový archiv', 'success');
		}
		$this->redirect('this');
	}		
    

}