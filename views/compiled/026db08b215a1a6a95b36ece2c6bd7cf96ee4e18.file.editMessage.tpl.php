<?php /* Smarty version Smarty-3.1.18, created on 2016-10-28 11:27:11
         compiled from "admin_views\editMessage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:231765813050bb1bed3-08207141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '026db08b215a1a6a95b36ece2c6bd7cf96ee4e18' => 
    array (
      0 => 'admin_views\\editMessage.tpl',
      1 => 1477646621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '231765813050bb1bed3-08207141',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5813050bb683d2_33238787',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5813050bb683d2_33238787')) {function content_5813050bb683d2_33238787($_smarty_tpl) {?>
    <table>
        <tr></tr>

        <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
    <form action="admin_model/editMessage.php" method="post">
            <tr><input type="number" name="id" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
" style="display: none"><td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
" name="title"></td><td><textarea name="content"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</textarea></td><td><button value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">aanpassen</button></td></tr>
    </form>
        <?php } ?>
    </table>
<?php }} ?>
