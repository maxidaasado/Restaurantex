<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-blue.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-blue.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form enctype="multipart/form-data" class="formoid-solid-blue" style="background-color:#ffffff;font-size:18px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:1080px;min-width:150px" method="post"><div class="title"><h2>Nuevo Producto</h2></div>
	<div class="element-file<?php frmd_add_class("file"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><label class="large" ><div class="button">Buscar Imagen</div><input type="file" class="file_input" name="file" required="required"/><div class="file_text">No hay imagen</div><span class="icon-place"></span></label></div></div>
	<div class="element-input<?php frmd_add_class("input"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input" placeholder="Nombre Producto"/><span class="icon-place"></span></div></div>
	<div class="element-number<?php frmd_add_class("number"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" min="0" max="100" name="number" placeholder="Precio" value=""/><span class="icon-place"></span></div></div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><textarea class="medium" name="textarea" cols="20" rows="5" required="required" placeholder="Ingredientes"></textarea><span class="icon-place"></span></div></div>
<div class="submit"><input type="submit" value="Crear Producto"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-blue.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>