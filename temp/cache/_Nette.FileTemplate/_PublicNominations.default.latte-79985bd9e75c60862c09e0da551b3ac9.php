<?php //netteCache[01]000400a:2:{s:4:"time";s:21:"0.17026900 1430903140";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:86:"/srv/www/htdocs/webarchiv.cz/app/AdminModule/templates/PublicNominations/default.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/AdminModule/templates/PublicNominations/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'y0dvzwz4n2')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block header
//
if (!function_exists($_l->blocks['header'][] = '_lb948bf60831_header')) { function _lb948bf60831_header($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>Nominace veřejnosti<?php
}}

//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbda5b7c4ceb_title')) { function _lbda5b7c4ceb_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'title', get_defined_vars()) ?>
 <?php call_user_func(reset($_l->blocks['header']), $_l, get_defined_vars()) ;
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb2f9ece85d4_content')) { function _lb2f9ece85d4_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if (count($publicNominations) > 0) { ?>

		<table class="items">
			<tr>
				<th>URL</th>
				<th>Může jednat?</th>
				<th>Creative Commons</th>
				<th>Jméno</th>
				<th>E-mail</th>
				<th>Přidáno</th>
			</tr>
<?php $iterations = 0; foreach ($publicNominations as $publicNomination) { ?>
				<tr>
					<td class="item_row">
						<span><?php echo Nette\Templating\Helpers::escapeHtml($publicNomination->url, ENT_NOQUOTES) ?></span>
					</td>
					<td class="item_row">
						<span><?php if ($publicNomination->representative) { ?>Ano<?php } else { ?>
-<?php } ?></span>
					</td>
					<td class="item_row">
						<span><?php if ($publicNomination->cc) { ?>Ano<?php } else { ?>-<?php } ?></span>
					</td>
					<td class="item_row">
						<span><?php echo Nette\Templating\Helpers::escapeHtml($publicNomination->name, ENT_NOQUOTES) ?></span>
					</td>
					<td class="item_row">
						<span><?php echo Nette\Templating\Helpers::escapeHtml($publicNomination->email, ENT_NOQUOTES) ?></span>
					</td>
					<td class="item_row">
						<span><?php echo Nette\Templating\Helpers::escapeHtml($template->date($publicNomination->added, 'j.n.Y H:i:s'), ENT_NOQUOTES) ?></span>
					</td>
				</tr>

<?php $iterations++; } ?>
		</table>

<?php } else { ?>

        <p>Zatím nebyla vložena žádná stránka.</p>

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