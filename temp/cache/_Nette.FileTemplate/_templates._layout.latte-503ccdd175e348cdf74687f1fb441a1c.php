<?php //netteCache[01]000382a:2:{s:4:"time";s:21:"0.46291800 1429812489";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:68:"/srv/www/htdocs/webarchiv.cz/app/AdminModule/templates/@layout.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/AdminModule/templates/@layout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'pj2544zy6t')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbfd24895353_title')) { function _lbfd24895353_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>ADMIN | <?php echo PROJECT_NAME ?> |<?php
}}

//
// block header
//
if (!function_exists($_l->blocks['header'][] = '_lb8c9af4769c_header')) { function _lb8c9af4769c_header($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
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
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php if (isset($robots)) { ?>    <meta name="robots" content="<?php echo Nette\Templating\Helpers::escapeHtml($robots, ENT_COMPAT) ?>">
<?php } ?>
    <title><?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()) ?>
 </title>

    <link rel="stylesheet" href="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/css/admin.css" media="screen,projection,tv" type="text/css">
    <link rel="stylesheet" href="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/css/forms/datepicker.css" media="screen,projection,tv" type="text/css">
    <link rel="stylesheet" href="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/css/forms/sunny/jquery-ui-1.8.6.custom.css" media="screen,projection,tv" type="text/css">
    <link rel="stylesheet" href="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/css/forms/spectrum.css" media="screen,projection,tv" type="text/css">

    <link rel="stylesheet" href="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/css/print.css" media="print" type="text/css">

    <link href="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/favicon.ico" rel="shortcut icon" type="image/x-icon">

	<script type="text/javascript" src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/js/jquery/jquery-1.11.1.min.js?v=1.1"></script>
	<script type="text/javascript" src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/js/jquery/jquery-ui-1.11.2.min.js?v=1.1"></script>
    <script type="text/javascript" src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/js/jquery/jquery.jcrop.min.js"></script>
    <script type="text/javascript" src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/js/jquery/jquery.color.js"></script>

    <script type="text/javascript" src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/js/forms/datepicker.js"></script>
    <script type="text/javascript" src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/js/forms/datetimepicker.js"></script>
    <script type="text/javascript" src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/js/forms/timepicker-cs.js"></script>
    <script type="text/javascript" src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/js/forms/netteForms.js"></script>

	<script type="text/javascript" src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/js/forms/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/js/forms/spectrum.js"></script>

</head>

<body>
<div id="page">

	<div id="header">

		<div id="userbox">
<?php if (isset($user)) { ?>
			<p>
				Přihlášený jako <strong><?php echo Nette\Templating\Helpers::escapeHtml($user->identity->username, ENT_NOQUOTES) ?></strong> |
				<a href="<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("Default:logout"), ENT_COMPAT) ?>" class="logout">odhlásit</a>
			</p>
<?php } ?>
		</div><!-- #userbox -->
	</div><!-- #header -->


	<ul id="menu">
<?php $iterations = 0; foreach ($menuItems as $id => $item) { ?>
			<li <?php try { $_presenter->link($id.'*'); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
class="current"<?php } ?>>
<?php try { $_presenter->link($id.'*'); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
					<span><?php echo Nette\Templating\Helpers::escapeHtml($item, ENT_NOQUOTES) ?></span>
<?php } else { ?>
					<a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link($id), ENT_COMPAT) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($item, ENT_NOQUOTES) ?></a>
<?php } ?>
			</li>
<?php $iterations++; } ?>
	</ul>


	<h1><?php call_user_func(reset($_l->blocks['header']), $_l, get_defined_vars())  ?></h1>

	<div id="content">
			<?php $iterations = 0; foreach ($flashes as $flash) { ?><div class="flash <?php echo Nette\Templating\Helpers::escapeHtml($flash->type, ENT_COMPAT) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($flash->message, ENT_NOQUOTES) ?>
</div><?php $iterations++; } ?>

<?php Nette\Latte\Macros\UIMacros::callBlock($_l, 'content', $template->getParameters()) ?>
	</div><!-- #content -->

</div><!-- #wrapper -->
</body>
</html>
