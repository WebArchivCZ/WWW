<?php //netteCache[01]000399a:2:{s:4:"time";s:21:"0.47984900 1430903138";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:85:"/srv/www/htdocs/webarchiv.cz/app/AdminModule/templates/TopicCollections/default.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/AdminModule/templates/TopicCollections/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'y8ocvxc06w')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block header
//
if (!function_exists($_l->blocks['header'][] = '_lb88ecc77017_header')) { function _lb88ecc77017_header($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>Tématické sbírky<?php
}}

//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbea1acb3c2b_title')) { function _lbea1acb3c2b_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'title', get_defined_vars()) ?>
 <?php call_user_func(reset($_l->blocks['header']), $_l, get_defined_vars()) ;
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbb8d7d56045_content')) { function _lbb8d7d56045_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>    <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("add"), ENT_COMPAT) ?>" class="add">Přidat novou sbírku</a><br><br>

<?php if (count($topicCollections) > 0) { ?>


		<table class="items">
			<tr>
				<th>Pulikováno</th>
				<th>Název</th>
				<th>Posun</th>
				<th>Akce</th>
			</tr>

<?php $iterations = 0; foreach ($topicCollections as $topicCollection) { ?>

				<tr>
					<td class="item_row align-center">
	                    <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("publish!", array('id' => $topicCollection->id)), ENT_COMPAT) ?>
" class="<?php if (!$topicCollection->active) { ?>un<?php } ?>published"></a>
					</td>
					<td class="item_row">
						<a href="<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("edit", array('id' => $topicCollection->id)), ENT_COMPAT) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($template->truncate($topicCollection->title_cs, 60), ENT_NOQUOTES) ?></a>
					</td>
					<td class="item_row">
						<span>
							<a href="<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("shift!", array('id' => $topicCollection->id, 'direction'=>'bigger')), ENT_COMPAT) ?>" class="up"></a>
							<a href="<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("shift!", array('id' => $topicCollection->id, 'direction'=>'smaller')), ENT_COMPAT) ?>" class="down"></a>
						</span>
					</td>
					<td class="item_row">
						<span>
							<a href="<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("edit", array('id' => $topicCollection->id)), ENT_COMPAT) ?>" class="edit">editovat</a> |
							<a href="<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("delete!", array($topicCollection->id)), ENT_COMPAT) ?>" class="delete">smazat</a>
						</span>
					</td>
				</tr>

<?php $iterations++; } ?>

		</table>

<?php } else { ?>

        <p>Zatím nebyla vložena žádná sklizeň.</p>

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