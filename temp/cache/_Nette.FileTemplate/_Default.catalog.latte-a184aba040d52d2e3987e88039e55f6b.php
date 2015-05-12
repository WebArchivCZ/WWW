<?php //netteCache[01]000378a:2:{s:4:"time";s:21:"0.27393000 1429812168";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:64:"/srv/www/htdocs/webarchiv.cz/app/templates/Default/catalog.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/templates/Default/catalog.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '2g8v6fy9d3')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lba0ba3ab73a_title')) { function _lba0ba3ab73a_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if ($lang == 'cs') { ?>Webarchiv podle oborů<?php } else { ?>Browse by subject | <?php Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'title', get_defined_vars()) ;} 
}}

//
// block menuItemActive3
//
if (!function_exists($_l->blocks['menuItemActive3'][] = '_lb0d4978d0ac_menuItemActive3')) { function _lb0d4978d0ac_menuItemActive3($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?> class="active"<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb0eb1750d98_content')) { function _lb0eb1750d98_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Nette\Latte\Macros\CoreMacros::includeTemplate("../commonParts/catalogSections.latte", $template->getParameters(), $_l->templates['2g8v6fy9d3'])->render() ?>

	<section id="catalog-items">
		<div class="container">

			<hr>
			<br>

<div id="<?php echo $_control->getSnippetId('resourceItems') ?>"><?php call_user_func(reset($_l->blocks['_resourceItems']), $_l, $template->getParameters()) ?>
</div>
		</div>
	</section>

<?php
}}

//
// block _resourceItems
//
if (!function_exists($_l->blocks['_resourceItems'][] = '_lb8e4a7bf330__resourceItems')) { function _lb8e4a7bf330__resourceItems($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('resourceItems', FALSE)
;Nette\Latte\Macros\CoreMacros::includeTemplate("../commonParts/resourceItems.latte", $template->getParameters(), $_l->templates['2g8v6fy9d3'])->render() ;
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
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>


<?php call_user_func(reset($_l->blocks['menuItemActive3']), $_l, get_defined_vars())  ?>



<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 