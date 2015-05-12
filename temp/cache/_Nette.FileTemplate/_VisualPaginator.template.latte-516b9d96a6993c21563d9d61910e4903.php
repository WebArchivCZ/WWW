<?php //netteCache[01]000388a:2:{s:4:"time";s:21:"0.97517400 1429812111";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:74:"/srv/www/htdocs/webarchiv.cz/app/components/VisualPaginator/template.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/components/VisualPaginator/template.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'ytmv26tq5m')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if ($paginator->pageCount > 1) { ?>
<div class="paginator">
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($steps) as $step) { if ($step == $paginator->page) { ?>
		<span class="current blue"><?php echo Nette\Templating\Helpers::escapeHtml($step, ENT_NOQUOTES) ?></span>
<?php } else { ?>
		<a href="<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("this", array('page' => $step)), ENT_COMPAT) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($step, ENT_NOQUOTES) ?></a>
<?php } ?>
	<?php if ($iterator->nextValue > $step + 1) { ?><span>…</span><?php } ?>

<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>

	</div>
<?php } 