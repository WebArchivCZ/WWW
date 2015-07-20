<?php

abstract class BasePresenter extends Nette\Application\UI\Presenter {

    /** @persistent */
    public $lang = NULL;

    public $oldLayoutMode = FALSE;

    // modely
	protected $categoriesCs;
	protected $categoriesEn;
	protected $contracts;
	protected $curators;
	protected $homepageNews;
	protected $keywordsResources;
	protected $keywords;
	protected $publicNominations;
	protected $feedback;
	protected $publishers;
	protected $resources;
	protected $searchLogs; 
	protected $selectedResources;
	protected $subcategoriesCs;
	protected $subcategoriesEn;
	protected $topicCollections;

	// nastaveni
	protected $productionMode;
	protected $sendEmails;
	protected $makeScreenshots;
	
	public function startup() {
        parent::startup();
		\AntispamControl::register();		
		
		$this->productionMode = $this->context->parameters['productionMode'];
		$this->sendEmails = $this->context->parameters['sendEmails'];

		$this->template->productionMode = $this->productionMode;
	}
    
    public function injectBaseModels(
		WebArchiv\CategoriesCs $categoriesCs,
		WebArchiv\CategoriesEn $categoriesEn,
		WebArchiv\Contracts $contracts,
		WebArchiv\Curators $curators,
		WebArchiv\HomepageNews $homepageNews,
		WebArchiv\Keywords $keywords,
		WebArchiv\KeywordsResources $keywordsResources,
		WebArchiv\PublicNominations $publicNominations,
		WebArchiv\Feedback $feedback,
		WebArchiv\Publishers $publishers,
		WebArchiv\Resources $resources,
		WebArchiv\SearchLogs $searchLogs,
		WebArchiv\SelectedResources $selectedResources,
		WebArchiv\SubcategoriesCs $subcategoriesCs,
		WebArchiv\SubcategoriesEn $subcategoriesEn,
		WebArchiv\TopicCollections $topicCollections
	) {
        $this->categoriesCs = $categoriesCs;
        $this->categoriesEn = $categoriesEn;
		$this->contracts = $contracts;
		$this->curators = $curators;
		$this->homepageNews = $homepageNews;
		$this->keywordsResources = $keywordsResources;
		$this->keywords = $keywords;
		$this->publicNominations = $publicNominations;
		$this->feedback = $feedback;
		$this->publishers = $publishers;
		$this->resources = $resources;
		$this->searchLogs = $searchLogs;
		$this->selectedResources = $selectedResources;
		$this->subcategoriesCs = $subcategoriesCs;
		$this->subcategoriesEn = $subcategoriesEn;
		$this->topicCollections = $topicCollections;
    }	

    protected function beforeRender() {
		$this->template->lang = $this->lang;
    }	
	
/* UTIL */
/********/
	
    public function formatDate($dateType, $dateFrom, $dateTill) {
		
		if($dateType == "date") { // je ulozen ve forme datumu
			if($dateFrom) {
				if($dateTill) { // pokud je dateFrom i dateTill, pripiseme k tomu "od do"
					return "od ".date('j. n. Y',strtotime($dateFrom))."<br />do ".date('j. n. Y',strtotime($dateTill));
			}
			return date('j. n. Y',strtotime($dateFrom)); // pokud je jen datefrom, dam jen ten
		}
		} else { // je ulozen custom vyraz
			return $dateType;
		}
    }	
	
	public function isUrl($string) {
		$regex = "((https?|ftp)\:\/\/)?"; // SCHEME
		$regex .= "([a-z0-9+!*(),;?&=\$_.-]+(\:[a-z0-9+!*(),;?&=\$_.-]+)?@)?"; // User and Pass
		$regex .= "([a-z0-9-.]*)\.([a-z]{2,4})"; // Host or IP
		$regex .= "(\:[0-9]{2,5})?"; // Port
		$regex .= "(\/([a-z0-9+\$_-]\.?)+)*\/?"; // Path
		$regex .= "(\?[a-z+&\$_.-][a-z0-9;:@&%=+\/\$_.-]*)?"; // GET Query
		$regex .= "(#[a-z_.-][a-z0-9+\$_.-]*)?"; // Anchor
			
		// decide if query is URL
		if(preg_match("/^$regex$/", $string)) {
			return TRUE;
		} else {
			return FALSE;
		}		
	}
	

/* HELPERS */
/***********/
	
	/**
	 * Registruje helper pro zobrazování obrázků
	 * 
	 * @param string|NULL $class
	 * 
	 * @return Nette\Templating\FileTemplate 
	 */
	public function createTemplate($class = NULL) {
		$tpl = parent::createTemplate($class);
		$tpl->registerHelper('checkImage', callback($this, 'checkImage'));
		return $tpl;
	}
	
	/**
	 * Kotroluje existenci obrázku a vrací příslušné údaje pro jeho zobrazení
	 * 
	 * @param string $filename
	 * @param string $path
	 * @param string $alt
	 * 
	 * @return string 
	 */
	public function checkImage($filename, $path, $alt = NULL) {
		$url = $this->template->baseUrl;
		$imagePath = '/images/'.$path;
		if ($alt) {$alt = "alt=\"$alt\" ";}
		$info = file_exists(WWW_DIR . $imagePath . $filename); // testne zda obrázek existuje
		if ($info) {return 'src="' . $url . $imagePath . $filename . '" '.$alt." ";}
		return $alt . 'src="' . $url . $imagePath . 'default.jpg"';
	}
	
	

    public function createComponentVp() {
        return new VisualPaginator;
    }
	public function savalo_secure_mail($email) {
		$find = array('@','b','c','d','f','g','h','i','j','k','l','m','n','p','q','r','s','t','u','v','w','width','height','z');
		$replace = array('&#64;','&#98;','&#99;','&#100;','&#102;','&#103;','&#104;','&#105;','&#106;','&#107;','&#108;','&#109;','&#110;','&#112;','&#113;','&#114;','&#115;','&#116;','&#117;','&#118;','&#119;','&#120;','&#121;','&#122;');
		return str_replace($find, $replace, $email);
	}	
	
}
