<?php //netteCache[01]000380a:2:{s:4:"time";s:21:"0.11621600 1429813117";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:51:"/srv/www/htdocs/webarchiv.cz/app/config/config.neon";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:59:"/srv/www/htdocs/webarchiv.cz/app/config/config.product.neon";i:2;i:1429813111;}}}?><?php
// source: /srv/www/htdocs/webarchiv.cz/app/config/config.neon production

/**
 * @property Nette\Application\Application $application
 * @property Authenticator $authenticator
 * @property Nette\Caching\Storages\FileStorage $cacheStorage
 * @property WebArchiv\CategoriesCs $categoriesCs
 * @property WebArchiv\CategoriesEn $categoriesEn
 * @property Nette\Database\Connection $connection
 * @property Nette\DI\Container $container
 * @property WebArchiv\Contracts $contracts
 * @property WebArchiv\Curators $curators
 * @property Nette\Database\Context $database
 * @property WebArchiv\HomepageNews $homepageNews
 * @property Nette\Http\Request $httpRequest
 * @property Nette\Http\Response $httpResponse
 * @property WebArchiv\Keywords $keywords
 * @property WebArchiv\KeywordsResources $keywordsResources
 * @property Nette\DI\Extensions\NetteAccessor $nette
 * @property WebArchiv\PublicNominations $publicNominations
 * @property WebArchiv\Publishers $publishers
 * @property WebArchiv\Resources $resources
 * @property Nette\Application\Routers\RouteList $router
 * @property WebArchiv\SearchLogs $searchLogs
 * @property WebArchiv\SelectedResources $selectedResources
 * @property Nette\Http\Session $session
 * @property WebArchiv\SubcategoriesCs $subcategoriesCs
 * @property WebArchiv\SubcategoriesEn $subcategoriesEn
 * @property WebArchiv\TopicCollections $topicCollections
 * @property Nette\Security\User $user
 */
class SystemContainer extends Nette\DI\Container
{

	protected $meta = array(
		'types' => array(
			'nette\\object' => array(
				'nette',
				'nette.cacheJournal',
				'cacheStorage',
				'nette.httpRequestFactory',
				'httpRequest',
				'httpResponse',
				'nette.httpContext',
				'session',
				'nette.userStorage',
				'user',
				'application',
				'nette.presenterFactory',
				'router',
				'nette.mailer',
				'nette.database.default',
				'nette.database.default.context',
				'categoriesCs',
				'categoriesEn',
				'contracts',
				'curators',
				'homepageNews',
				'keywords',
				'keywordsResources',
				'publicNominations',
				'publishers',
				'resources',
				'searchLogs',
				'selectedResources',
				'subcategoriesCs',
				'subcategoriesEn',
				'topicCollections',
				'authenticator',
				'container',
			),
			'nette\\di\\extensions\\netteaccessor' => array('nette'),
			'nette\\caching\\storages\\ijournal' => array('nette.cacheJournal'),
			'nette\\caching\\storages\\filejournal' => array('nette.cacheJournal'),
			'nette\\caching\\istorage' => array('cacheStorage'),
			'nette\\caching\\storages\\filestorage' => array('cacheStorage'),
			'nette\\http\\requestfactory' => array('nette.httpRequestFactory'),
			'nette\\http\\irequest' => array('httpRequest'),
			'nette\\http\\request' => array('httpRequest'),
			'nette\\http\\iresponse' => array('httpResponse'),
			'nette\\http\\response' => array('httpResponse'),
			'nette\\http\\context' => array('nette.httpContext'),
			'nette\\http\\session' => array('session'),
			'nette\\security\\iuserstorage' => array('nette.userStorage'),
			'nette\\http\\userstorage' => array('nette.userStorage'),
			'nette\\security\\user' => array('user'),
			'nette\\application\\application' => array('application'),
			'nette\\application\\ipresenterfactory' => array('nette.presenterFactory'),
			'nette\\application\\presenterfactory' => array('nette.presenterFactory'),
			'nette\\arraylist' => array('router'),
			'traversable' => array('router'),
			'iteratoraggregate' => array('router'),
			'countable' => array('router'),
			'arrayaccess' => array('router'),
			'nette\\application\\irouter' => array('router'),
			'nette\\application\\routers\\routelist' => array('router'),
			'nette\\mail\\imailer' => array('nette.mailer'),
			'nette\\mail\\sendmailmailer' => array('nette.mailer'),
			'nette\\database\\connection' => array('nette.database.default'),
			'nette\\database\\context' => array('nette.database.default.context'),
			'webarchiv\\table' => array(
				'categoriesCs',
				'categoriesEn',
				'contracts',
				'curators',
				'homepageNews',
				'keywords',
				'keywordsResources',
				'publicNominations',
				'publishers',
				'resources',
				'searchLogs',
				'selectedResources',
				'subcategoriesCs',
				'subcategoriesEn',
				'topicCollections',
			),
			'webarchiv\\categoriescs' => array('categoriesCs'),
			'webarchiv\\categoriesen' => array('categoriesEn'),
			'webarchiv\\contracts' => array('contracts'),
			'webarchiv\\curators' => array('curators'),
			'webarchiv\\homepagenews' => array('homepageNews'),
			'webarchiv\\keywords' => array('keywords'),
			'webarchiv\\keywordsresources' => array('keywordsResources'),
			'webarchiv\\publicnominations' => array('publicNominations'),
			'webarchiv\\publishers' => array('publishers'),
			'webarchiv\\resources' => array('resources'),
			'webarchiv\\searchlogs' => array('searchLogs'),
			'webarchiv\\selectedresources' => array('selectedResources'),
			'webarchiv\\subcategoriescs' => array('subcategoriesCs'),
			'webarchiv\\subcategoriesen' => array('subcategoriesEn'),
			'webarchiv\\topiccollections' => array('topicCollections'),
			'nette\\security\\iauthenticator' => array('authenticator'),
			'authenticator' => array('authenticator'),
			'nette\\di\\container' => array('container'),
		),
	);


