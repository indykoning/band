<?php /* Smarty version Smarty-3.1.18, created on 2016-10-12 13:42:16
         compiled from "views\about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:790357fe2198c42c74-45796073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca421bab107b2b775730a59672b523b524b4180f' => 
    array (
      0 => 'views\\about.tpl',
      1 => 1475668960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '790357fe2198c42c74-45796073',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57fe2198cb7305_74146599',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fe2198cb7305_74146599')) {function content_57fe2198cb7305_74146599($_smarty_tpl) {?><section>
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
<about>
    <p style="font-size: 50px">INFO</p>
    <pre><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['info'];?>
</pre>
    <p style="font-size: 50px">CONTACT INFO</p>
    <pre><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['contactinfo'];?>
</pre>
</about>

    <?php } ?>

</section><?php }} ?>
