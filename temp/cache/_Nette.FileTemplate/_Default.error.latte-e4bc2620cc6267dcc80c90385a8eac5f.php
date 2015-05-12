<?php //netteCache[01]000376a:2:{s:4:"time";s:21:"0.66305900 1429814077";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:62:"/srv/www/htdocs/webarchiv.cz/app/templates/Default/error.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/templates/Default/error.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '9j8otq7sh8')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb4d62cd2e9e_title')) { function _lb4d62cd2e9e_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if ($lang == 'cs') { ?>Chyba<?php } else { ?>Error<?php } ?> 404 | <?php Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'title', get_defined_vars()) ;
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbbd199ded4c_content')) { function _lbbd199ded4c_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<section id="error">
		<div class="container">

			<h1>
<?php if ($lang == 'cs') { ?>
					<a href="http://cs.wikipedia.org/wiki/HTTP_404">Chyba 404<span class="false-link-underline-blue"></span></a> na <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("Default:default"), ENT_COMPAT) ?>">Webarchiv<span class="false-link-underline-blue"></span></a>u
<?php } else { ?>
					<a href="http://en.wikipedia.org/wiki/HTTP_404">Error 404<span class="false-link-underline-blue"></span></a> on <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("Default:default"), ENT_COMPAT) ?>">Webarchiv<span class="false-link-underline-blue"></span></a>
<?php } ?>
			</h1>

		</div>
	</section>



<?php
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
$footerNoBorder = TRUE ?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>



<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 