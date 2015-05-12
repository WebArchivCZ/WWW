<?php //netteCache[01]000374a:2:{s:4:"time";s:21:"0.89075700 1429901928";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:60:"/srv/www/htdocs/webarchiv.cz/app/templates/Default/add.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/templates/Default/add.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '0m0bb5zvte')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb3bd72df906_title')) { function _lb3bd72df906_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if ($lang == 'cs') { ?>Nechte se Webarchivovat!<?php } else { ?>Let’s get Webarchived!<?php } ?>
 | <?php Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'title', get_defined_vars()) ;
}}

//
// block menuItemActive4
//
if (!function_exists($_l->blocks['menuItemActive4'][] = '_lb87f57dd669_menuItemActive4')) { function _lb87f57dd669_menuItemActive4($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?> class="active"<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb8119f0001d_content')) { function _lb8119f0001d_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Nette\Latte\Macros\CoreMacros::includeTemplate("../commonParts/add.latte", $template->getParameters(), $_l->templates['0m0bb5zvte'])->render() ?>

	<section id="add-web">
		<div class="container">

			<h2>Přidejte web</h2>

<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = $_control["addWebForm"], array()) ?>

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
						<span class="form-label"><?php if ($_label = $_form["url"]->getLabel()) echo $_label  ?></span>
					</div>
					<div class="col-sm-8 col-md-6">
						<?php echo $_form["url"]->getControl()->addAttributes(array('class' => 'text')) ?>

					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-offset-2 col-md-offset-3">
						<div class="row">
							<div class="col-md-6 checkbox-wrapper">
								<span class="false-checkbox"></span>
								<?php echo $_form["representative"]->getControl() ?>

								<span class="false-label">Mohu jednat za uvedené zdroje</span>
							</div>
							<div class="col-md-6 checkbox-wrapper no-left-padding">
								<span class="false-checkbox"></span>
								<?php echo $_form["cc"]->getControl() ?>

								<span class="false-label">Zdroj s licencí Creative Commons</span>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-2 col-md-3 no-right-padding">
						<span class="form-label"><?php if ($_label = $_form["name"]->getLabel()) echo $_label  ?></span>
					</div>
					<div class="col-sm-8 col-md-6">
						<?php echo $_form["name"]->getControl()->addAttributes(array('class' => 'text')) ?>

					</div>
				</div>
				<div class="row">
					<div class="col-sm-2 col-md-3 no-right-padding">
						<span class="form-label"><?php if ($_label = $_form["email"]->getLabel()) echo $_label  ?></span>
					</div>
					<div class="col-sm-8 col-md-6">
						<?php echo $_form["email"]->getControl()->addAttributes(array('class' => 'text')) ?>

					</div>
				</div>
				<div class="row">
					<div class="col-sm-2 col-md-3 no-right-padding">
						<span class="form-label"><?php if ($_label = $_form["note"]->getLabel()) echo $_label  ?></span>
					</div>
					<div class="col-sm-8 col-md-6">
						<?php echo $_form["note"]->getControl()->addAttributes(array('class' => 'textarea')) ?>

					</div>
				</div>
				<div class="row">
					<div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
						<?php echo $_form["submit"]->getControl()->addAttributes(array('class' => 'submit')) ?>

					</div>
				</div>
<?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form) ?>

			<br><br>

			<p>Vítáme Vaše návrhy nových webových stránek pro archivaci. Zařazení webových stránek do režimu výběrového sklízení má však svá <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("sourceSelection"), ENT_COMPAT) ?>">kritéria</a>. Předně dokument musí splňovat jednu z následujících podmínek:</p>

			<ul class="normal">
				<li>byl vydán na území České republiky</li>
				<li>jeho jazykem je čeština</li>
				<li>autor je české národnosti</li>
				<li>obsah se týká České republiky nebo českého národa</li>
			</ul>

			<p>Jsou vybírány především materiály významné kulturní či vědecké hodnoty, které vznikají jako původní digitální díla (tzn. nemají souběžnou tištěnou podobu).</p>

			<h2>Preferované webové dokumenty:</h2>
			<p>online časopisy, monografie, konferenční materiály, výzkumné zprávy, akademické práce, vládní dokumenty, blogy s kulturním či vědeckým zaměřením</p>

			<h2>Do výběrových sklizní nespadají:</h2>
			<p>počítačové hry (aplikace), internetové obchody, firemní weby, nabídkové katalogy, intranety, osobní weblogy (bez vědecké či kulturní hodnoty), portály shromažďující obsah z jiných zdrojů, rozhlasové a televizní vysílání, atd. (tyto zdroje ale mohou být archivovány v rámci celoplošných sklizní)</p>
			<p>Vyhrazujeme si právo Váš návrh odmítnout. Smlouvu, prosím, nepodepisujte s předstihem, budeme Vás informovat. Pokud používáte licenci <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_presenter->link("creativeCommons"), ENT_COMPAT) ?>">Creative Commons</a>, smlouvu uzavírat nemusíme, obdržíte od nás jen informativní zprávu o výsledku hodnocení.      </p>

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


<?php call_user_func(reset($_l->blocks['menuItemActive4']), $_l, get_defined_vars())  ?>



<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars())  ?>

