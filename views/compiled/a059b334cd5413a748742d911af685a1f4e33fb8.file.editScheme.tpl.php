<?php /* Smarty version Smarty-3.1.18, created on 2016-10-28 11:54:51
         compiled from "admin_views\editScheme.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1871358131cd79d6b01-70110607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a059b334cd5413a748742d911af685a1f4e33fb8' => 
    array (
      0 => 'admin_views\\editScheme.tpl',
      1 => 1477648437,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1871358131cd79d6b01-70110607',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58131cd7a75ef3_30208552',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58131cd7a75ef3_30208552')) {function content_58131cd7a75ef3_30208552($_smarty_tpl) {?>
    <table>
        <tr></tr>

        <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
    <form action="admin_model/editScheme.php" method="post">
            <tr><input type="number" name="id" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
" style="display: none"><td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['titel'];?>
" name="titel"></td><td><textarea name="info"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['info'];?>
</textarea></td><td><input type="number" name="price" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['price'];?>
"></td><td><input name="date" type="date" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['Date'];?>
"></td><td><input type="text" name="location" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['location'];?>
"></td><td><button value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">aanpassen</button></td></tr>
    </form>
        <?php } ?>
    </table>
<?php }} ?>