	public function __construct()
	{
		parent::__construct(array(
			'appDir' => '/srv/www/htdocs/webarchiv.cz/app',
			'wwwDir' => '/srv/www/htdocs/webarchiv.cz',
			'debugMode' => FALSE,
			'productionMode' => TRUE,
			'environment' => 'production',
			'consoleMode' => FALSE,
			'container' => array(
				'class' => 'SystemContainer',
				'parent' => 'Nette\\DI\\Container',
				'accessors' => TRUE,
			),
			'tempDir' => '/srv/www/htdocs/webarchiv.cz/app/../temp',
			'sendEmails' => TRUE,
			'makeScreenshots' => FALSE,
		));
	}


	/**
	 * @return Nette\Application\Application
	 */
	public function createServiceApplication()
	{
		$service = new Nette\Application\Application($this->getService('nette.presenterFactory'), $this->getService('router'), $this->getService('httpRequest'), $this->getService('httpResponse'));
		$service->catchExceptions = TRUE;
		$service->errorPresenter = 'Nette:Error';
		Nette\Application\Diagnostics\RoutingPanel::initializePanel($service);
		return $service;
	}


	/**
	 * @return Authenticator
	 */
	public function createServiceAuthenticator()
	{
		$service = new Authenticator($this->getService('database')->table('curators'));
		return $service;
	}


	/**
	 * @return Nette\Caching\Storages\FileStorage
	 */
	public function createServiceCacheStorage()
	{
		$service = new Nette\Caching\Storages\FileStorage('/srv/www/htdocs/webarchiv.cz/app/../temp/cache', $this->getService('nette.cacheJournal'));
		return $service;
	}


	/**
	 * @return WebArchiv\CategoriesCs
	 */
	public function createServiceCategoriesCs()
	{
		$service = new WebArchiv\CategoriesCs($this->getService('nette.database.default.context'));
		return $service;
	}


	/**
	 * @return WebArchiv\CategoriesEn
	 */
	public function createServiceCategoriesEn()
	{
		$service = new WebArchiv\CategoriesEn($this->getService('nette.database.default.context'));
		return $service;
	}


	/**
	 * @return Nette\Database\Connection
	 */
	public function createServiceConnection()
	{
		$service = $this->getService('nette.database.default');
		return $service;
	}


	/**
	 * @return Nette\DI\Container
	 */
	public function createServiceContainer()
	{
		return $this;
	}


	/**
	 * @return WebArchiv\Contracts
	 */
	public function createServiceContracts()
	{
		$service = new WebArchiv\Contracts($this->getService('nette.database.default.context'));
		return $service;
	}


