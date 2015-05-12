<?php //netteCache[01]000387a:2:{s:4:"time";s:21:"0.13003900 1429901947";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:73:"/srv/www/htdocs/webarchiv.cz/app/templates/Default/topicCollections.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/templates/Default/topicCollections.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'kw34ogimyz')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb919836f8f7_title')) { function _lb919836f8f7_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if ($lang == 'cs') { ?>Tématické sbírky<?php } else { ?>Topic collections<?php } ?>
 | <?php Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'title', get_defined_vars()) ;
}}

//
// block menuItemActive2
//
if (!function_exists($_l->blocks['menuItemActive2'][] = '_lbaf339d8c36_menuItemActive2')) { function _lbaf339d8c36_menuItemActive2($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?> class="active"<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb05ac65db2a_content')) { function _lb05ac65db2a_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Nette\Latte\Macros\CoreMacros::includeTemplate("../commonParts/about.latte", $template->getParameters(), $_l->templates['kw34ogimyz'])->render() ?>

	<section>
		<div class="container">

<?php if ($lang == 'cs') { ?>

				<h2>Tématické sbírky</h2>
				<p>Tematické sbírky jsou monotematické soubory webových dokumentů. V rámci tematických sklizní sledujeme především takové děje, které doprovází celospolečenská debata a je u nich tedy předpoklad, že zaujmou významnější místo z hlediska dějin České republiky. Cíleně vybíráme události, které mají širší ohlas v prostředí internetu. Monitorujeme očekávané akce (např. volby), ale i nenadálé situace (např. povodně).</p>

				<ul class="normal">
<?php $iterations = 0; foreach ($topicCollections as $topicCollection) { if (!$topicCollection->title_cs) continue ?>
						<li><a href="#<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($template->webalize($topicCollection->title_cs)), ENT_COMPAT) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($topicCollection->title_cs, ENT_NOQUOTES) ?></a></li>
<?php $iterations++; } ?>
				</ul>

<?php } else { ?>

				<h2>Topic collections</h2>

				<ul class="normal">
<?php $iterations = 0; foreach ($topicCollections as $topicCollection) { if (!$topicCollection->title_en) continue ?>
						<li><a href="#<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($template->webalize($topicCollection->title_en)), ENT_COMPAT) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($topicCollection->title_en, ENT_NOQUOTES) ?></a></li>
<?php $iterations++; } ?>
				</ul>

<?php } ?>


			<div class="padding20"></div>
			<hr class="no-margin">

<?php if ($lang == 'cs') { ?>

<?php $iterations = 0; foreach ($topicCollections as $topicCollection) { ?>

<?php if (!$topicCollection->title_cs) continue ?>

					<div id="<?php echo Nette\Templating\Helpers::escapeHtml($template->webalize($topicCollection->title_cs), ENT_COMPAT) ?>"></div>

					<h2><?php echo Nette\Templating\Helpers::escapeHtml($topicCollection->title_cs, ENT_NOQUOTES) ?></h2>
					<p><?php echo Nette\Templating\Helpers::escapeHtml($topicCollection->text_cs, ENT_NOQUOTES) ?></p>
					<?php if ($topicCollection->dates) { ?><p>Datum: <?php echo Nette\Templating\Helpers::escapeHtml($topicCollection->dates, ENT_NOQUOTES) ?>
</p><?php } ?>


<?php $iterations++; } ?>

<?php } else { ?>

<?php $iterations = 0; foreach ($topicCollections as $topicCollection) { ?>

<?php if (!$topicCollection->title_en) continue ?>

					<div id="<?php echo Nette\Templating\Helpers::escapeHtml($template->webalize($topicCollection->title_en), ENT_COMPAT) ?>"></div>

					<h2><?php echo Nette\Templating\Helpers::escapeHtml($topicCollection->title_en, ENT_NOQUOTES) ?></h2>
					<p><?php echo Nette\Templating\Helpers::escapeHtml($topicCollection->text_en, ENT_NOQUOTES) ?></p>
					<?php if ($topicCollection->dates) { ?><p>Date: <?php echo Nette\Templating\Helpers::escapeHtml($topicCollection->dates, ENT_NOQUOTES) ?>
</p><?php } ?>


<?php $iterations++; } ?>

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