<?php //netteCache[01]000376a:2:{s:4:"time";s:21:"0.16082300 1429812162";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:62:"/srv/www/htdocs/webarchiv.cz/app/templates/Default/about.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/templates/Default/about.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'xed6fwcat8')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb66588cc775_title')) { function _lb66588cc775_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if ($lang == 'cs') { ?>O Webarchivu<?php } else { ?>About Webarchiv<?php } ?> | <?php Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'title', get_defined_vars()) ;
}}

//
// block menuItemActive2
//
if (!function_exists($_l->blocks['menuItemActive2'][] = '_lbba52ced053_menuItemActive2')) { function _lbba52ced053_menuItemActive2($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?> class="active"<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbd106c0835a_content')) { function _lbd106c0835a_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Nette\Latte\Macros\CoreMacros::includeTemplate("../commonParts/about.latte", $template->getParameters(), $_l->templates['xed6fwcat8'])->render() ?>

	<section>
		<div class="container">

<?php if ($lang == 'cs') { ?>

				<h2>O Webarchivu</h2>
				<p>V prostředí internetu průběžně narůstá obrovské množství publikovaných dokumentů, které se postupně mění nebo zcela mizí. Pokud nebudou průběžně archivovány, tato významná součást národního kulturního dědictví bude nenávratně ztracena. Odpovědnost za archivaci webových zdrojů a jejich registraci v národní bibliografii nesou národní knihovny, příp. další depozitní knihovny.</p>
				<p>Úlohou Webarchivu je řešení problematiky archivace národního webu, tj. bohemikálních dokumentů zveřejněných v prostředí sítě Internet – shromažďování webových zdrojů, jejich archivace a ochrana a zajištění dlouhodobého přístupu k těmto archivovaným dokumentům. Provádí se jednak kompletní archivace, tj. automatický sběr „celého“ českého webu. Souběžně probíhá výběrová archivace (na základě URL nejzajímavějších webových zdrojů vybraných na základě selekčních kritérií) a tématické archivace (zaměřené na určité aktuální téma, např. volby, povodně apod.). Webarchiv je od roku 2007 členem mezinárodního konzorcia pro archivaci webu IIPC.</p>

				<h2>Typy sklizní</h2>
				<p>Národní knihovna ČR provádí tři typy archivace:</p>

				<div class="indent-left">
					<h3>Celoplošná sklizeň</h3>
					<p>Celoplošná sklizeň pokrývá „český web“ – webové zdroje s národní doménou .cz. Cílem celoplošných sklizní je zachycení obrazu českého internetu v daném čase. Seznam těchto zdrojů je dodáván správcem domény, sdružením CZ.NIC. Tato celoplošná sklizeň je prováděna zpravidla jednou ročně.</p>

					<h3>Výběrová sklizeň</h3>
					<p>Vzhledem k omezené kapacitě úložného prostoru není možné sklízet veškerý český web dostatečně. Z tohoto důvodu je budována kolekce zdrojů s kulturní, historickou, výzkumnou, případně další hodnotou napříč všemi tématy. Cílem této kolekce je vytvořit reprezentativní vzorek českého kulturního dědictví, které vzniká elektronicky.</p>

					<h3>Tematická sklizeň</h3>
					<p>Tematické sklizně jsou monotematické soubory webových dokumentů zejména k událostem, které mají širší ohlas v prostředí internetu (např. volby).</p>
				</div>

				<h2>Získávání</h2>
				<p>Získávání dokumentů z webu je po technické stránce převážně automatický proces, kdy se na základě zadaných parametrů ve speciálním SW nástroji stahují data, indexují a ukládají do digitálního archivu. V současné době se používají a přizpůsobují volně dostupné SW nástroje s otevřeným zdrojovým kódem (Heritrix).</p>
				<p>Nezbytnou součástí akvizice je stanovení kritérií výběru zdrojů a výběrová archivace jako intelektuální činnost s cílem registrace nejvýznamnější části publikací na Internetu v České národní bibliografii (ČNB). Praktické řešení získávání dokumentů je podmíněno řešením legislativy, zejména zákonné úpravy povinného výtisku.</p>

				<h2>Kritéria výběru zdrojů</h2>
				<p>Zdroje pro celoplošné sklizně jsou sklízeny na základě seznamu URL adres s doménou .cz poskytovaného správcem domény, sdružením CZ.NIC.</p>
				<p>Nejvýznamnějším kritériem pro výběr zdrojů do výběrových sklizní Webarchivu je bohemikální charakter zdroje. Toto kritérium se řídí pravidlem výběru dokumentů registrovaných v národní bibliografii, které zahrnuje:</p>

				<ul class="normal">
					<li><strong>Území</strong> – všechny dokumenty (zdroje) publikované na území České republiky</li>
					<li><strong>Jazyk</strong> – všechny zdroje v češtině (bez ohledu na místo vydání)</li>
					<li><strong>Autorství</strong> – všechny zdroje českých autorů (bez ohledu na místo vydání)</li>
					<li><strong>Předmět/obsah</strong> – všechny zdroje, jejichž obsah se týká České republiky nebo českého národa (bez ohledu na místo vydání)</li>
				</ul>

				<p>Zdroje jsou do výběrových sklizní zařazovány zejména na základě jejich obsahu. Preferovány jsou zdroje s kulturní, vědeckou či historickou hodnotou, které mají originální a unikátní obsah a dlouhodobou badatelskou hodnotu.</p>

				<h2>Zpřístupnění</h2>
				<p>Na základě autorského zákona jsou kompletní data z Webarchivu zpřístupňována pouze na terminálech v budově Národní knihovny ČR. Zdroje v rámci výběrových sklizní, na které byla uzavřena smlouva, jsou dostupné prostřednictvím webových stránek Webarchivu pomocí nástroje Wayback Machine. Pro všechny zdroje v rámci výběrových sklizní jsou vytvářeny katalogizační záznamy.</p>

				<h2>Legislativa</h2>
				<p>Archivaci webu v České republice, zejména zpřístupnění archivovaných elektronických zdrojů vymezuje Autorský zákon (č. 121/2000 Sb.). Tento zákon umožňuje prostřednictvím tzv. knihovní licence vytvářet rozmnoženiny díla pro své archivní a konzervační účely. Vzhledem ke znění zákona však není možné tyto rozmnoženiny díla volně zpřístupnit veřejnosti. Pro umožnění přístupu k výběrové části archivu je třeba získat souhlas vydavatele stránek.</p>

<?php } else { ?>

				<h2>About Webarchiv</h2>
				<p>The amount of documents published on the Internet is growing dramatically – many of them are often changing and others are even being lost. If the documents that have a research value are not archived a considerable part of the national cultural heritage would disappear forever. The responsibility for archiving online-born documents and their registration in the national bibliography is usually assumed by national libraries and/or other deposit libraries.</p>
				<p>The main aim of the Webarchiv project is to implement a comprehensive solution in the field of archiving of the national web, i.e. bohemical online-born documents. That includes tools and methods for collecting, archiving and preserving web resources as well as providing long-term access to them. Both large-scale automated harvesting of the entire national web and selective archiving are being carried out, including thematic „event-based“ collections. At present these methods are tested and are a subject of further research. To run all operations in a routine way, two conditions must be met: long-term funding has to be provided and the current legal issues have to be solved (primarily the legal deposit legislation).</p>

				<h2>Types of harvests:</h2>

				<div class="indent-left">
					<h3>Comprehesive harvests </h3>
					<p>The main focus of comprehensive crawls is to automatically harvest the biggest number of Czech web resources. The list of URLs is from organisation CZ.NIC.</p>

					<h3>Selective harvests</h3>
					<p>Collection of resources with historical, scientific or cultural value manualy selected. Collection is accessible online due to contracts with publishers.</p>

					<h3>Topic collections </h3>
					<p>Topic collections are collections of resources which are related to certain event of topic, for example elections.</p>
				</div>

				<h2>Collecting online-born documents</h2>
				<p>Strictly from a technical point of view, collecting online documents is an automated process carried out by a set of software tools that harvest, index and save data in the archive according to preassigned parameters. At present open-source software tool (Heritrix) is being used for web crawling.</p>
				<p>Besides that, a set of criteria is being defined for selecting online-born documents in order to register them in the Czech National Bibliography. In this context, finding a suitable solution of the legal issues is considered necessary.</p>

				<h2>Access</h2>
				<p>We have two collections of archived websites. One is available via online access. And its a limited dataset whose content is covered by agreements with its original publishers. Second collection can only be accessed in the Library.</p>

				<h2>Legal issues</h2>
				<p>In general, the current state of legislation in this field is not convenient. Legal Deposit Act doesn‘t cover online-born documents and according to the Copyright Act, it is not possible to make archived data available to public. Fortunately, it is possible to harvest and store online documents to protect them from disappearing forever.</p>

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


<?php call_user_func(reset($_l->blocks['menuItemActive2']), $_l, get_defined_vars())  ?>



<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 