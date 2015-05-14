<?php //netteCache[01]000380a:2:{s:4:"time";s:21:"0.77882000 1431606091";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:66:"/srv/www/htdocs/webarchiv.cz/app/templates/Default/documents.latte";i:2;i:1431606086;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/templates/Default/documents.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '2ca50d2v5k')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb705278593b_title')) { function _lb705278593b_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if ($lang == 'cs') { ?>Dokumenty<?php } else { ?>Documents<?php } ?> | <?php Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'title', get_defined_vars()) ;
}}

//
// block menuItemActive2
//
if (!function_exists($_l->blocks['menuItemActive2'][] = '_lb17d1f38e44_menuItemActive2')) { function _lb17d1f38e44_menuItemActive2($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?> class="active"<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lba964fa7092_content')) { function _lba964fa7092_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Nette\Latte\Macros\CoreMacros::includeTemplate("../commonParts/about.latte", $template->getParameters(), $_l->templates['2ca50d2v5k'])->render() ?>

	<section>
		<div class="container">

<?php if ($lang == 'cs') { ?>

				<h2>Dokumenty</h2>

				<h3>Publikační činnost</h3>

				<ul class="normal">
					<li>KVASNICA, Jaroslav; BJAČKOVÁ, Barbora. Profilování kolekce a stanovení určené skupiny WebArchivu Národní knihovny ČR. ProInflow [online]. 16.12.2014. Dostupný z WWW: <a href="http://www.phil.muni.cz/journals/index.php/proinflow/article/view/942">http://www.phil.muni.cz/journals/index.php/proinflow/article/view/942</a>. ISSN 1804–2406.</li>
					<li>KVASNICA, Jaroslav; KREIBICH, Rudolf. Formátová analýza sklizených dat v rámci projektu WebArchiv NK ČR. ProInflow [online]. 31.10.2013. Dostupný z WWW: <a href="http://pro.inflow.cz/formatova-analyza-sklizenych-dat-v-ramci-projektu-webarchiv-nk-cr">http://pro.inflow.cz/formatova-analyza-sklizenych-dat-v-ramci-projektu-webarchiv-nk-cr</a>. ISSN 1804–2406.</li>
				</ul>

				<h3>Prezentace</h3>

				<iframe src="//www.slideshare.net/slideshow/embed_code/35563658" width="425" height="355" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe>

				<h3>Referenční zdroje</h3>

				<ul class="normal">
					<li>Autorský zákon + aktualizace 2006 <a href="http://www.nkp.cz/o_knihovnach/AutZak/Index.htm">http://www.nkp.cz/o_knihovnach/AutZak</a></li>
					<li>Federation of European Publishers (CENL/FEP): International declaration on the deposit of electronic publications : Conference of European National Librarians, překlad do češtiny <a href="http://www.webarchiv.cz/files/dokumenty/reference/CENL_FEP.pdf">[PDF]</a></li>
					<li>Dublin Core Czech : soubor metadatových prvků Dublin Core, český překlad <a href="http://www.ics.muni.cz/dublin_core">http://www.ics.muni.cz/dublin_core</a></li>
					<li>Creative Commons Česká republika <a href="http://www.creativecommons.cz">http://www.creativecommons.cz</a></li>
					<li>Internet Archive <a href="http://www.archive.org">http://www.archive.org</a></li>
				</ul>

				<h3>Metodiky</h3>
				<ul class="normal">
					<li>Metodika budování sbírky Webarchivu (Collection policy) <a href="http://webarchiv.cz/download/Collection_Policy.pdf">[PDF]</a></li>
				</ul>
				
<?php } else { ?>

				<h2>Documents</h2>

				<h3>Publications</h3>

				<ul class="normal">
					<li>KVASNICA, Jaroslav; BJAČKOVÁ, Barbora. Profilování kolekce a stanovení určené skupiny WebArchivu Národní knihovny ČR. ProInflow [online]. 16.12.2014. Dostupný z WWW: <a href="http://www.phil.muni.cz/journals/index.php/proinflow/article/view/942">http://www.phil.muni.cz/journals/index.php/proinflow/article/view/942</a>. ISSN 1804–2406.</li>
					<li>KVASNICA, Jaroslav; KREIBICH, Rudolf. Formátová analýza sklizených dat v rámci projektu WebArchiv NK ČR. ProInflow [online]. 31.10.2013. Dostupný z WWW: <a href="http://pro.inflow.cz/formatova-analyza-sklizenych-dat-v-ramci-projektu-webarchiv-nk-cr">http://pro.inflow.cz/formatova-analyza-sklizenych-dat-v-ramci-projektu-webarchiv-nk-cr</a>. ISSN 1804–2406.</li>
				</ul>

				<h3>Presentation</h3>

				<iframe src="//www.slideshare.net/slideshow/embed_code/35563658" width="425" height="355" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe>

				<h3>References</h3>

				<ul class="normal">
					<li>Autorský zákon + aktualizace 2006 <a href="http://www.nkp.cz/o_knihovnach/AutZak/Index.htm">http://www.nkp.cz/o_knihovnach/AutZak</a></li>
					<li>Federation of European Publishers (CENL/FEP): International declaration on the deposit of electronic publications : Conference of European National Librarians, překlad do češtiny <a href="http://www.webarchiv.cz/files/dokumenty/reference/CENL_FEP.pdf">[PDF]</a></li>
					<li>Dublin Core Czech : soubor metadatových prvků Dublin Core, český překlad <a href="http://www.ics.muni.cz/dublin_core">http://www.ics.muni.cz/dublin_core</a></li>
					<li>Creative Commons Česká republika <a href="http://www.creativecommons.cz">http://www.creativecommons.cz</a></li>
					<li>Internet Archive <a href="http://www.archive.org">http://www.archive.org</a></li>
				</ul>

				<h3>Methodics</h3>
				<ul class="normal">
					<li>Collection policy (czech only) <a href="http://webarchiv.cz/download/Collection_Policy.pdf">[PDF]</a></li>
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


<?php call_user_func(reset($_l->blocks['menuItemActive2']), $_l, get_defined_vars())  ?>



<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 