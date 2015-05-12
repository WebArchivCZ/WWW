<?php //netteCache[01]000395a:2:{s:4:"time";s:21:"0.37357900 1429812489";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:81:"/srv/www/htdocs/webarchiv.cz/app/AdminModule/templates/HomepageNews/default.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/AdminModule/templates/HomepageNews/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'n2j5b9p6k0')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block header
//
if (!function_exists($_l->blocks['header'][] = '_lb0d4c721010_header')) { function _lb0d4c721010_header($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>Novinky titulní strany<?php
}}

//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbce910d6d14_title')) { function _lbce910d6d14_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'title', get_defined_vars()) ?>
 <?php call_user_func(reset($_l->blocks['header']), $_l, get_defined_vars()) ;
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbb86f966776_content')) { function _lbb86f966776_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>    <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("add"), ENT_COMPAT) ?>" class="add">Přidat novinku</a><br>

<?php if (count($homepageNews) > 0) { ?>

		<br>
		<p>Na domovské stránce se zobrazuje pouze první publikovaná novinka</p>
		<br>

		<table class="items">
			<tr>
				<th>Pulikováno</th>
				<th>Název</th>
				<th>Posun</th>
				<th>Akce</th>
			</tr>

<?php $iterations = 0; foreach ($homepageNews as $homepageNew) { ?>

				<tr>
					<td class="item_row align-center">
	                    <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("publish!", array('id' => $homepageNew->id)), ENT_COMPAT) ?>
" class="<?php if (!$homepageNew->active) { ?>un<?php } ?>published"></a>
					</td>
					<td class="item_row">
						<a href="<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("edit", array('id' => $homepageNew->id)), ENT_COMPAT) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($template->truncate($homepageNew->title, 60), ENT_NOQUOTES) ?></a>
					</td>
					<td class="item_row">
						<span>
							<a href="<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("shift!", array('id' => $homepageNew->id, 'direction'=>'bigger')), ENT_COMPAT) ?>" class="up"></a>
							<a href="<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("shift!", array('id' => $homepageNew->id, 'direction'=>'smaller')), ENT_COMPAT) ?>" class="down"></a>
						</span>
					</td>
					<td class="item_row">
						<span>
							<a href="<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("edit", array('id' => $homepageNew->id)), ENT_COMPAT) ?>" class="edit">editovat</a> |
							<a href="<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("delete!", array($homepageNew->id)), ENT_COMPAT) ?>" class="delete">smazat</a>
						</span>
					</td>
				</tr>

<?php $iterations++; } ?>

		</table>

<?php } else { ?>

        <p>Zatím nebyl vložen žádný záznam.</p>

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
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['header']), $_l, get_defined_vars())  ?>


<?php call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>



<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 