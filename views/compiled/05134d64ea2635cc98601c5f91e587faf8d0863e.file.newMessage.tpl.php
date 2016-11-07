<?php /* Smarty version Smarty-3.1.18, created on 2016-11-02 15:07:59
         compiled from "admin_views\newMessage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13659580086dcd505a8-12531797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05134d64ea2635cc98601c5f91e587faf8d0863e' => 
    array (
      0 => 'admin_views\\newMessage.tpl',
      1 => 1478095675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13659580086dcd505a8-12531797',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_580086dcd51dd7_86089577',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580086dcd51dd7_86089577')) {function content_580086dcd51dd7_86089577($_smarty_tpl) {?><form action="admin_model/newMessage.php" method="post"  enctype="multipart/form-data">
    <table>
        <tr><td><label>Titel</label></td><td><input type="text" name="title"></td></tr>
        <tr><td><label>Content</label></td><td><textarea maxlength="255" name="content" rows="10" cols="50"></textarea></td></tr>
        <tr><td><label>Image</label></td><td><input type="file" name="image" accept="image/*"></td></tr>
        <tr><td><label></label></td><td><input type="submit"></td></tr>

    </table>
</form><?php }} ?>
