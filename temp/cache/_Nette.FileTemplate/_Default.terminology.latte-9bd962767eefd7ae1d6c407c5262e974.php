<?php //netteCache[01]000382a:2:{s:4:"time";s:21:"0.60272100 1429901951";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:68:"/srv/www/htdocs/webarchiv.cz/app/templates/Default/terminology.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/templates/Default/terminology.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'a7fnytjevw')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb1b24e6aa72_title')) { function _lb1b24e6aa72_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>Terminologie | <?php Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'title', get_defined_vars()) ;
}}

//
// block menuItemActive2
//
if (!function_exists($_l->blocks['menuItemActive2'][] = '_lb51dc1077c2_menuItemActive2')) { function _lb51dc1077c2_menuItemActive2($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?> class="active"<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb21acda33d0_content')) { function _lb21acda33d0_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Nette\Latte\Macros\CoreMacros::includeTemplate("../commonParts/about.latte", $template->getParameters(), $_l->templates['a7fnytjevw'])->render() ?>

	<section>
		<div class="container">

			<h2>Terminologie</h2>

			<ul class="normal">
				<li><strong>Crawler</strong> - počítačový program, který dokáže automaticky procházet a stahovat webové stránky. Crawlery používají zejména internetové vyhledávače a také webové archivy</li>
				<li><strong>Heritrix</strong> - webový crawler vytvořený a používaný pro archivaci webu (procházení webu a stahování jeho obsahu do archivu)</li>
				<li><strong>Archivace</strong> - trvalé uchovávání dokumentů nebo celých sbírek. Obvykle se archivují povinné výtisky, historické dokumenty nebo fondy a další konzervační sbírky, a to na základě zákonného ustanovení anebo interního předpisu příslušné instituce. (TDKIV)</li>
				<li><strong>Sklizně</strong> - procesy automatického stahování a sběru dat z vybraných webových zdrojů (vytváření kopií)</li>
				<li><strong>Semínka</strong> - jednotlivé URL adresy, které jsou předmětem archivace, jeden zdroj může mít více semínek (např. při přesměrování, nebo změně adresy)</li>
				<li><strong>Zpřístupnění</strong> - užití díla, které zahrnuje umožnění vnímání díla jiné osobě, např. rozšiřování, pronájem, půjčování, vystavování, sdělování díla apod., u elektronických zdrojů se jedná zejména o rozšiřování díla prostřednictvím sítě internet (TDKIV)</li>
				<li><strong>Wayback machine</strong> (v překladu doslova stroj času) - služba vytvořená organizací Internet Archive, která slouží jako prohlížeč archivovaných verzí elektronických webových zdrojů</li>
				<li><strong>TLD</strong> (top level domain) - doména nejvyššího řádu, popisuje základní skupinu doménových jmen (např. daného státu), uvedena na konci adresy, např. .cz, .eu, .com</li>
				<li><strong>URL</strong> (uniform resource locator) - řetězec znaků, který specifikuje umístění zdrojů informací na internetu, URL adresa je webová adresa stránek skládající se primárně z názvu protokolu (http), domény (např. webarchiv) a generické domény (např. .cz)</li>
				<li><strong>URI</strong> (uniform resource identifier) - textový řetězec s definovanou strukturou, sloužící k přesné specifikaci zdroje, jedná se o obecný koncept</li>
				<li><strong>WARC</strong> (Web ARChive) - formát určený k uložení webových sklizní vytvořených v rámci archivace</li>
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


<?php call_user_func(reset($_l->blocks['menuItemActive2']), $_l, get_defined_vars())  ?>



<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 