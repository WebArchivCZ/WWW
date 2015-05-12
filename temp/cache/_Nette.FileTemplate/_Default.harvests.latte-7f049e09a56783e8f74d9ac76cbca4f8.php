<?php //netteCache[01]000379a:2:{s:4:"time";s:21:"0.02768600 1429901948";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:65:"/srv/www/htdocs/webarchiv.cz/app/templates/Default/harvests.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/templates/Default/harvests.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'a0b0hb9yh4')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb60a974b411_title')) { function _lb60a974b411_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if ($lang == 'cs') { ?>Celoplošné sklizně<?php } else { ?>Comprehensive Harvests<?php } ?>
 | <?php Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'title', get_defined_vars()) ;
}}

//
// block menuItemActive2
//
if (!function_exists($_l->blocks['menuItemActive2'][] = '_lb3342c0f041_menuItemActive2')) { function _lb3342c0f041_menuItemActive2($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?> class="active"<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb3f7ee4562a_content')) { function _lb3f7ee4562a_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Nette\Latte\Macros\CoreMacros::includeTemplate("../commonParts/about.latte", $template->getParameters(), $_l->templates['a0b0hb9yh4'])->render() ?>

	<section>
		<div class="container">

<?php if ($lang == 'cs') { ?>

				<h2>Celoplošné sklizně</h2>
				<p>Cílem tohoto přístupu je archivace co největšího počtu domácích webových zdrojů na základě parametrů definovaných v aplikovaném SW, tedy vyžadující minimum další intelektuální práce.</p>

				<ul class="normal">
					<li><strong>Doména</strong> – jediným všeobecným doporučením pro plošnou archivaci domácích webových zdrojů je národní doména (národní webový prostor .cz). Zdroje umístěné mimo národní doménu mohou být také archivovány, avšak musí bezpodmínečně splňovat další výběrová kritéria.</li>
				</ul>

				<p>Ostatní aspekty (Formát, Přístup, Počet souborů) jsou volitelné, záleží na technickém vybavení a dalších možnostech.</p>

				<ul class="normal">
					<li><strong>Formát</strong> – automaticky jsou stahovány takové formáty, jaké dokáže aplikovaný harvester stáhnout. Na základě dostupné paměťové kapacity a dalších faktorů lze nastavit limity pro různé typy souborů, kategorie typů souborů, velikosti souborů apod.</li>
					<li><strong>Přístup</strong> – záleží na stavu platné legislativy (autorské právo, povinný výtisk) nebo na vyjednávání s vydavateli (jejich vstřícnost poskytnout přístup ke svým zdrojům), archivovány jsou volně přístupné zdroje</li>
					<li><strong>Počet souborů</strong> – pro většinu zdrojů je doporučeno stahovat maximálně 5000 souborů z jedné domény.</li>
				</ul>

				<table class="in-text">
					<tr>
						<th>Sklizeň:</th>
						<th>Začátek:</th>
						<th>Počet souborů:</th>
						<th>Rozsah (MB):</th>
					</tr>
					<tr>
						<td>CZ 2001</td>
						<td>září 2001</td>
						<td>3 017 058</td>
						<td>106 520</td>
					</tr>
					<tr>
						<td>CZ 2002</td>
						<td>duben 2002</td>
						<td>10 272 093</td>
						<td>315 756</td>
					</tr>
					<tr>
						<td>CZ 2004</td>
						<td>březen 2004</td>
						<td>32 161 396</td>
						<td>1 058 305</td>
					</tr>
					<tr>
						<td>CZ 2005</td>
						<td>červen 2005</td>
						<td>9 336 123</td>
						<td>253 785</td>
					</tr>
					<tr>
						<td>CZ 2006</td>
						<td>srpen 2006</td>
						<td>70 741 016</td>
						<td>3 465 016</td>
					</tr>
					<tr>
						<td>CZ 2007</td>
						<td>listopad 2007</td>
						<td>81 300 000</td>
						<td>3 600 000</td>
					</tr>
					<tr>
						<td>CZ 2008</td>
						<td>listopad 2008</td>
						<td>78 203 483</td>
						<td>3 900 000</td>
					</tr>
					<tr>
						<td>CZ 2009</td>
						<td>listopad 2009</td>
						<td>178 342 230</td>
						<td>6 600 654</td>
					</tr>
					<tr>
						<td>CZ 2010</td>
						<td>listopad 2010</td>
						<td>373 178 080</td>
						<td>9 720 367</td>
					</tr>
					<tr>
						<td>CZ 2011</td>
						<td>listopad 2011</td>
						<td>345 232 271</td>
						<td>10 914 568</td>
					</tr>
					<tr>
						<td>CZ 2014</td>
						<td>březen 2014</td>
						<td>151 329 351</td>
						<td>9 812 113</td>
					</tr>
					<tr>
						<td></td>
						<td>CELKEM:</td>
						<td>1 332 113 301</td>
						<td>49 747 084</td>
					</tr>

				</table>

<?php } else { ?>

				<h2>Comprehensive Harvests</h2>
				<p>The main focus of comprehensive crawls is to automatically harvest the biggest number of Czech web resources. The requirements of comprehensive crawls are: </p>

				<ul class="normal">
					<li><strong>Domain</strong> – Czech domain (.cz) web resources are collected. Resources with other domains can be also harvested, but they have to meet the optional requirements:</li>
				</ul>

				<p>Other requirements are optional: </p>

				<ul class="normal">
					<li><strong>Format</strong> – harvesting different formats of resources depends on a technical settings of the harvester</li>
					<li><strong>Access</strong> – only freely accessible resources are harvested</li>
					<li><strong>Number of files</strong> – maximum 5000 files from one domain</li>
				</ul>

				<p>Statistics of comprehensive harvests of domestic web resources (domain .cz):</p>

				<table class="in-text">
					<tr>
						<th>Harvest:</th>
						<th>Start:</th>
						<th>Total records in collection:</th>
						<th>Size of collection (MB):</th>
					</tr>
					<tr>
						<td>CZ 2001</td>
						<td>September 2001</td>
						<td>3 017 058</td>
						<td>106 520</td>
					</tr>
					<tr>
						<td>CZ 2002</td>
						<td>April 2002</td>
						<td>10 272 093</td>
						<td>315 756</td>
					</tr>
					<tr>
						<td>CZ 2004</td>
						<td>March 2004</td>
						<td>32 161 396</td>
						<td>1 058 305</td>
					</tr>
					<tr>
						<td>CZ 2005</td>
						<td>June 2005</td>
						<td>9 336 123</td>
						<td>253 785</td>
					</tr>
					<tr>
						<td>CZ 2006</td>
						<td>August 2006</td>
						<td>70 741 016</td>
						<td>3 465 016</td>
					</tr>
					<tr>
						<td>CZ 2007</td>
						<td>November 2007</td>
						<td>81 300 000</td>
						<td>3 600 000</td>
					</tr>
					<tr>
						<td>CZ 2008</td>
						<td>November 2008</td>
						<td>78 203 483</td>
						<td>3 900 000</td>
					</tr>
					<tr>
						<td>CZ 2009</td>
						<td>November 2009</td>
						<td>178 342 230</td>
						<td>6 600 654</td>
					</tr>
					<tr>
						<td>CZ 2010</td>
						<td>November 2010</td>
						<td>373 178 080</td>
						<td>9 720 367</td>
					</tr>
					<tr>
						<td>CZ 2011</td>
						<td>November 2011</td>
						<td>345 232 271</td>
						<td>10 914 568</td>
					</tr>
					<tr>
						<td>CZ 2014</td>
						<td>March 2014</td>
						<td>151 329 351</td>
						<td>9 812 113</td>
					</tr>
					<tr>
						<td></td>
						<td>TOTAL:</td>
						<td>1 332 113 301</td>
						<td>49 747 084</td>
					</tr>

				</table>


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