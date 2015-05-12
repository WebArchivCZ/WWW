<?php //netteCache[01]000370a:2:{s:4:"time";s:21:"0.83243000 1429812036";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:56:"/srv/www/htdocs/webarchiv.cz/app/templates/@layout.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/templates/@layout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'uqeqitmyhn')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb0966524a92_title')) { function _lb0966524a92_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;echo $template->firstUpper(DOMAIN_NAME) ;
}}

//
// block ogImage
//
if (!function_exists($_l->blocks['ogImage'][] = '_lb31bbddca5a_ogImage')) { function _lb31bbddca5a_ogImage($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>http://<?php echo Nette\Templating\Helpers::escapeHtml($_SERVER['HTTP_HOST'], ENT_COMPAT) ?>
/images/design/social/facebook.gif<?php
}}

//
// block menuItemActive1
//
if (!function_exists($_l->blocks['menuItemActive1'][] = '_lb36a6ba4a4d_menuItemActive1')) { function _lb36a6ba4a4d_menuItemActive1($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;
}}

//
// block menuItemActive2
//
if (!function_exists($_l->blocks['menuItemActive2'][] = '_lb48f6879fd7_menuItemActive2')) { function _lb48f6879fd7_menuItemActive2($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;
}}

//
// block menuItemActive3
//
if (!function_exists($_l->blocks['menuItemActive3'][] = '_lb6877b2ea08_menuItemActive3')) { function _lb6877b2ea08_menuItemActive3($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;
}}

//
// block menuItemActive4
//
if (!function_exists($_l->blocks['menuItemActive4'][] = '_lbad5c7f77f2_menuItemActive4')) { function _lbad5c7f77f2_menuItemActive4($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb08818209af_content')) { function _lb08818209af_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>
<!DOCTYPE html>
<html lang="cs-CZ">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Tomáš Kořínek">
	<title><?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?></title>

<?php if ($productionMode) { ?>
		<meta property="fb:app_id" content="768657893222364">
		<meta property="og:type" content="website">
		<meta property="og:title" content="<?php call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()) ?>">
		<meta property="og:site_name" content="Webarchiv">
		<meta property="og:url" content="http://<?php echo Nette\Templating\Helpers::escapeHtml($_SERVER['HTTP_HOST'], ENT_COMPAT) ;echo Nette\Templating\Helpers::escapeHtml($_SERVER['REQUEST_URI'], ENT_COMPAT) ?>">
		<meta property="og:description" content="Úlohou Webarchivu shromažďovat webové zdroje, archivovat je a zajišťovat k nim dlouhodobý přístup.">
		<meta property="og:image" content="<?php call_user_func(reset($_l->blocks['ogImage']), $_l, get_defined_vars())  ?>">
<?php } ?>

	<link href="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/favicon.ico?v=1.1" rel="shortcut icon" type="image/x-icon">

	<link rel="stylesheet" href="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/css/bootstrap/bootstrap.min.css" type='text/css' media='all'>
	<link rel="stylesheet" href="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/css/screen.css?v=1.6" type='text/css' media='all'>
	<link rel="stylesheet" href="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/css/jquery-ui/jquery-ui.min.css?v=1.0" type='text/css' media='all'>

	<script type="text/javascript" src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/js/jquery/jquery-1.11.1.min.js?v=1.1"></script>
	<script type="text/javascript" src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/js/jquery/jquery-ui-1.11.2.min.js?v=1.1"></script>
	<script type="text/javascript" src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/js/forms/datepicker.js"></script>
	<script type="text/javascript" src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/js/bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/js/ajax/nette.ajax.js"></script>
	<script type="text/javascript" src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/js/jquery/scripts.js?v=1.3"></script>

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

<?php if ($productionMode) { Nette\Latte\Macros\CoreMacros::includeTemplate("util/googleAnalytics.latte", $template->getParameters(), $_l->templates['uqeqitmyhn'])->render() ;} ?>

</head>

<body>

	<nav class="navbar navbar-default" role="navigation">
		<div class="container">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a class="navbar-brand" href="http://www.nkp.cz/">
					<img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/images/design/logo/logo_NK.svg" alt="Národní knihovna">
				</a>

				<div class="langs">
					<a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default", array('lang' => 'cs')), ENT_COMPAT) ?>
"<?php if ($lang=='cs') { ?> class="current"<?php } ?>>CZ</a>
					<a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default", array('lang' => 'en')), ENT_COMPAT) ?>
"<?php if ($lang=='en') { ?> class="current"<?php } ?>>EN</a>
				</div>

<?php if ($presenter->action!='default' && $presenter->action!='advancedSearch') { ?>
					<a href="#" class="search-icon"></a>
					<div class="small-searchbox-wrapper">
<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = $_control["smallSearchBox"], array()) ?>
							<?php echo $_form["query"]->getControl()->addAttributes(array('class' => 'text')) ?>

							<?php echo $_form["submit"]->getControl()->addAttributes(array('class' => 'submit')) ?>

<?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form) ?>
					</div>
<?php } ?>

			</div>

			<div class="collapse navbar-collapse" id="bs-navbar-collapse">

				<ul class="nav navbar-nav">
					<li<?php call_user_func(reset($_l->blocks['menuItemActive1']), $_l, get_defined_vars())  ?>
