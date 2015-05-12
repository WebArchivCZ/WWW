<?php //netteCache[01]000387a:2:{s:4:"time";s:21:"0.12480100 1429812486";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:73:"/srv/www/htdocs/webarchiv.cz/app/AdminModule/templates/Auth/@layout.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/AdminModule/templates/Auth/@layout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '7cmmm2cw0a')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb4db09ac858_title')) { function _lb4db09ac858_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;echo PROJECT_NAME ;
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
<?php if (isset($robots)) { ?>  <meta name="robots" content="<?php echo Nette\Templating\Helpers::escapeHtml($robots, ENT_COMPAT) ?>">
<?php } ?>
  <title><?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?></title>
  <link rel="stylesheet" href="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/css/admin.css" type="text/css" media="screen, projection, tv">
</head>
<body>

  <div id="header">
	  <a id="homelink" href="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>" class="back">Přejít na veřejnou část serveru</a>
  </div><!-- #header -->

  <div id="content">
    <?php $iterations = 0; foreach ($flashes as $flash) { ?><div class="flash <?php echo Nette\Templating\Helpers::escapeHtml($flash->type, ENT_COMPAT) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($flash->message, ENT_NOQUOTES) ?>
</div><?php $iterations++; } ?>

<?php Nette\Latte\Macros\UIMacros::callBlock($_l, 'content', $template->getParameters()) ?>
  </div><!-- #content -->

</body>
</html>