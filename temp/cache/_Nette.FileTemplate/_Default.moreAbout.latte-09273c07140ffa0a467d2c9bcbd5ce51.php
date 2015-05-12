<?php //netteCache[01]000380a:2:{s:4:"time";s:21:"0.05250600 1429812153";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:66:"/srv/www/htdocs/webarchiv.cz/app/templates/Default/moreAbout.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/templates/Default/moreAbout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '68wrhy7h64')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb5b7bb6382a_title')) { function _lb5b7bb6382a_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if ($lang == 'cs') { ?>Jsme Webarchiv<?php } else { ?>We are Webarchiv<?php } 
}}

//
// block menuItemActive2
//
if (!function_exists($_l->blocks['menuItemActive2'][] = '_lbdc3d4b3067_menuItemActive2')) { function _lbdc3d4b3067_menuItemActive2($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?> class="active"<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbe316bf5f26_content')) { function _lbe316bf5f26_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if ($lang == 'cs') { ?>

		<section class="paralax section-blue">
			<div class="container">

				<div class="row">
					<div class="col-md-12">

						<h1>Jsme <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default"), ENT_COMPAT) ?>">Webarchiv<span class="false-link-underline-white"></span></a></h1>
						<p>
							digitální knihovna, která uchovává weby <br class="visible-md visible-lg">
							pro budoucí generace.
						</p>
						<p>
							Pokud je nebudeme průběžně archivovat, <br class="visible-md visible-lg">
							zmizí významná součást národního <br class="visible-md visible-lg">
							kulturního dědictví.
						</p>

						<div class="www visible-md visible-lg"><div><span>www</span></div></div>

					</div>
				</div>

			</div>
		</section>

		<section class="paralax section-white">
			<div class="container">

				<h2>Jak archivujeme?</h2>
				<p>
					Provádíme kompletní archivaci<br class="visible-md visible-lg">„celého“ českého webu.
				</p>
				<p>
					Souběžně probíhá <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("catalog"), ENT_COMPAT) ?>">výběrová</a> <br class="visible-md visible-lg">
					a <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("topicCollections"), ENT_COMPAT) ?>">tématická</a> archivace.
				</p>

				<div class="www visible-md visible-lg"><div><span>w<br>w<br>w<br>w<br>w<br>w<br>w<br>w</span></div></div>

			</div>
		</section>

		<section class="paralax section-black">
			<div class="container">

				<h2>Bohužel!</h2>
				<p>
					Ne všechna data jsou dostupná online.
				</p>
				<p>
					Může za to současná podoba autorského zákona, <br class="visible-md visible-lg">
					která byla vymyšlena pro knihy. Pro přístup <br class="visible-md visible-lg">
					k celému archivu musíte prozatím až k <a href="http://www.nkp.cz/" target="_blank">nám</a>.
				</p>

				<div class="www visible-md visible-lg upsideDown"><div><span>w</span></div></div>

			</div>
		</section>

		<section class="paralax section-white">
			<div class="container">

				<h2>Budoucnost</h2>
				<p>
					Webový archiv není jen skladiště URL, na které <br class="visible-md visible-lg">
					usedá prach. Pracujeme na vytvoření fulltextu <br class="visible-md visible-lg">
					celého archivu. Potřebujeme porozumět tomu, <br class="visible-md visible-lg">
					co nesou jednotlivé digitální objekty a co budou <br class="visible-md visible-lg">
					znamenat historicky.
				</p>
				<p>
					Čeká nás otevření Webarchivu analytickému <br class="visible-md visible-lg">
					výzkumu a propojení našich dat s jinými archivy.
				</p>

				<div class="www visible-md visible-lg"><div><span><span class="w1">w</span><span class="w2">w</span><span class="w3">w</span></span></div></div>

			</div>
		</section>

		<section class="paralax section-blue">
			<div class="container">

				<h2>Jak vyhledávat?</h2>
				<p>
					Můžete vyhledávat jak URL <br class="visible-md visible-lg">
					tak klíčová slova.
				</p>
				<p>
					To vše z jednoho vyhledávacího <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default"), ENT_COMPAT) ?>">okna</a>.
				</p>

				<div class="www visible-md visible-lg"><div><span>w______</span></div></div>

			</div>
		</section>

		<section class="paralax last section-white">
			<div class="padding20"></div><div class="padding20"></div>
			<div class="container">

				<div class="www visible-md visible-lg"><div><span><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default"), ENT_COMPAT) ?>
