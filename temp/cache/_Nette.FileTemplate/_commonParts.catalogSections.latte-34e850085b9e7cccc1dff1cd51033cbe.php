<?php //netteCache[01]000390a:2:{s:4:"time";s:21:"0.52585000 1429812168";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:76:"/srv/www/htdocs/webarchiv.cz/app/templates/commonParts/catalogSections.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/templates/commonParts/catalogSections.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'ldhof7mwh5')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>
	<section id="catalog-header">
		<div class="container">

<?php if ($lang == 'cs') { ?>
				<h1><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default"), ENT_COMPAT) ?>">Webarchiv<span class="false-link-underline-blue"></span></a> podle oborů</h1><br>
				<p>Přehled nasmlouvaných webů dle oborového třídění:</p>
<?php } else { ?>
				<h1>Browse the <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default"), ENT_COMPAT) ?>">Webarchiv<span class="false-link-underline-blue"></span></a> by subject</h1><br>
				<p>List of a contracted websites by classification system:</p>
<?php } ?>

			<ul class="inline-list categories">
				<li><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("catalog"), ENT_COMPAT) ?>
"<?php if (!$currentCategory) { ?> class="current"<?php } ?>>Vše</a>&nbsp;<?php echo Nette\Templating\Helpers::escapeHtml($resourcesCount, ENT_NOQUOTES) ?>&nbsp;<span class="slash">/</span>&nbsp;</li>

<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($categories) as $category) { if ($category['count'] > 0) { ?>
						<li>
							<a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("catalog", array('category' => $category['id'])), ENT_COMPAT) ?>
"<?php if ($currentCategory && $category['id']==$currentCategory->id) { ?> class="current"<?php } ?>>
								<?php echo Nette\Templating\Helpers::escapeHtml($category['category'], ENT_NOQUOTES) ?>
</a>&nbsp;<?php echo Nette\Templating\Helpers::escapeHtml($category['count'], ENT_NOQUOTES) ;if (!$iterator->isLast()) { ?>
&nbsp;<span class="slash">/</span>&nbsp;<?php } ?>

						</li>
<?php } $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>

			</ul>

<?php if ($currentCategory) { ?>

				<h2 class="italic"><?php echo Nette\Templating\Helpers::escapeHtml($currentCategory->category, ENT_NOQUOTES) ?></h2>

				<ul class="inline-list subcategories">

					<li><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("catalog", array('category' => $currentCategory->id)), ENT_COMPAT) ?>
"<?php if (!$currentSubcategory) { ?> class="current"<?php } ?>>Vše</a>&nbsp;<?php echo Nette\Templating\Helpers::escapeHtml($categoryResourcesCount, ENT_NOQUOTES) ?>&nbsp;<span class="slash">/</span>&nbsp;</li>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($subcategories) as $subcategory) { if ($subcategory['count'] > 0) { ?>
							<li><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("catalog", array('category' => $currentCategory->id, 'subcategory' => $subcategory['id'])), ENT_COMPAT) ?>
"<?php if ($currentSubcategory && $subcategory['id']==$currentSubcategory->id) { ?>
 class="current"<?php } ?>><?php echo Nette\Templating\Helpers::escapeHtml($subcategory['subcategory'], ENT_NOQUOTES) ?>
</a>&nbsp;<?php echo Nette\Templating\Helpers::escapeHtml($subcategory['count'], ENT_NOQUOTES) ;if (!$iterator->isLast()) { ?>
&nbsp;<span class="slash">/</span>&nbsp;<?php } ?></li>
<?php } $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>

				</ul>

<?php } ?>

		</div>
	</section>