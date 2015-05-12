<?php //netteCache[01]000388a:2:{s:4:"time";s:21:"0.93694900 1429812111";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:74:"/srv/www/htdocs/webarchiv.cz/app/templates/commonParts/resourceItems.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/templates/commonParts/resourceItems.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'iybeozbo34')
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

<?php if ($lang == 'cs') { ?>
		Zobrazení: <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("this", array('display'=>'images')), ENT_COMPAT) ?>
" class="<?php if ($display=='images') { ?>current<?php } ?>">vizuální</a>, <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("this", array('display'=>'text')), ENT_COMPAT) ?>
" class="<?php if ($display=='text') { ?>current<?php } ?>">textové</a>
<?php } else { ?>
		Display: <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("this", array('display'=>'images')), ENT_COMPAT) ?>
" class="<?php if ($display=='images') { ?>current<?php } ?>">visual</a>, <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("this", array('display'=>'text')), ENT_COMPAT) ?>
" class="<?php if ($display=='text') { ?>current<?php } ?>">text</a>
<?php } ?>

<?php if ($display == 'images') { ?>

		<div class="row">

<?php $i = 0; $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($resources) as $resource) { ?>

				<div class="col-xs-6 col-sm-4 col-md-3">

					<div class="item-visual">
						<a href="http://wayback.webarchiv.cz/wayback/query?type=urlquery&url=<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($template->trim($resource['url'])), ENT_COMPAT) ?>">
							<div class="img-wrapper thumb">
<?php $src = "images/resource/thumb/small_".$resource['id']."_".$resource['screenshot_date'].".jpg"; if (file_exists(WWW_DIR."/".$src)) { ?>
									<img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>
/<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($src), ENT_COMPAT) ?>
" class="aspect-ratio" alt="<?php echo Nette\Templating\Helpers::escapeHtml($resource['title'], ENT_COMPAT) ?>">
<?php } else { $i++ ?>
									<div class="aspect-ratio">
										<div class="no-image">
											<span class="small">www</span>
										</div>
									</div>
<?php } ?>
							</div>
							<h2><?php echo Nette\Templating\Helpers::escapeHtml($resource['title'], ENT_NOQUOTES) ?></h2>
						</a>

					</div>

				</div>

<?php if ($iterator->counter % 2 == 0 || $iterator->counter % 3 == 0 || $iterator->counter % 4 == 0) { ?>
					<div class="<?php if ($iterator->counter % 2 == 0) { ?>clearfix visible-xs-block<?php } ?>

								<?php if ($iterator->counter % 3 == 0) { ?>clearfix visible-sm-block<?php } ?>

								<?php if ($iterator->counter % 4 == 0) { ?>clearfix visible-md-block visible-lg-block<?php } ?>">
					</div>
<?php } ?>

<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>

		</div>

<?php } else { ?>

<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($resources) as $resource) { ?>

			<div class="row">
				<div class="col-md-12 item-textual">

					<h2><a href="http://wayback.webarchiv.cz/wayback/query?type=urlquery&url=<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($template->trim($resource['url'])), ENT_COMPAT) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($resource['title'], ENT_NOQUOTES) ?></a></h2>
					<p><span class="italic"><?php echo Nette\Templating\Helpers::escapeHtml($template->replace($template->replace($template->trim($resource['url']), 'http://', ''), 'https://', ''), ENT_NOQUOTES) ?>
</span> <span class="blue">[</span><a href="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($resource['url']), ENT_COMPAT) ?>
"><?php if ($lang == 'cs') { ?>aktuální verze<?php } else { ?>current version<?php } ?></a><span class="blue">]</span></p>
					<?php if ($resource['annotation']) { ?><p><?php echo Nette\Templating\Helpers::escapeHtml($resource['annotation'], ENT_NOQUOTES) ?>
</p><?php } ?>

					<?php if ($resource['publisher']) { ?><p><?php if ($lang == 'cs') { ?>Vydavatel:<?php } else { ?>
Publisher:<?php } ?> <?php echo Nette\Templating\Helpers::escapeHtml($resource['publisher']->name, ENT_NOQUOTES) ?>
</p><?php } ?>

<?php if ($resource['keywords']->count() > 0) { ?>
						<ul class="inline-list">
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($resource['keywords']) as $keyword) { ?>
								<li><a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("keywordResults", array('keyword'=>$keyword->keyword->id)), ENT_COMPAT) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($keyword->keyword->keyword, ENT_NOQUOTES) ?>
</a><?php if (!$iterator->isLast()) { ?>, <?php } ?></li>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
						</ul>
<?php } ?>

				</div>
			</div>

<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>

<?php } ?>

	<div class="row">
		<div class="col-md-12">
<?php $_ctrl = $_control->getComponent("vp"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->redrawControl(NULL, FALSE); $_ctrl->render() ?>
		</div>
	</div>

