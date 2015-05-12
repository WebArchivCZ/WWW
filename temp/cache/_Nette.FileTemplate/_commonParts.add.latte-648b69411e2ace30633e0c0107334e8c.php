<?php //netteCache[01]000378a:2:{s:4:"time";s:21:"0.30238500 1429813285";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:64:"/srv/www/htdocs/webarchiv.cz/app/templates/commonParts/add.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/templates/commonParts/add.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'wt7h1kjrdk')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if($lang == 'cs')
			$submenuItems = array(
				'add' => 'Přidejte web',
				'creativeCommons' => 'Creative Commons',
				'sourceSelection' => 'Výběr zdrojů',
				'cooperation' => 'Pomozte nám uchovat český web',
			);
		else
			$submenuItems = array(
				'add' => 'Nominate a website',
				'creativeCommons' => 'Creative Commons',
				'sourceSelection' => 'Selective harvests',
			) ?>

	<section>
		<div class="container">

<?php if ($lang == 'cs') { ?>
				<h1>Nechte se <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default"), ENT_COMPAT) ?>">Webarchiv<span class="false-link-underline-blue"></span></a>ovat!</h1><br>
				<p>Pokud hledáte certifikát či jiné naše grafické materiály pro umístění na vašem webu pokračujte <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("graphics"), ENT_COMPAT) ?>">zde</a></p>
<?php } else { ?>
				<h1>Let’s get <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("default"), ENT_COMPAT) ?>">Webarchiv<span class="false-link-underline-blue"></span></a>ed!</h1><br>
				<p>If you look for our certificate or our banners or logo visit <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("graphics"), ENT_COMPAT) ?>">this page</a></p>
<?php } ?>

			<ul class="inline-list">
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($submenuItems) as $id => $item) { ?>
					<li>
						<a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link($id), ENT_COMPAT) ?>
"<?php try { $_presenter->link($id); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
 class="current"<?php } ?>><?php echo Nette\Templating\Helpers::escapeHtml($item, ENT_NOQUOTES) ?>
</a><?php if (!$iterator->isLast()) { ?>&nbsp;<span class="slash">/</span> <?php } ?>

					</li>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
			</ul>

			<hr>

		</div>

	</section>