<?php

/**
 * My Application bootstrap file.
 */
use Nette\Application\Routers\Route,
	Nette\Application\Routers\RouteList;

// Load Nette Framework (USE phar in procudtion mode)
//require LIBS_DIR . '/Nette/loader.php'; 

// Settings
define('DOMAIN_NAME','webarchiv.cz');
define('PROJECT_NAME','Webarchiv');
define('PASSWORD_SALT','0po4');
define('SYSTEM_EMAIL', 'webarchiv@nkp.cz');

// Configure application
$configurator = new Nette\Configurator;

// Enable Nette Debugger for error visualisation & logging
//$configurator->setDebugMode(TRUE);
$configurator->enableDebugger(__DIR__ . '/../log');

// Enable RobotLoader - this will load all classes automatically
$configurator->setTempDirectory(__DIR__ . '/../temp');
$configurator->createRobotLoader()
	->addDirectory(APP_DIR)
	->addDirectory(LIBS_DIR)
	->register();


// Create Dependency Injection container from config.neon file
$environment = Nette\Configurator::detectDebugMode('127.0.0.1')
    ? $configurator::DEVELOPMENT
    : $configurator::PRODUCTION;
$configurator->addConfig(__DIR__ . '/config/config.neon', $environment);
$container = $configurator->createContainer();
$container->application->errorPresenter = 'Error';

// DatePicker
\Nette\Forms\Form::extensionMethod('addDatePicker', function(Nette\Forms\Form $_this, $name, $label = NULL, $cols = NULL, $maxLength = NULL)
{
  return $_this[$name] = new RadekDostal\NetteComponents\DateTimePicker\DatePicker($label, $cols, $maxLength);
});

// Setup router

// Admin Router
$container->router[] = $adminRouter = new RouteList();

$adminRouter[] = new Route('admin/<presenter>/<action>/<id>', array(
	'module'    => 'Admin',
	'presenter' => 'Default',
	'action'    => 'default',
));
$adminRouter[] = new Route('admin/<presenter>/<action>', array(
	'module'    => 'Admin',
	'presenter' => 'Default',
	'action'    => 'default',
	'id'        => NULL,
));
        


        

// Front Router
$container->router[] = $frontRouter = new RouteList();


$frontRouter[] = new Route('index.php', array(
    'presenter' => 'Default',
), Route::ONE_WAY);

$frontRouter[] = new Route('', array(
    'lang'      => 'cs',
    'presenter' => 'Default',
), Route::ONE_WAY);

$frontRouter[] = new Route('files/vydavatele/certifikat.html', array(
	'presenter' => 'Default',
	'action' => 'disclaimer',
	'lang' => 'cs'
), Route::ONE_WAY);

$frontRouter[] = new Route('certifikat', array(
	'presenter' => 'Default',
	'action' => 'graphics',
	'lang' => 'cs'
), Route::ONE_WAY);

$frontRouter[] = new Route('<lang en|cs>', array(
	'presenter' => 'Default',
	'action'    => 'default',
	'id'        => NULL,
));



/*$frontRouter[] = new Route('cs/klicove-slovo/<keyword>', array(
	'presenter' => 'Default',
	'action'	=> 'keywordResults',	
	'lang'		=> 'cs',
	'keyword' => array(
		//Route::VALUE => 0,
		Route::FILTER_IN => function ($slug) use ($container) {
			return $container->keywords->slugToId($slug, 'cs');
		},
		Route::FILTER_OUT => function ($id) use ($container) {
			return $container->keywords->idToSlug($id, 'cs');
		},
	),
));*/

$frontRouter[] = new Route('en/browse[/<category>][/<subcategory>]', array(
	'presenter' => 'Default',
	'action'	=> 'catalog',	
	'lang'		=> 'en',
	'category' => array(
		Route::FILTER_IN => function ($slug) use ($container) {
			return $container->categoriesEn->slugToId($slug);
		},
		Route::FILTER_OUT => function ($id) use ($container) {
			return $container->categoriesEn->idToSlug($id);
		},
	),
	'subcategory' => array(
		Route::FILTER_IN => function ($slug) use ($container) {
			return $container->subcategoriesEn->slugToId($slug);
		},
		Route::FILTER_OUT => function ($id) use ($container) {
			return $container->subcategoriesEn->idToSlug($id);
		},
	),
));


$frontRouter[] = new Route('cs/katalog-stranek[/<category>][/<subcategory>]', array(
	'presenter' => 'Default',
	'action'	=> 'catalog',	
	'lang'		=> 'cs',
	'category' => array(
		Route::FILTER_IN => function ($slug) use ($container) {
			return $container->categoriesCs->slugToId($slug);
		},
		Route::FILTER_OUT => function ($id) use ($container) {
			return $container->categoriesCs->idToSlug($id);
		},
	),
	'subcategory' => array(
		Route::FILTER_IN => function ($slug) use ($container) {
			return $container->subcategoriesCs->slugToId($slug);
		},
		Route::FILTER_OUT => function ($id) use ($container) {
			return $container->subcategoriesCs->idToSlug($id);
		},
	),
));



$frontRouter[] = new Route('en/<action>', array(
	'lang'      => 'en',
	'presenter' => 'Default',
	'action' => array(
        Route::VALUE => NULL,
        Route::FILTER_TABLE => array(
            'about' => 'about',
            'nominate-a-website' => 'add',
            'we-are-webarchiv' => 'moreAbout',
            'advanced-search' => 'advancedSearch',
            'search-results' => 'searchResults',
			
			'comprehensive-harvests' => 'harvests',
			'topic-collections' => 'topicCollections',
			'documents' => 'documents',
			'graphics' => 'graphics',
			'contacts' => 'contact',
			
			'creative-commons' => 'creativeCommons',
			'selective-harvests' => 'sourceSelection',
		),
    ),
));


$frontRouter[] = new Route('cs/<action>', array(
	'lang'      => 'cs',
	'presenter' => 'Default',
	'action' => array(
        Route::VALUE => NULL,
        Route::FILTER_TABLE => array(
            'o-webarchivu' => 'about',
            'pridat-web' => 'add',
            'jsme-webarchiv' => 'moreAbout',
            'pokrocile-vyhledavani' => 'advancedSearch',
            'vysledky-vyhledavani' => 'searchResults',
            'klicove-slovo' => 'keywordResults',
			
			'terminologie' => 'terminology',
			'celoplosne-sklizne' => 'harvests',
			'tematicke-sbirky' => 'topicCollections',
			'dokumenty' => 'documents',
			'graficke-materialy' => 'graphics',
			'kontakty' => 'contact',
			
			'creative-commons' => 'creativeCommons',
			'vyber-zdroju' => 'sourceSelection',
			'pomozte-nam-uchovat-cesky-web' => 'cooperation',
			'certifikovano' => 'disclaimer'
		),
    ),
));


/*$frontRouter[] = new Route('[<lang>/]<presenter>/<action>/<id>', array(
	'presenter' => 'Default',
	'action'    => 'default',
	'id'        => NULL,
));*/

$frontRouter[] = new Route('<lang en|cs>/<presenter>/<action>/<id>', array(
	'presenter' => 'Default',
	'action'    => 'default',
	'id'        => NULL,
));



// Configure and run the application!
$container->application->run();



