<?php /* Smarty version Smarty-3.1.18, created on 2016-10-28 09:33:48
         compiled from "admin_views\deleteScheme.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79055812fdb091e908-98502077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0620840b1cfe2063b4c5ab7470dcbba4739f6cbd' => 
    array (
      0 => 'admin_views\\deleteScheme.tpl',
      1 => 1477640027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79055812fdb091e908-98502077',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5812fdb0973cd4_50226837',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5812fdb0973cd4_50226837')) {function content_5812fdb0973cd4_50226837($_smarty_tpl) {?><form action="admin_model/deleteScheme.php" method="post">
    <table>
        <tr><td></td><th>titel</th><th>beschrijving</th><th>datum</th><th>prijs</th></tr>
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
    <tr><td style="border-right: 2px solid black"><input type="checkbox" name="delete[]" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
" id='<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
'></td><td><label for="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['titel'];?>
</td><td><label for="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['info'];?>
</td><td><label for="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['Date'];?>
</td><td><label for="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">&euro;<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['price'];?>
,-</td></tr>
    <?php } ?>
    <tr><td></td><td><input type="submit"></td></tr>
    </table>
    </form>
<style>
    td, th{
        border-right: 2px solid black
    }
</style>
<?php }} ?>
