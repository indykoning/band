<?php /* Smarty version Smarty-3.1.18, created on 2016-10-28 14:08:41
         compiled from "admin_views\newAbout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1353158133dafa6e0e7-77732892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e4864bed7390d878fd75cd702d0da50f8545c07' => 
    array (
      0 => 'admin_views\\newAbout.tpl',
      1 => 1477656518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1353158133dafa6e0e7-77732892',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58133dafa922d9_04659766',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58133dafa922d9_04659766')) {function content_58133dafa922d9_04659766($_smarty_tpl) {?><form method="post" action="admin_model/newAbout.php" enctype="multipart/form-data">
    <table>
        <tr><td>Titel: </td><td><input type="text" name="title"></td></tr>
        <tr><td>Text:</td><td><textarea name="content"></textarea></td></tr>
        <tr><td>Foto: </td><td><input type="file" accept="image/*" name="image"></td></tr>
        <tr><td>Media Url</td><td><input type="text" name="media"></td></tr>
        <tr><td>Youtube link</td><td><input type="checkbox" name="format"></td>
        <tr><td></td><td><input type="submit"></td></tr>
    </table>
</form><?php }} ?>
