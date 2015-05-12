<?php //netteCache[01]000379a:2:{s:4:"time";s:21:"0.71192200 1429901942";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:65:"/srv/www/htdocs/webarchiv.cz/app/templates/Default/graphics.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/templates/Default/graphics.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '0x7yqc1w85')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbdb72bb793f_title')) { function _lbdb72bb793f_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if ($lang == 'cs') { ?>Grafické materiály<?php } else { ?>Banners<?php } ?> | <?php Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'title', get_defined_vars()) ;
}}

//
// block menuItemActive2
//
if (!function_exists($_l->blocks['menuItemActive2'][] = '_lbef2c4d31d2_menuItemActive2')) { function _lbef2c4d31d2_menuItemActive2($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?> class="active"<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb241419e8e8_content')) { function _lb241419e8e8_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Nette\Latte\Macros\CoreMacros::includeTemplate("../commonParts/about.latte", $template->getParameters(), $_l->templates['0x7yqc1w85'])->render() ?>

	<?php if ($lang == 'cs') { $img_alt = "Webarchiv certifikát" ;} else { $img_alt = "Webarchiv certificate" ;} ?>


	<section id="graphics">
		<div class="container">

			<h2><?php if ($lang == 'cs') { ?>Grafické materiály<?php } else { ?>Banners<?php } ?></h2>

<?php if ($lang == 'cs') { ?>
				<p>Pokud jste pyšní, že se vaše stránky webarchivují, udělejte nám radost a dejte si na svůj web náš certifikát:</p>
<?php } else { ?>
				<p>If you are proud your websites are webarchived, make us pleasure and place our certificate on your site:
<?php } ?>

			<div class="row">
				<div class="col-lg-2">
					<p><?php if ($lang == 'cs') { ?>certifikát<?php } else { ?>certificate<?php } ?></p>
				</div>
				<div class="col-lg-4">
<?php if ($lang == 'cs') { ?>
						<p>varianta bílý podklad<br>(pro užití na bílém nebo světlém podkladu)</p>
<?php } else { ?>
						<p>white style<br>(for usage in white or light background)</p>
<?php } ?>
					<br><img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>
/images/graphics/webarchiv-certifikat-01.png" alt="<?php echo Nette\Templating\Helpers::escapeHtml($img_alt, ENT_COMPAT) ?>">
				</div>
				<div class="col-lg-4">
<?php if ($lang == 'cs') { ?>
						<p>varianta modrý podklad<br>(pro užití na barevném nebo tmavém podkladu)</p>
<?php } else { ?>
						<p>blue style<br>(for usage in colored or dark background)</p>
<?php } ?>
					<br><img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>
/images/graphics/webarchiv-certifikat-02.png" alt="<?php echo Nette\Templating\Helpers::escapeHtml($img_alt, ENT_COMPAT) ?>">
				</div>
			</div>

			<div class="row">
				<div class="col-lg-2">
					<p><?php if ($lang == 'cs') { ?>bannery<?php } else { ?>banners<?php } ?></p>
				</div>
				<div class="col-lg-9">
					<p>468 x 60 px</p>
					<br>
					<img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>
/images/graphics/webarchiv-ico468x60-01.png" alt="<?php echo Nette\Templating\Helpers::escapeHtml($img_alt, ENT_COMPAT) ?>">
					<br><br>
					<img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>
/images/graphics/webarchiv-ico468x60-01.png" alt="<?php echo Nette\Templating\Helpers::escapeHtml($img_alt, ENT_COMPAT) ?>">
					<br><br>
					<img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>
/images/graphics/webarchiv-ico468x60-02.png" alt="<?php echo Nette\Templating\Helpers::escapeHtml($img_alt, ENT_COMPAT) ?>">
					<br><br>
					<img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>
/images/graphics/webarchiv-ico468x60-03.png" alt="<?php echo Nette\Templating\Helpers::escapeHtml($img_alt, ENT_COMPAT) ?>">
				</div>
			</div>

			<div class="row">
				<div class="col-lg-2 col-lg-offset-2">
					<p>99 x 89 px</p>
					<br>
					<img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>
/images/graphics/webarchiv-ico99x89-01.png" alt="<?php echo Nette\Templating\Helpers::escapeHtml($img_alt, ENT_COMPAT) ?>">
				</div>
				<div class="col-lg-2">
					<br><br>
					<img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>
/images/graphics/webarchiv-ico99x89-02.png" alt="<?php echo Nette\Templating\Helpers::escapeHtml($img_alt, ENT_COMPAT) ?>">
				</div>
				<div class="col-lg-2">
					<br><br>
					<img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>
/images/graphics/webarchiv-ico99x89-03.png" alt="<?php echo Nette\Templating\Helpers::escapeHtml($img_alt, ENT_COMPAT) ?>">
				</div>
			</div>

			<div class="row">
				<div class="col-lg-2 col-lg-offset-2">
					<p>88 x 31px</p>
					<br>
					<img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>
/images/graphics/webarchiv-ico88x31-01.png" alt="<?php echo Nette\Templating\Helpers::escapeHtml($img_alt, ENT_COMPAT) ?>">
				</div>
				<div class="col-lg-2">
					<br><br>
					<img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>
/images/graphics/webarchiv-ico88x31-02.png" alt="<?php echo Nette\Templating\Helpers::escapeHtml($img_alt, ENT_COMPAT) ?>">
				</div>
				<div class="col-lg-2">
					<br><br>
					<img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>
/images/graphics/webarchiv-ico88x31-03.png" alt="<?php echo Nette\Templating\Helpers::escapeHtml($img_alt, ENT_COMPAT) ?>">
				</div>
			</div>

			<br><br>

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