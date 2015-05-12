<?php //netteCache[01]000382a:2:{s:4:"time";s:21:"0.66025300 1429901964";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:68:"/srv/www/htdocs/webarchiv.cz/app/templates/Default/cooperation.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/templates/Default/cooperation.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'hfdkds6cd9')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbe841cd585f_title')) { function _lbe841cd585f_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>Pomozte nám uchovat český web | <?php Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'title', get_defined_vars()) ;
}}

//
// block menuItemActive4
//
if (!function_exists($_l->blocks['menuItemActive4'][] = '_lbe8d8118bd9_menuItemActive4')) { function _lbe8d8118bd9_menuItemActive4($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?> class="active"<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbd2cce55677_content')) { function _lbd2cce55677_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Nette\Latte\Macros\CoreMacros::includeTemplate("../commonParts/add.latte", $template->getParameters(), $_l->templates['hfdkds6cd9'])->render() ?>

	<section>
		<div class="container">

			<h2>Pomozte nám uchovat český web</h2>
			<p>Webarchiv Národní knihovny ČR se snaží archivovat a následně zpřístupňovat české elektronické online zdroje. Ve webovém archivu jsou uchovávány webové stránky získané v rámci celoplošných sklizní.</p>
			<p>Podle platné české legislativy nemáme možnost poskytovat k obsahu archivu webu volný přístup. Jedinou možností pro uživatele, jak se dostat k datům ve Webarchivu, je přístup z terminálu v Národní knihovně. U vybraných webových stránek splňujících stanovená kritéria, usilujeme jako náhradní řešení o dohodu s vydavatelem, umožňující online přístup.</p>

			<h2>Spolupracujte s Webarchivem</h2>
			<p><strong>Vydáváte kvalitní webové stránky?</strong></p>
			<ul class="normal">
				<li>Dejte nám o nich vědět prostřednictvím <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("add"), ENT_COMPAT) ?>">formuláře</a>.</li>
				<li>My vás kontaktujeme a pokusíme se s vámi uzavřít smlouvu, která nám umožní zpřístupňovat archiv Vašich webových stránek online přímo přes internet.</li>
				<li>Vystavili jste obsah Vašich stránek pod licencí <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("creativeCommons"), ENT_COMPAT) ?>
">Creative Commons</a> (CC)? <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("add"), ENT_COMPAT) ?>">Ozvěte se nám!</a></li>
				<li>Na náhled smlouvy o poskytování elektronických online zdrojů se můžete podívat <a href="http://www.webarchiv.cz/file_download/12/smlouvaWebarchiv.doc">zde</a>.</li>
			</ul>

			<h2>Co získáte spoluprácí s námi?</h2>
			<ul class="normal">
				<li>Vaše webové stránky budou <strong>trvale uchovány pro budoucnost a stanou se tak součástí národního kulturního dědictví</strong>, o které pečuje Národní knihovna ČR.</li>
				<li>Váš zdroj bude <strong>zkatalogizován</strong> stejným způsobem jako např. knižní publikace a bude zařazen do České národní bibliografie a do <a href="http://aleph.nkp.cz/F/?func=file&file_name=find-a&local_base=web" target="_blank">online katalogu Národní knihovny</a>.</li>
				<li>Na své stránky si můžete umístit náš <strong><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("graphics"), ENT_COMPAT) ?>">certifikát</a> „Stránky archivovány Národní knihovnou ČR“</strong>.</li>
			</ul>

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


<?php call_user_func(reset($_l->blocks['menuItemActive4']), $_l, get_defined_vars())  ?>



<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 