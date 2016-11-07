<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 20:40:19
         compiled from "views\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9548581323152be746-07038570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89b5bb9c8dbb5a30ba85abdf06c50b421f44e4b5' => 
    array (
      0 => 'views\\login.tpl',
      1 => 1478201455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9548581323152be746-07038570',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_581323152e8d79_91474483',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581323152e8d79_91474483')) {function content_581323152e8d79_91474483($_smarty_tpl) {?><form action="admin_model/login.php" method="post">
    <table>
        <tr><td>username:</td><td><input type="text" name="username"></td></tr>
        <tr><td>password:</td><td><input type="password" name="password"></td></tr>
        <tr><td>password:</td><td><input type="submit" value="log in"></td></tr>

    </table>
</form><?php }} ?>