	/**
	 * @return WebArchiv\Curators
	 */
	public function createServiceCurators()
	{
		$service = new WebArchiv\Curators($this->getService('nette.database.default.context'));
		return $service;
	}


	/**
	 * @return Nette\Database\Context
	 */
	public function createServiceDatabase()
	{
		$service = $this->getService('nette.database.default.context');
		return $service;
	}


	/**
	 * @return WebArchiv\HomepageNews
	 */
	public function createServiceHomepageNews()
	{
		$service = new WebArchiv\HomepageNews($this->getService('nette.database.default.context'));
		return $service;
	}


	/**
	 * @return Nette\Http\Request
	 */
	public function createServiceHttpRequest()
	{
		$service = $this->getService('nette.httpRequestFactory')->createHttpRequest();
		if (!$service instanceof Nette\Http\Request) {
			throw new Nette\UnexpectedValueException('Unable to create service \'httpRequest\', value returned by factory is not Nette\\Http\\Request type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Http\Response
	 */
	public function createServiceHttpResponse()
	{
		$service = new Nette\Http\Response;
		return $service;
	}


	/**
	 * @return WebArchiv\Keywords
	 */
	public function createServiceKeywords()
	{
		$service = new WebArchiv\Keywords($this->getService('nette.database.default.context'));
		return $service;
	}


	/**
	 * @return WebArchiv\KeywordsResources
	 */
	public function createServiceKeywordsResources()
	{
		$service = new WebArchiv\KeywordsResources($this->getService('nette.database.default.context'));
		return $service;
	}


	/**
	 * @return Nette\DI\Extensions\NetteAccessor
	 */
	public function createServiceNette()
	{
		$service = new Nette\DI\Extensions\NetteAccessor($this);
		return $service;
	}


	/**
	 * @return Nette\Forms\Form
	 */
	public function createServiceNette__basicForm()
	{
		$service = new Nette\Forms\Form;
		trigger_error('Service nette.basicForm is deprecated.', 16384);
		return $service;
	}


	/**
	 * @return Nette\Caching\Cache
	 */
	public function createServiceNette__cache($namespace = NULL)
	{
		$service = new Nette\Caching\Cache($this->getService('cacheStorage'), $namespace);
		trigger_error('Service cache is deprecated.', 16384);
		return $service;
	}


	/**
	 * @return Nette\Caching\Storages\FileJournal
	 */
	public function createServiceNette__cacheJournal()
	{
		$service = new Nette\Caching\Storages\FileJournal('/srv/www/htdocs/webarchiv.cz/app/../temp');
		return $service;
	}


	/**
	 * @return Nette\Database\Connection
	 */
	public function createServiceNette__database__default()
	{
		$service = new Nette\Database\Connection('mysql:host=localhost;dbname=wadmin', 'www', 'MrkxcCX58EZpvMe', NULL);
		$service->setContext(new Nette\Database\Context($service, new Nette\Database\Reflection\DiscoveredReflection($service, $this->getService('cacheStorage')), $this->getService('cacheStorage')));
		Nette\Diagnostics\Debugger::getBlueScreen()->addPanel('Nette\\Database\\Diagnostics\\ConnectionPanel::renderException');
		return $service;
	}


	/**
	 * @return Nette\Database\Context
	 */
	public function createServiceNette__database__default__context()
	{
		$service = $this->getService('nette.database.default')->getContext();
		if (!$service instanceof Nette\Database\Context) {
			throw new Nette\UnexpectedValueException('Unable to create service \'nette.database.default.context\', value returned by factory is not Nette\\Database\\Context type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Http\Context
	 */
	public function createServiceNette__httpContext()
	{
		$service = new Nette\Http\Context($this->getService('httpRequest'), $this->getService('httpResponse'));
		return $service;
	}


	/**
	 * @return Nette\Http\RequestFactory
	 */
	public function createServiceNette__httpRequestFactory()
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy(array());
		return $service;
	}


	/**
	 * @return Nette\Latte\Engine
	 */
	public function createServiceNette__latte()
	{
		$service = new Nette\Latte\Engine;
		return $service;
	}


	/**
	 * @return Nette\Mail\Message
	 */
	public function createServiceNette__mail()
	{
		$service = new Nette\Mail\Message;
		trigger_error('Service nette.mail is deprecated.', 16384);
		$service->setMailer($this->getService('nette.mailer'));
		return $service;
	}


	/**
	 * @return Nette\Mail\SendmailMailer
	 */
	public function createServiceNette__mailer()
	{
		$service = new Nette\Mail\SendmailMailer;
		return $service;
	}


	/**
	 * @return Nette\Application\PresenterFactory
	 */
	public function createServiceNette__presenterFactory()
	{
		$service = new Nette\Application\PresenterFactory('/srv/www/htdocs/webarchiv.cz/app', $this);
		return $service;
	}


	/**
	 * @return Nette\Templating\FileTemplate
	 */
	public function createServiceNette__template()
	{
		$service = new Nette\Templating\FileTemplate;
		$service->registerFilter($this->getService('nette.latte'));
		$service->registerHelperLoader('Nette\\Templating\\Helpers::loader');
		return $service;
	}


	/**
	 * @return Nette\Caching\Storages\PhpFileStorage
	 */
	public function createServiceNette__templateCacheStorage()
	{
		$service = new Nette\Caching\Storages\PhpFileStorage('/srv/www/htdocs/webarchiv.cz/app/../temp/cache', $this->getService('nette.cacheJournal'));
		return $service;
	}


	/**
	 * @return Nette\Http\UserStorage
	 */
	public function createServiceNette__userStorage()
	{
		$service = new Nette\Http\UserStorage($this->getService('session'));
		return $service;
	}


	/**
	 * @return WebArchiv\PublicNominations
	 */
	public function createServicePublicNominations()
	{
		$service = new WebArchiv\PublicNominations($this->getService('nette.database.default.context'));
		return $service;
	}


	/**
	 * @return WebArchiv\Publishers
	 */
	public function createServicePublishers()
	{
		$service = new WebArchiv\Publishers($this->getService('nette.database.default.context'));
		return $service;
	}


	/**
	 * @return WebArchiv\Resources
	 */
	public function createServiceResources()
	{
		$service = new WebArchiv\Resources($this->getService('nette.database.default.context'));
		return $service;
	}


	/**
	 * @return Nette\Application\Routers\RouteList
	 */
	public function createServiceRouter()
	{
		$service = new Nette\Application\Routers\RouteList;
		return $service;
	}


	/**
	 * @return WebArchiv\SearchLogs
	 */
	public function createServiceSearchLogs()
	{
		$service = new WebArchiv\SearchLogs($this->getService('nette.database.default.context'));
		return $service;
	}


	/**
	 * @return WebArchiv\SelectedResources
	 */
	public function createServiceSelectedResources()
	{
		$service = new WebArchiv\SelectedResources($this->getService('nette.database.default.context'));
		return $service;
	}


	/**
	 * @return Nette\Http\Session
	 */
	public function createServiceSession()
	{
		$service = new Nette\Http\Session($this->getService('httpRequest'), $this->getService('httpResponse'));
		$service->setExpiration('+30 days');
		return $service;
	}


	/**
	 * @return WebArchiv\SubcategoriesCs
	 */
	public function createServiceSubcategoriesCs()
	{
		$service = new WebArchiv\SubcategoriesCs($this->getService('nette.database.default.context'));
		return $service;
	}


	/**
	 * @return WebArchiv\SubcategoriesEn
	 */
	public function createServiceSubcategoriesEn()
	{
		$service = new WebArchiv\SubcategoriesEn($this->getService('nette.database.default.context'));
		return $service;
	}


	/**
	 * @return WebArchiv\TopicCollections
	 */
	public function createServiceTopicCollections()
	{
		$service = new WebArchiv\TopicCollections($this->getService('nette.database.default.context'));
		return $service;
	}


	/**
	 * @return Nette\Security\User
	 */
	public function createServiceUser()
	{
		$service = new Nette\Security\User($this->getService('nette.userStorage'), $this->getService('authenticator'));
		return $service;
	}


	public function initialize()
	{
		date_default_timezone_set('Europe/Prague');
		Nette\Caching\Storages\FileStorage::$useDirectories = TRUE;
		$this->getByType("Nette\Http\Session")->start();
		header('X-Frame-Options: SAMEORIGIN');
		@header('X-Powered-By: Nette Framework');
		@header('Content-Type: text/html; charset=utf-8');
		Nette\Utils\SafeStream::register();
	}

}
