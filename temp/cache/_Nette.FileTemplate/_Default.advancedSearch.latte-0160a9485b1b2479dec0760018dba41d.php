<?php //netteCache[01]000385a:2:{s:4:"time";s:21:"0.80779100 1429991855";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:71:"/srv/www/htdocs/webarchiv.cz/app/templates/Default/advancedSearch.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/templates/Default/advancedSearch.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '9pnfk28fjg')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbc5ba57d6da_title')) { function _lbc5ba57d6da_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if ($lang == 'cs') { ?>Pokročilé vyhledávání<?php } else { ?>Advanced search<?php } ?>
 | <?php Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'title', get_defined_vars()) ;
}}

//
// block menuItemActive1
//
if (!function_exists($_l->blocks['menuItemActive1'][] = '_lbf9e40cd5fc_menuItemActive1')) { function _lbf9e40cd5fc_menuItemActive1($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?> class="active"<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbfd95680693_content')) { function _lbfd95680693_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<section id="advanced-search">
		<div class="container">

			<h1>Pokročilé vyhledávání <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default"), ENT_COMPAT) ?>">Webarchiv<span class="false-link-underline-blue"></span></a>u</h1>

			<div>
<?php Nette\Latte\Macros\CoreMacros::includeTemplate("../commonParts/advancedSearch.latte", $template->getParameters(), $_l->templates['9pnfk28fjg'])->render() ?>
			</div>

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
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>


<?php call_user_func(reset($_l->blocks['menuItemActive1']), $_l, get_defined_vars())  ?>



<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 