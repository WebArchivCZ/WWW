<?php //netteCache[01]000393a:2:{s:4:"time";s:21:"0.41461200 1430903154";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:79:"/srv/www/htdocs/webarchiv.cz/app/AdminModule/templates/SearchLogs/default.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/AdminModule/templates/SearchLogs/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '2oiw7prnc9')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block header
//
if (!function_exists($_l->blocks['header'][] = '_lb62b9f633ab_header')) { function _lb62b9f633ab_header($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>Záznamy hledání<?php
}}

//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbb605c30496_title')) { function _lbb605c30496_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'title', get_defined_vars()) ?>
 <?php call_user_func(reset($_l->blocks['header']), $_l, get_defined_vars()) ;
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb22ea816ea2_content')) { function _lb22ea816ea2_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if (count($searchLogs) > 0) { ?>

<?php $_ctrl = $_control->getComponent("vp"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->redrawControl(NULL, FALSE); $_ctrl->render() ?>

		<table class="items">
			<tr>
				<th>Řetězec</th>
				<th>Od</th>
				<th>Do</th>
				<th>Čas hledání</th>
				<th>IP adresa</th>
			</tr>
<?php $iterations = 0; foreach ($searchLogs as $searchLog) { ?>
				<tr>
					<td class="item_row">
						<span><?php echo Nette\Templating\Helpers::escapeHtml($searchLog->query, ENT_NOQUOTES) ?></span>
					</td>
					<td class="item_row">
						<span><?php if ($searchLog->date_from) { echo Nette\Templating\Helpers::escapeHtml($template->date($searchLog->date_from, 'j.n.Y'), ENT_NOQUOTES) ;} else { ?>
-<?php } ?></span>
					</td>
					<td class="item_row">
						<span><?php if ($searchLog->date_till) { echo Nette\Templating\Helpers::escapeHtml($template->date($searchLog->date_till, 'j.n.Y'), ENT_NOQUOTES) ;} else { ?>
-<?php } ?></span>
					</td>
					<td class="item_row">
						<span><?php echo Nette\Templating\Helpers::escapeHtml($template->date($searchLog->added, 'j.n.Y H:i:s'), ENT_NOQUOTES) ?></span>
					</td>
					<td class="item_row">
						<span><?php echo Nette\Templating\Helpers::escapeHtml($searchLog->ip, ENT_NOQUOTES) ?></span>
					</td>
				</tr>

<?php $iterations++; } ?>
		</table>

<?php $_ctrl = $_control->getComponent("vp"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->redrawControl(NULL, FALSE); $_ctrl->render() ?>

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