><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default"), ENT_COMPAT) ?>
"><?php if ($lang == 'cs') { ?>úvod<?php } else { ?>home<?php } ?></a></li>
					<li<?php call_user_func(reset($_l->blocks['menuItemActive2']), $_l, get_defined_vars())  ?>
><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("about"), ENT_COMPAT) ?>
"><?php if ($lang == 'cs') { ?>o Webarchivu<?php } else { ?>about Webarchiv<?php } ?></a></li>
					<li<?php call_user_func(reset($_l->blocks['menuItemActive3']), $_l, get_defined_vars())  ?>
><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("catalog"), ENT_COMPAT) ?>
"><?php if ($lang == 'cs') { ?>katalog stránek<?php } else { ?>browse<?php } ?></a></li>
					<li<?php call_user_func(reset($_l->blocks['menuItemActive4']), $_l, get_defined_vars())  ?>
><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("add"), ENT_COMPAT) ?>
"><?php if ($lang == 'cs') { ?>přidat web<?php } else { ?>nominate a site<?php } ?></a></li>
				</ul>

			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>


	<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars())  ?>



	<footer>

		<?php if (isset($footerFullBorder)) { ?><hr><?php } ?>


		<div class="container">

			<?php if (isset($footerNoBorder)) { } else { ?><hr><?php } ?>


			<div class="row">

				<div class="col-sm-6 info">
					<ul>
<?php if ($lang=='cs') { ?>
							<li><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default"), ENT_COMPAT) ?>">Webarchiv</a> je pod licencí:</li>
							<li><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("creativeCommons"), ENT_COMPAT) ?>
" class="cc-link"><img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/images/design/cc-icons/by-nc-nd.eu.svg" alt="CC BY NC ND"></a></li>
							<li><br>Koncept a grafickou podobu připravili<br><a href="http://www.kofila.com/" target="_blank">Bohdan Heblík</a> & <a href="http://zlodejpapiru.cz/" target="_blank">Luboš Svoboda</a><br>Do chodu vše uvedl <a href="http://www.tomaskorinek.com/" target="_blank">Tomáš Kořínek</a></li>
<?php } else { ?>
							<li><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default"), ENT_COMPAT) ?>
">Webarchiv</a> is licensed under:<br><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("creativeCommons"), ENT_COMPAT) ?>" class="cc-link"><strong>CC</strong> BY/NC/ND</a></li>
							<li><br>Webdesign:<br><a href="http://www.kofila.com/" target="_blank">Bohdan Heblík</a> & <a href="http://zlodejpapiru.cz/" target="_blank">Luboš Svoboda</a><br>Programming: <a href="http://www.tomaskorinek.com/" target="_blank">Tomáš Kořínek</a></li>
<?php } ?>
					</ul>
				</div>

				<div class="col-sm-2 col-sm-offset-4 external-links">
					<h2><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default"), ENT_COMPAT) ?>">WWW</a></h2>
					<ul>
						<li><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("contact"), ENT_COMPAT) ?>
"><?php if ($lang=='cs') { ?>kontakt<?php } else { ?>contact<?php } ?></a></li>
						<li><a href="https://www.facebook.com/webarchivcr">facebook</a></li>
						<li><a href="http://blog.webarchiv.cz/">blog</a></li>
						<li><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("graphics"), ENT_COMPAT) ?>">logo</a></li>
					</ul>
				</div>

			</div>

		</div>
	</footer>

</body>
</html>