" class="false-link-underline-blue">w</a><br><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default"), ENT_COMPAT) ?>
" class="false-link-underline-blue">w</a> <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default"), ENT_COMPAT) ?>
" class="false-link-underline-blue">w</a><br><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default"), ENT_COMPAT) ?>
" class="false-link-underline-blue">w</a> <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default"), ENT_COMPAT) ?>
" class="false-link-underline-blue">w</a> <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default"), ENT_COMPAT) ?>" class="false-link-underline-blue">w</a></span></div></div>

			</div>
		</section>





	<?php } else { ?>

		<section class="paralax section-blue">
			<div class="container">

				<h1>We are <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default"), ENT_COMPAT) ?>">Webarchiv<span class="false-link-underline-white"></span></a></h1>
				<p>
					the digital library, which preserves web sites <br class="visible-md visible-lg">
					for future generations.
				</p>
				<p>
					Without continuous web content preserving, <br class="visible-md visible-lg">
					the significant part of national heritage <br class="visible-md visible-lg">
					would be lost.
				</p>

				<div class="www visible-md visible-lg"><div><span>www</span></div></div>

			</div>
		</section>

		<section class="paralax section-white">
			<div class="container">

				<h2>How do we archive?</h2>
				<p>
					We perform a complete archivation<br class="visible-md visible-lg">
					of the „entire“ Czech web.
				</p>
				<p>
					The <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("catalog"), ENT_COMPAT) ?>">selected websites</a> <br class="visible-md visible-lg">
					are harvested contemporaneously.
				</p>

				<div class="www visible-md visible-lg"><div><span>w<br>w<br>w<br>w<br>w<br>w<br>w<br>w</span></div></div>

			</div>
		</section>

		<section class="paralax section-black">
			<div class="container">

				<h2>Unfortunatelly,</h2>
				<p>
					not entire data are available online.
				</p>
				<p>
					This is caused by current legal state of copyright. <br class="visible-md visible-lg">
					The entire Webarchiv data are accessible only <br class="visible-md visible-lg">
					in the library building.
				</p>

				<div class="www visible-md visible-lg upsideDown"><div><span>w</span></div></div>

			</div>
		</section>

		<section class="paralax section-white">
			<div class="container">

				<h2>Future</h2>
				<p>
					The present day we work on a creating the <br class="visible-md visible-lg">
					full-text search. We recognize the importance <br class="visible-md visible-lg">
					of understanding of the digital objects and their <br class="visible-md visible-lg">
					historical meaning.
				</p>
				<p>
					Webarchiv expects opening our data <br class="visible-md visible-lg">
					to an analytic data exploration and connection<br class="visible-md visible-lg">
					with other web archiving initiatives.
				</p>

				<div class="www visible-md visible-lg"><div><span><span class="w1">w</span><span class="w2">w</span><span class="w3">w</span></span></div></div>

			</div>
		</section>

		<section class="paralax section-blue">
			<div class="container">

				<h2>How to search?</h2>
				<p>
					You can search by URL address or keyword <br class="visible-md visible-lg">
					in one <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default"), ENT_COMPAT) ?>">search box</a>.
				</p>

				<div class="www visible-md visible-lg"><div><span>w______</span></div></div>

			</div>
		</section>

		<section class="paralax last section-white">
			<div class="padding20"></div><div class="padding20"></div>
			<div class="container">

				<div class="www visible-md visible-lg"><div><span><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default"), ENT_COMPAT) ?>
" class="false-link-underline-blue">w</a><br><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default"), ENT_COMPAT) ?>
" class="false-link-underline-blue">w</a> <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default"), ENT_COMPAT) ?>
" class="false-link-underline-blue">w</a><br><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default"), ENT_COMPAT) ?>
" class="false-link-underline-blue">w</a> <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default"), ENT_COMPAT) ?>
" class="false-link-underline-blue">w</a> <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default"), ENT_COMPAT) ?>" class="false-link-underline-blue">w</a></span></div></div>

			</div>
		</section>



<?php } ?>

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
$footerFullBorder = TRUE; $footerNoBorder = TRUE ?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>


<?php call_user_func(reset($_l->blocks['menuItemActive2']), $_l, get_defined_vars())  ?>



<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 