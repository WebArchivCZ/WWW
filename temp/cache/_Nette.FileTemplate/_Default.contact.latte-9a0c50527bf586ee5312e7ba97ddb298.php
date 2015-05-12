<?php //netteCache[01]000378a:2:{s:4:"time";s:21:"0.38856000 1429856900";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:64:"/srv/www/htdocs/webarchiv.cz/app/templates/Default/contact.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/templates/Default/contact.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '1aewrdihk5')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb3dc799726e_title')) { function _lb3dc799726e_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if ($lang == 'cs') { ?>Kontakty<?php } else { ?>Contacts<?php } ?> | <?php Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'title', get_defined_vars()) ;
}}

//
// block menuItemActive2
//
if (!function_exists($_l->blocks['menuItemActive2'][] = '_lbbd19bb5190_menuItemActive2')) { function _lbbd19bb5190_menuItemActive2($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?> class="active"<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb1376ac00d9_content')) { function _lb1376ac00d9_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Nette\Latte\Macros\CoreMacros::includeTemplate("../commonParts/about.latte", $template->getParameters(), $_l->templates['1aewrdihk5'])->render() ?>

	<section>
		<div class="container">

<?php if ($lang=='cs') { ?>

				<h2>Kontakty</h2>
				<p>
					Oddělení archivace webu<br>
					Národní knihovna ČR<br>
					Klementinum 190<br>
					11000 Praha 1<br><br>
					tel.: 221 663 256, 221 663 544<br><br>
					e-mail: webarchiv[@]nkp.cz
				</p>

<?php } else { ?>

				<h2>Contacts</h2>
				<p>
					Department of Web Archiving<br>
					National Library of the Czech Republic<br>
					Klementinum 190<br>
					11000 Praha 1<br><br>
					tel: 221 663 256<br><br>
					e-mail: webarchiv[@]nkp.cz
				</p>

<?php } ?>

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