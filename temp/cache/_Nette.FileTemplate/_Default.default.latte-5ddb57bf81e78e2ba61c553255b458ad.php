<?php //netteCache[01]000378a:2:{s:4:"time";s:21:"0.64813400 1429812036";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:64:"/srv/www/htdocs/webarchiv.cz/app/templates/Default/default.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/templates/Default/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '843c6xqil1')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb98e161538a_title')) { function _lb98e161538a_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>Webarchiv - <?php if ($lang == 'cs') { ?>památník českého internetu<?php } else { ?>
the Museum of Czech web<?php } 
}}

//
// block menuItemActive1
//
if (!function_exists($_l->blocks['menuItemActive1'][] = '_lb9c7a3f2a3c_menuItemActive1')) { function _lb9c7a3f2a3c_menuItemActive1($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?> class="active"<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbacbbe740e9_content')) { function _lbacbbe740e9_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<section id="main-search">
		<div class="container">

			<div class="row">
				<div class="col-md-8 col-md-offset-2">

					<div class="main-header">
						<h1><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default"), ENT_COMPAT) ?>">Webarchiv<span class="false-link-underline-blue"></span></a></h1>
<?php if ($lang == 'cs') { ?>
							<p class="italic">památník českého internetu, <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("moreAbout"), ENT_COMPAT) ?>">více</a></p>
<?php } else { ?>
							<p class="italic">the Museum of Czech web, <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("moreAbout"), ENT_COMPAT) ?>">more</a></p>
<?php } ?>
					</div>

					<div class="searchbox-wrapper-outer">

						<div class="searchbox-wrapper">

<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = $_control["bigSearchBox"], array()) ?>
								<?php echo $_form["query"]->getControl()->addAttributes(array('class' => 'query')) ?>

								<?php echo $_form["submit"]->getControl()->addAttributes(array('class' => 'submit')) ?>

<?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form) ?>

						</div>

<?php if ($lang == 'cs') { ?>
							<p class="italic">hledejte „webarchiv.cz“ nebo „webarchiv“, <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("advancedSearch"), ENT_COMPAT) ?>">pokročilé</a></p>
<?php } else { ?>
							<p class="italic">search „webarchiv.cz“ or „webarchiv“, <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("advancedSearch"), ENT_COMPAT) ?>">advanced</a></p>
<?php } ?>
					</div>

				</div>
			</div>
		</div>
	</section>


	<section id="news">
		<div class="container">

			<div class="row">

<?php if ($homepageNew) { ?>
					<div class="col-md-4 col-sm-6">

						<div class="news-column left-news">

							<div class="visible-xs">
								<hr>
							</div>

<?php if ($lang=="cs") { ?>
								<?php echo $homepageNew->text_cs ?>

<?php } else { ?>
								<?php echo $homepageNew->text_en ?>

<?php } ?>

						</div>
					</div>
<?php } ?>

				<div class="col-md-4 col-sm-6">

					<div class="news-column">

						<div class="visible-xs">
							<hr><br><br>
						</div>

<?php if ($lang=='cs') { ?>
							<p>Výběr z katalogu stránek, <br class="visible-md visible-lg"><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("catalog"), ENT_COMPAT) ?>">více v oborovém třídění</a></p>
<?php } else { ?>
							<p>Selection of contracted websites, <br class="visible-md visible-lg"><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("catalog"), ENT_COMPAT) ?>">see the full list</a></p>
<?php } ?>

<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($selectedResources) as $selectedResource) { ?>

							<h2><a href="http://wayback.webarchiv.cz/wayback/query?type=urlquery&url=<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($selectedResource['url']), ENT_COMPAT) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($selectedResource['title'], ENT_NOQUOTES) ?></a></h2>
							<?php if ($selectedResource['annotation']) { ?><p><?php echo Nette\Templating\Helpers::escapeHtml($selectedResource['annotation'], ENT_NOQUOTES) ?>
</p><?php } ?>

							<?php if ($selectedResource['publisher']) { ?><p>Vydavatel: <?php echo Nette\Templating\Helpers::escapeHtml($selectedResource['publisher'], ENT_NOQUOTES) ?>
</p><?php } ?>

<?php if ($selectedResource['keywords']->count() > 0) { ?>
								<ul class="inline-list">
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($selectedResource['keywords']) as $keyword) { ?>
										<li><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("keywordResults", array('keyword'=>$keyword->id)), ENT_COMPAT) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($keyword->keyword, ENT_NOQUOTES) ?>
</a><?php if (!$iterator->isLast()) { ?>, <?php } ?></li>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
								</ul>
<?php } ?>

							<?php if (!$iterator->isLast()) { ?><hr><?php } ?>


<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
					</div>

					<div class="visible-sm visible-xs">
						<br>
					</div>

				</div>

				<div class="clearfix visible-sm"></div>

				<div class="col-md-4 stats">

					<div class="news-column">

						<div class="visible-sm visible-xs clear">
							<hr><br>
						</div>

<?php if ($lang == 'cs') { if (isset($webarchiveSize)) { if (trim($webarchiveSize) != "") { ?>
									<p><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default"), ENT_COMPAT) ?>
">Webarchiv</a> k <?php echo date('j. n. Y') ?> obsahuje <span class="h1-size"><?php echo Nette\Templating\Helpers::escapeHtml($template->trim($webarchiveSize), ENT_NOQUOTES) ?></span> dat. První dokument byl archivován 3. 9. 2001.</p>
									<hr><br>
<?php } } ?>
							<p>Celkem jsme s autory uzavřeli <span class="h1-size"><?php echo Nette\Templating\Helpers::escapeHtml($resourceCount, ENT_NOQUOTES) ?></span> smluv. Poslední aktuální smlouvy:</p>
<?php } else { ?>
							<p><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default"), ENT_COMPAT) ?>
">Webarchiv</a> contains to <?php echo date('j. n. Y') ?> <span class="h1-size">87,4 TB</span> data. The first website was harvested in 3. 9. 2001.</p>
							<hr><br>
							<p>We concluded <span class="h1-size"><?php echo Nette\Templating\Helpers::escapeHtml($resourceCount, ENT_NOQUOTES) ?></span> contracts with a publishers at the moment. The last contracts are for these websites:</p>
<?php } ?>

<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($lastResources) as $lastResource) { ?>
							<ul>
								<li><a href="http://wayback.webarchiv.cz/wayback/query?type=urlquery&url=<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($lastResource->url), ENT_COMPAT) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($lastResource->title, ENT_NOQUOTES) ?>
</a><?php if (!$iterator->isLast()) { ?>, <?php } ?></li>
							</ul>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
					</div>

				</div>

			</div>
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


<?php call_user_func(reset($_l->blocks['menuItemActive1']), $_l, get_defined_vars())  ?>



<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars())  ?>

