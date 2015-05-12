<?php //netteCache[01]000386a:2:{s:4:"time";s:21:"0.23767300 1429813285";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:72:"/srv/www/htdocs/webarchiv.cz/app/templates/Default/creativeCommons.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/templates/Default/creativeCommons.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '7zwascborc')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbcab553a6c4_title')) { function _lbcab553a6c4_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>Creative Commons | <?php Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'title', get_defined_vars()) ;
}}

//
// block menuItemActive4
//
if (!function_exists($_l->blocks['menuItemActive4'][] = '_lb049642135c_menuItemActive4')) { function _lb049642135c_menuItemActive4($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?> class="active"<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb231de34a6f_content')) { function _lb231de34a6f_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Nette\Latte\Macros\CoreMacros::includeTemplate("../commonParts/add.latte", $template->getParameters(), $_l->templates['7zwascborc'])->render() ?>

	<section>
		<div class="container">

			<h2>Creative Commons (CC)</h2>

			<p>Licence Creative Commons (dále CC) jsou souborem licencí, které slouží k legálnímu sdílení a využívání autorských děl. CC vznikly z potřeby nějakým způsobem právně upravit vztah mezi uživateli díla a jeho autorem v případě, že autor chce, aby jeho dílo mohla za vyznačených podmínek používat široká veřejnost. Licence CC tedy umožňuje autorovi nabízet jeho dílo prostřednictvím licenční smlouvy, na základě které poskytuje veřejnosti některá práva k dílu a jiná si vyhrazuje.</p>
			<p>Licence CC jsou mezinárodně uznávané, srozumitelné (vyjádřené pomocí piktogramů) a bezplatné.</p>

			<h3>Informace pro vydavatele a autory</h3>
			<p>Využití licencí CC je ideální pokud chcete, aby ostatní mohli vaše dílo volně (v rámci podmínek licence) a bezplatně používat. Autorství díla zůstává v každém případě zachováno a vaše dílo se může dále šířit, rozvíjet nebo inspirovat jiné.</p>
			<p>Před vystavením zdroje pod licencí CC je ovšem třeba zvážit několik skutečností:</p>
			<ul class="normal">
				<li>Licencovat můžete pouze zdroj, který vlastníte nebo k němu máte práva.</li>
				<li>Je třeba mít autorská práva na celý obsah zdroje, případně získat souhlas autora/ů části stránek s licencí nebo specifikovat na jakou část obsahu se licence CC vztahuje.</li>
				<li>Licence CC jsou neodvolatelné. Licenci je sice možné z webu stáhnout, ovšem to neplatí zpětně.</li>
			</ul>

			<h3>Varianty licence</h3>
			<p>Licence CC nabízí šest typů licencí. Společným znakem všech licencí je povinnost uvést autora a zdroj.</p>
			<p>Prvky licence jsou značeny piktogramy a kombinace těchto prvků tvoří různé typy licencí CC:</p>

			<table class="in-text">
				<tr>
					<th>Označení licence</th>
					<th>Práva</th>
					<th>Povinnosti</th>
					<th>Název licence</th>
				</tr>
				<tr>
					<td>BY</td>
					<td><img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>
/images/design/cc-icons/share.png" class="cc-icon" alt="Share"><img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/images/design/cc-icons/remix.png" class="cc-icon" alt="Remix"></td>
					<td><img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/images/design/cc-icons/by.png" class="cc-icon" alt="BY"></td>
					<td>Uveďte autora</td>
				</tr>
				<tr>
					<td>BY-SA</td>
					<td><img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/images/design/cc-icons/remix.png" class="cc-icon" alt="Remix"></td>
					<td><img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>
/images/design/cc-icons/by.png" class="cc-icon" alt="BY"><img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/images/design/cc-icons/sa.png" class="cc-icon" alt="SA"></td>
					<td>Uveďte autora – Zachovejte licenci</td>
				</tr>
				<tr>
					<td>BY-ND</td>
					<td><img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/images/design/cc-icons/share.png" class="cc-icon" alt="Share"></td>
					<td><img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>
/images/design/cc-icons/by.png" class="cc-icon" alt="BY"><img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/images/design/cc-icons/nd.png" class="cc-icon" alt="ND"></td>
					<td>Uveďte autora – Nezpracovávejte</td>
				</tr>
				<tr>
					<td>BY-NC</td>
					<td><img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>
/images/design/cc-icons/share.png" class="cc-icon" alt="Share"><img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/images/design/cc-icons/remix.png" class="cc-icon" alt="Remix"></td>
					<td><img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>
/images/design/cc-icons/by.png" class="cc-icon" alt="BY"><img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/images/design/cc-icons/nc.png" class="cc-icon" alt="NC"></td>
					<td>Uveďte autora – Neužívejte komerčně</td>
				</tr>
				<tr>
					<td>BY-NC-SA</td>
					<td><img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>
/images/design/cc-icons/share.png" class="cc-icon" alt="Share"><img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/images/design/cc-icons/remix.png" class="cc-icon" alt="Remix"></td>
					<td><img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>
/images/design/cc-icons/by.png" class="cc-icon" alt="BY"><img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>
/images/design/cc-icons/sa.png" class="cc-icon" alt="SA"><img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/images/design/cc-icons/nc.png" class="cc-icon" alt="NC"></td>
					<td>Uveďte autora – Neužívejte komerčně – Zachovejte licenci</td>
				</tr>
				<tr>
					<td>BY-NC-ND</td>
					<td><img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/images/design/cc-icons/share.png" class="cc-icon" alt="Share"></td>
					<td><img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>
/images/design/cc-icons/by.png" class="cc-icon" alt="BY"><img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>
/images/design/cc-icons/nd.png" class="cc-icon" alt="ND"><img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>/images/design/cc-icons/nc.png" class="cc-icon" alt="NC"></td>
					<td>Uveďte autora – Neužívejte komerčně – Nezpracovávejte</td>
				</tr>
			</table>

			<h3>Aplikace licence</h3>
			<p>Snadným způsobem pro vytvoření licence CC je <a href="http://creativecommons.org/choose/?lang=cs" target="_blank">generátor licencí</a>. Prostřednictvím formuláře si zvolíte podmínky, za kterých chcete vaše dílo sdílet, případně vyplníte autorské údaje a formulář automaticky vygeneruje typ licence a HTML kód. Tento kód už pak stačí pouze vložit do zdrojového kódu vašich stránek.</p>
			<p>Pro zachování správného licencování stránek je třeba, aby logo licence CC na vašich stránkách odkazovalo na celé znění textu licence.</p>
			<p>Více informací najdete na <a href="http://www.creativecommons.cz/" target="_blank">českých stránkách licence CC</a> nebo na <a href="http://creativecommons.org/" target="_blank">oficiálních stránkách licence</a>.</p>

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



<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 