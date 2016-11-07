<?php /* Smarty version Smarty-3.1.18, created on 2016-11-02 14:48:17
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2051257f228fe23fc89-17628785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1478094497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2051257f228fe23fc89-17628785',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f228fe2925c1_33184849',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
    'pages' => 0,
    'i' => 0,
    'get' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f228fe2925c1_33184849')) {function content_57f228fe2925c1_33184849($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp64\\www\\school\\jaar_2\\Projecten\\band\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp64\\www\\school\\jaar_2\\Projecten\\band\\libs\\plugins\\modifier.date_format.php';
?><meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/message.css">
<section>
<?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
    <article>
        <h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
        <img src='images/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
'><br>
        <content><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oneItem']->value['content'],255);?>
</content>
        <p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%e, %B %Y");?>
</p>
    </article>


<?php } ?>

</section>
<div id="menu">
<ul>
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
    <li<?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['get']->value['pageNumber']) {?> class='selected'<?php }?> ><a href="?pageNumber=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
    <?php }} ?>

</ul>
</div>







    
    
    
    
    


<?php }} ?>
