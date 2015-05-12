<?php //netteCache[01]000385a:2:{s:4:"time";s:21:"0.78543900 1429812111";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:71:"/srv/www/htdocs/webarchiv.cz/app/templates/Default/keywordResults.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/templates/Default/keywordResults.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '8td05dkx27')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbcd25522078_title')) { function _lbcd25522078_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if ($lang == 'cs') { ?>Klíčové slovo<?php } else { ?>Keyword<?php } ?> | <?php Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'title', get_defined_vars()) ;
}}

//
// block menuItemActive1
//
if (!function_exists($_l->blocks['menuItemActive1'][] = '_lbc75b9ce483_menuItemActive1')) { function _lbc75b9ce483_menuItemActive1($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?> class="active"<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbafbaec33ab_content')) { function _lbafbaec33ab_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<section id="search">
		<div class="container">

			<h1><?php echo Nette\Templating\Helpers::escapeHtml($keyword->keyword, ENT_NOQUOTES) ?></h1>

			<a href="#" class="link-advanced"><?php if ($lang == 'cs') { ?>pokročilé vyhledávání<?php } else { ?>
advanced search<?php } ?></a>

			<div id="advanced-search">
<?php Nette\Latte\Macros\CoreMacros::includeTemplate("../commonParts/advancedSearch.latte", $template->getParameters(), $_l->templates['8td05dkx27'])->render() ?>
			</div>

<?php if (count($resources) > 0) { ?>
				<p class="results-info">
					<?php if ($lang == 'cs') { ?>celkem: <?php echo Nette\Templating\Helpers::escapeHtml($paginator->getItemCount(), ENT_NOQUOTES) ?>
 výsledků<?php } else { ?>total: <?php echo Nette\Templating\Helpers::escapeHtml($paginator->getItemCount(), ENT_NOQUOTES) ?>
 results<?php } ?>

<?php if ($paginator->getPageCount() > 1) { ?>
						, <?php if ($lang == 'cs') { ?>zobrazeno<?php } else { ?>showing<?php } ?>
: <?php echo Nette\Templating\Helpers::escapeHtml($paginator->getPage(), ENT_NOQUOTES) ?>
 / <?php echo Nette\Templating\Helpers::escapeHtml($paginator->getPageCount(), ENT_NOQUOTES) ?>

						<?php if ($lang == 'cs') { ?>stran<?php } else { ?>pages<?php } ?>

<?php } ?>
				</p>
				<br>
				<p class="italic">
<?php if ($lang == 'cs') { ?>
						Přístup k archivovaným stránkám je v rámci internetu omezen pouze na zdroje, ke kterým jsme od autorů získali smlouvu. Pro ostatní zdroje jsou dostupné pouze informace o počtu sklizených verzí. Na terminálu v <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("contact"), ENT_COMPAT) ?>">Klementinu</a> je pak Webarchiv dostupný bez omezení. Tyto možnosti jsou dány současnou legislativou.</p>
<?php } else { ?>
						Due to copyright restrictions, only a limited number of archived websites for which agreements were signed with the publishers is available online. For other resources you can find out whether a given website was archived and the number of harvested versions. Unlimited access to all resources in Webarchiv is available from public terminals in the <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("contact"), ENT_COMPAT) ?>">National Library</a>.
<?php } ?>
				</p>
<?php } ?>

		</div>
	</section>



<?php if (count($resources) > 0) { ?>

		<section id="catalog-items">
			<div class="container">

				<hr>
				<br>

<div id="<?php echo $_control->getSnippetId('resourceItems') ?>"><?php call_user_func(reset($_l->blocks['_resourceItems']), $_l, $template->getParameters()) ?>
</div>
			</div>
		</section>
<?php } ?>



<?php
}}

//
// block _resourceItems
//
if (!function_exists($_l->blocks['_resourceItems'][] = '_lb2b7a879145__resourceItems')) { function _lb2b7a879145__resourceItems($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('resourceItems', FALSE)
;Nette\Latte\Macros\CoreMacros::includeTemplate("../commonParts/resourceItems.latte", $template->getParameters(), $_l->templates['8td05dkx27'])->render() ;
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