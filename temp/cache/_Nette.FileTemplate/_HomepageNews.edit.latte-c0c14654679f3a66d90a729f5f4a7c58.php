<?php //netteCache[01]000392a:2:{s:4:"time";s:21:"0.62031200 1429812492";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:78:"/srv/www/htdocs/webarchiv.cz/app/AdminModule/templates/HomepageNews/edit.latte";i:2;i:1429718033;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2015-01-06";}}}?><?php

// source file: /srv/www/htdocs/webarchiv.cz/app/AdminModule/templates/HomepageNews/edit.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'qpb7249q8l')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block header
//
if (!function_exists($_l->blocks['header'][] = '_lb2f89e9a6ed_header')) { function _lb2f89e9a6ed_header($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>Editace novinky: <?php echo Nette\Templating\Helpers::escapeHtml($homepageNew->title, ENT_NOQUOTES) ;
}}

//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb05c8835a18_title')) { function _lb05c8835a18_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'title', get_defined_vars()) ?>
 <?php call_user_func(reset($_l->blocks['header']), $_l, get_defined_vars()) ;
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb2d7df9d3c0_content')) { function _lb2d7df9d3c0_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>    <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("default"), ENT_COMPAT) ?>" class="back">Přehled všech novinek</a><br><br>
    <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("publish!", array('id' => $homepageNew->id)), ENT_COMPAT) ?>
" class="<?php if (!$homepageNew->active) { ?>un<?php } ?>published"><?php if (!$homepageNew->active) { ?>
Nep<?php } else { ?>P<?php } ?>ublikováno</a>

	<h2>Obrázek (JPG nebo PNG na šířku alespoň <?php echo Nette\Templating\Helpers::escapeHtml($presenter->imageSizes['x'], ENT_NOQUOTES) ?>)</h2>
<?php if (file_exists($src = $presenter->dirPath.$presenter->filenamePrefix."_".$homepageNew->id.".jpg")) { ?>
        <div class='singleUploadedImage'>
			<p><?php echo Nette\Templating\Helpers::escapeHtml($basePath, ENT_NOQUOTES) ?>
/<?php echo Nette\Templating\Helpers::escapeHtml($src, ENT_NOQUOTES) ?></p><br>
            <img src="<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($basePath), ENT_COMPAT) ?>
/<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl($src), ENT_COMPAT) ?>
?t=<?php echo Nette\Templating\Helpers::escapeHtml(Nette\Templating\Helpers::safeUrl(time()), ENT_COMPAT) ?>" class="uploaded"><br>
            <a href="<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("deleteImage!", array($homepageNew->id)), ENT_COMPAT) ?>" class="delete">smazat</a><br><br>
        </div>
<?php } else { $_ctrl = $_control->getComponent("imageForm"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->redrawControl(NULL, FALSE); $_ctrl->render() ;} ?>

	<h2>Informace o vybraném zdroji</h2>

<?php $_ctrl = $_control->getComponent("homepageNewForm"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->redrawControl(NULL, FALSE); $_ctrl->render() ?>

	<script>
		CKEDITOR.replace('text_cs', {
			toolbar: [
				{ name: 'remove', items: [ 'RemoveFormat' ] },
				{ name: 'styles', items: [ 'Format' ] },
				{ name: 'links', items: [ 'Link', 'Unlink' ] },
				{ name: 'image', items: [ 'Image'] },
				{ name: 'basicstyles', items: [ 'Bold', 'Italic' ] },
				{ name: 'lists', items: [ 'NumberedList', 'BulletedList' ] },
				{ name: 'insert', items: [ 'SpecialChar', 'HorizontalRule'] },
				{ name: 'document', items: [ 'Source'] }
			],
			contentsCss : <?php echo Nette\Templating\Helpers::escapeJs($basePath) ?>+'/css/forms/my_ckeditor.css',
			format_tags : 'p;h2;h3',
			width : 305,
			height: 400/*,
			extraPlugins: 'devtools'*/
		});
		CKEDITOR.replace('text_en', {
			toolbar: [
				{ name: 'remove', items: [ 'RemoveFormat' ] },
				{ name: 'styles', items: [ 'Format' ] },
				{ name: 'links', items: [ 'Link', 'Unlink' ] },
				{ name: 'image', items: [ 'Image'] },
				{ name: 'basicstyles', items: [ 'Bold', 'Italic' ] },
				{ name: 'lists', items: [ 'NumberedList', 'BulletedList' ] },
				{ name: 'insert', items: [ 'SpecialChar', 'HorizontalRule'] },
				{ name: 'document', items: [ 'Source'] }
			],
			contentsCss : <?php echo Nette\Templating\Helpers::escapeJs($basePath) ?>+'/css/forms/my_ckeditor.css',
			format_tags : 'p;h2;h3',
			width : 305,
			height: 400
		});

		CKEDITOR.on( 'dialogDefinition', function(ev) {
			// Take the dialog name and its definition from the event data.
			var dialogName = ev.data.name;
			var dialogDefinition = ev.data.definition;

			// Check if the definition is from the dialog window you are interested in (the "Link" dialog window).
			if (dialogName === 'image') {
				// Get a reference to the "Link Info" tab.
				var infoTab = dialogDefinition.getContents('info');

				// Set the default value for the URL field.
				var urlField = infoTab.get('txtUrl');
				urlField['default'] = <?php echo Nette\Templating\Helpers::escapeJs($basePath) ?>
+'/'+<?php echo Nette\Templating\Helpers::escapeJs($src) ?>;
				infoTab.remove('txtWidth');
				infoTab.remove('txtHeight');
				infoTab.remove('ratioLock');
				infoTab.remove('txtBorder');
				infoTab.remove('txtHSpace');
				infoTab.remove('txtVSpace');
				infoTab.remove('cmbAlign');
				infoTab.remove('htmlPreview');
			}
		});

	</script>

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