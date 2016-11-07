<?php /* Smarty version Smarty-3.1.18, created on 2016-10-14 14:05:00
         compiled from "admin_views\deleteMessage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37015800c3ac5c2812-43205839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1069ecd372e9ecba51d5643bfd2f58f8e752f9dc' => 
    array (
      0 => 'admin_views\\deleteMessage.tpl',
      1 => 1476445500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37015800c3ac5c2812-43205839',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5800c3ac611206_05442194',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800c3ac611206_05442194')) {function content_5800c3ac611206_05442194($_smarty_tpl) {?><form action="admin_model/deleteMessage.php" method="post">
    <table>
        <tr><td></td><td><b>titel</b></td><td></td></tr>
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
    <tr><td style="border-right: 2px solid black"><input type="checkbox" name="delete[]" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
" id='<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
'></td><td><label for="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</td></tr>
    <?php } ?>
    <tr><td></td><td><input type="submit"></td></tr>
    </table>
    </form>
<?php }} ?>
