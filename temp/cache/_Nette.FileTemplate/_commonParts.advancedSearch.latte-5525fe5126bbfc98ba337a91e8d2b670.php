<?php //netteCache[01]000389a:2:{s:4:"time";s:21:"0.82386900 1429812111";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:75:"/srv/www/htdocs/webarchiv.cz/app/templates/commonParts/advancedSearch.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/templates/commonParts/advancedSearch.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'i2wserlu80')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = $_control["advancedSearchForm"], array()) ?>

<?php $iterations = 0; foreach ($flashes as $flash) { ?>
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="flash <?php echo Nette\Templating\Helpers::escapeHtml($flash->type, ENT_COMPAT) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($flash->message, ENT_NOQUOTES) ?></div>
						</div>
					</div>
<?php $iterations++; } ?>

<?php if (is_object($form)) $_ctrl = $form; else $_ctrl = $_control->getComponent($form); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->redrawControl(NULL, FALSE); $_ctrl->render('errors') ?>

				<div class="row">
					<div class="col-sm-2 col-md-3 no-right-padding">
						<span class="form-label"><?php if ($_label = $_form["query"]->getLabel()) echo $_label  ?></span>
					</div>
					<div class="col-sm-8 col-md-6">
						<?php echo $_form["query"]->getControl()->addAttributes(array('class' => 'text')) ?>

					</div>
				</div>
				<div class="row">
					<div class="col-sm-2 col-md-3 no-right-padding">
						<span class="form-label"><?php if ($_label = $_form["dateFrom"]->getLabel()) echo $_label  ?></span>
					</div>
					<div class="col-sm-8 col-md-6">
						<div class="row">
							<div class="col-sm-5 no-right-padding">
								<?php echo $_form["dateFrom"]->getControl() ?>

							</div>
							<div class="col-sm-2">
								<span class="form-label"><?php if ($_label = $_form["dateTill"]->getLabel()) echo $_label  ?></span>
							</div>
							<div class="col-sm-5 no-left-padding">
								<?php echo $_form["dateTill"]->getControl() ?>

							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
						<?php echo $_form["submit"]->getControl()->addAttributes(array('class' => 'submit')) ?>

					</div>
				</div>

<?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form) ;