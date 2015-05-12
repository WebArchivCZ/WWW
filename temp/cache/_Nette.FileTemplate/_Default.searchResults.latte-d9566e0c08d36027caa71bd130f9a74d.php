<?php //netteCache[01]000384a:2:{s:4:"time";s:21:"0.36865500 1429812732";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:70:"/srv/www/htdocs/webarchiv.cz/app/templates/Default/searchResults.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/templates/Default/searchResults.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'ymfz20yi50')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbaa9f5ba228_title')) { function _lbaa9f5ba228_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if ($lang == 'cs') { ?>Výsledky vyhledávání<?php } else { ?>Search results<?php } ?>
 | <?php Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'title', get_defined_vars()) ;
}}

//
// block menuItemActive1
//
if (!function_exists($_l->blocks['menuItemActive1'][] = '_lbec26be8ef1_menuItemActive1')) { function _lbec26be8ef1_menuItemActive1($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?> class="active"<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb76324ed582_content')) { function _lb76324ed582_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<section id="search">
		<div class="container">

			<?php if (trim($query)!="") { ?><h1><?php echo Nette\Templating\Helpers::escapeHtml($query, ENT_NOQUOTES) ?>
</h1><?php } ?>


			<a href="<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("advancedSearch"), ENT_COMPAT) ?>
"><?php if ($lang == 'cs') { ?>pokročilé vyhledávání<?php } else { ?>advanced search<?php } ?></a>

			<div id="advanced-search">
<?php Nette\Latte\Macros\CoreMacros::includeTemplate("../commonParts/advancedSearch.latte", $template->getParameters(), $_l->templates['ymfz20yi50'])->render() ?>
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

<?php } else { ?>

		<section id="no-results">
			<div class="container">

				<br><br>

<?php if ($lang == 'cs') { ?>
					<p>Bohužel se nám nepodařilo najít zadané slovní spojení.</p>
					<p>Můžete ho zkusit upravit nebo <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("advanced-search"), ENT_COMPAT) ?>">hledat podle adresy</a>.</p>

<?php } else { ?>
					<p>Your search did not match any documents.</p>
					<p>You can try different keywords or <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("advanced-search"), ENT_COMPAT) ?>">search by URL</a>.</p>
<?php } ?>

			</div>
		</section>

<?php } ?>



<?php
}}

//
// block _resourceItems
//
if (!function_exists($_l->blocks['_resourceItems'][] = '_lb7505c3b783__resourceItems')) { function _lb7505c3b783__resourceItems($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('resourceItems', FALSE)
;Nette\Latte\Macros\CoreMacros::includeTemplate("../commonParts/resourceItems.latte", $template->getParameters(), $_l->templates['ymfz20yi50'])->render() ;
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