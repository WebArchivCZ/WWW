<?php //netteCache[01]000386a:2:{s:4:"time";s:21:"0.00820300 1429991821";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:72:"/srv/www/htdocs/webarchiv.cz/app/templates/Default/sourceSelection.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/templates/Default/sourceSelection.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'ejs2rno2g8')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbd198ae854a_title')) { function _lbd198ae854a_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if ($lang == 'cs') { ?>Výběr zdrojů<?php } else { ?>Selection criteria<?php } ?>
 | <?php Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'title', get_defined_vars()) ;
}}

//
// block menuItemActive4
//
if (!function_exists($_l->blocks['menuItemActive4'][] = '_lbc2dd92ab35_menuItemActive4')) { function _lbc2dd92ab35_menuItemActive4($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?> class="active"<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb70521d3209_content')) { function _lb70521d3209_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Nette\Latte\Macros\CoreMacros::includeTemplate("../commonParts/add.latte", $template->getParameters(), $_l->templates['ejs2rno2g8'])->render() ?>

	<section>
		<div class="container">

<?php if ($lang == 'cs') { ?>

				<h2>Výběr zdrojů</h2>

				<h3>Kritéria výběru zdrojů pro výběrové sklizně:</h3>

				<p>Nejvýznamnějším kritériem pro výběr zdrojů do výběrových sklizní Webarchivu je <i>bohemikální charakter zdroje</i>. Toto kritérium se řídí pravidlem výběru dokumentů registrovaných v národní bibliografii, které zahrnuje:</p>
				<ul class="normal">
					<li><strong>Území</strong> – všechny dokumenty (zdroje) publikované na území České republiky</li>
					<li><strong>Jazyk</strong> – všechny zdroje v češtině (bez ohledu na místo vydání)</li>
					<li><strong>Autorství</strong> – všechny zdroje českých autorů (bez ohledu na místo vydání)</li>
					<li><strong>Předmět/obsah</strong> – všechny zdroje, jejichž obsah se týká České republiky nebo českého národa (bez ohledu na místo vydání)</li>
				</ul>

				<p>Zdroje jsou do výběrových sklizní zařazovány zejména na základě jejich obsahu. Preferovány jsou zdroje s kulturní, vědeckou či historickou hodnotou, které mají originální a unikátní obsah a dlouhodobou badatelskou hodnotu.</p>
				<p>K archivaci jsou zařazovány pouze volně přístupné/zveřejněné zdroje. Případně je nutné, aby byla přístupná obsahově podstatná část zdroj (zdroj může obsahovat např. sekci pro registrované uživatele).</p>
				<p>Z hlediska formátu zdroje jsou archivovány zdroje v běžných formátech, které lze zobrazit pomocí webového prohlížeče.</p>
				<p>Zdroje jsou také zařazovány s přihlédnutím k jejich technické povaze, jelikož není možné z technického hlediska sklidit všechny zdroje v takové podobě, v jaké se nacházejí na webu. V současnosti je problematické archivovat stránky a jejich prvky vytvořené v Javascriptu, animace vytvořené programem Flash či rozbalovací nabídku (tzv. drop down menu).</p>

				<h3>Doporučení pro výběrové sklizně:</h3>
				<ul class="normal">
					<li><strong>Otázka autorských práv</strong> – před zařazením zdroje do archivu by měl být znám držitel autorských práv</li>
					<li><strong>Integrita zdroje</strong> – preferováno je sklízení zdrojů, které tvoří logický celek (např. celá webová stránka, ne pouze její součást)</li>
					<li><strong>Frekvence sklízení</strong> – zdroje zvolené na základě výběrových kritérií lze sklízet 1 až 12x ročně, případně jednorázově v případě, že se jedná o statický dokument, u kterého se již nepředpokládá jeho aktualizace (např. elektronická publikace monografické povahy).</li>
				</ul>

<?php } else { ?>

				<h2>Selective harvests</h2>

				<h3>Selection criteria</h3>

				<p>The selective approach includes bohemical documents based on (only one is sufficent):</p>
				<ul class="normal">
					<li><strong>Territory</strong> – documents published in Czech Republic</li>
					<li><strong>Language</strong> – documents in Czech (territory doesn’t matter)</li>
					<li><strong>Autorship</strong>– documents created by Czech author (territory doesn’t matter)</li>
					<li><strong>Content</strong> – documents relating to Czech republic  (territory doesn’t matter)</li>
				</ul>

				<p>The documents with a cultural, historical, scientific value with a unique and original content are prefered.</p>

				<p>We harvest:</p>

				<ul class="normal">
					<li>only freely accessible resources</li>
					<li>resources in common formats</li>
					<li>technically accessible documents (javascript, flash, drop-down menu are problematic)</li>
				</ul>

				<h3>Recommendation for selective harvests:</h3>
				<ul class="normal">
					<li><strong>Copyright</strong> – the copyright holder should be known</li>
					<li><strong>Integrity</strong> – the related resources are harvested</li>
					<li><strong>Frequency</strong> – resources in selective harvests are crawled from once a year to 12 times a year</li>
				</ul>

<?php } ?>

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