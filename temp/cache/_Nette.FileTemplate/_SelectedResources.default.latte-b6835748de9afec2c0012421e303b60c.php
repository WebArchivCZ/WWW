<?php //netteCache[01]000400a:2:{s:4:"time";s:21:"0.02033600 1430903136";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:86:"/srv/www/htdocs/webarchiv.cz/app/AdminModule/templates/SelectedResources/default.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/AdminModule/templates/SelectedResources/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'uys5ey3ddv')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block header
//
if (!function_exists($_l->blocks['header'][] = '_lb51e2dbd688_header')) { function _lb51e2dbd688_header($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>Výběr z katalogu<?php
}}

//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbbc15888177_title')) { function _lbbc15888177_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'title', get_defined_vars()) ?>
 <?php call_user_func(reset($_l->blocks['header']), $_l, get_defined_vars()) ;
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb487dee9d0f_content')) { function _lb487dee9d0f_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>    <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("add"), ENT_COMPAT) ?>" class="add">Přidat nový zdroj</a><br>

<?php if (count($selectedResources) > 0) { ?>

		<br>
		<p>Na domovské stránce se zobrazují pouze první dva publikované zdroje</p>
		<br>

		<table class="items">
			<tr>
				<th>Pulikováno</th>
				<th>Název</th>
				<th>Posun</th>
				<th>Akce</th>
			</tr>

<?php $iterations = 0; foreach ($selectedResources as $selectedResource) { ?>

				<tr>
					<td class="item_row align-center">
	                    <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("publish!", array('id' => $selectedResource->id)), ENT_COMPAT) ?>
" class="<?php if (!$selectedResource->active) { ?>un<?php } ?>published"></a>
					</td>
					<td class="item_row">
						<a href="<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("edit", array('id' => $selectedResource->id)), ENT_COMPAT) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($template->truncate($selectedResource->title, 60), ENT_NOQUOTES) ?></a>
					</td>
					<td class="item_row">
						<span>
							<a href="<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("shift!", array('id' => $selectedResource->id, 'direction'=>'bigger')), ENT_COMPAT) ?>" class="up"></a>
							<a href="<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("shift!", array('id' => $selectedResource->id, 'direction'=>'smaller')), ENT_COMPAT) ?>" class="down"></a>
						</span>
					</td>
					<td class="item_row">
						<span>
							<a href="<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("edit", array('id' => $selectedResource->id)), ENT_COMPAT) ?>" class="edit">editovat</a> |
							<a href="<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("delete!", array($selectedResource->id)), ENT_COMPAT) ?>" class="delete">smazat</a>
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