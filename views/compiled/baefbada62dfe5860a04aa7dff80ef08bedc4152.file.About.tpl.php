<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 20:15:12
         compiled from "views\About.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2434157f4e7885e74d1-68626796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'baefbada62dfe5860a04aa7dff80ef08bedc4152' => 
    array (
      0 => 'views\\About.tpl',
      1 => 1478200508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2434157f4e7885e74d1-68626796',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f4e7885e9606_18791882',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f4e7885e9606_18791882')) {function content_57f4e7885e9606_18791882($_smarty_tpl) {?><meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/about.css">
<section>
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
<div class="about">
    <p style="font-size: 50px"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['Titel'];?>
</p>
    <p><?php echo nl2br($_smarty_tpl->tpl_vars['oneItem']->value['tekst']);?>
</p>
    <img src="images/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['foto'];?>
">
    <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['formaat']=='on') {?>
        <iframe src="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['media'];?>
" frameborder="0" allowfullscreen></iframe>
    <?php } else { ?>
    <audio controls>
        <source src="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['media'];?>
" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <?php }?>
</div>

    <?php } ?>

</section>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2434.8625958693897!2d4.854798515822727!3d52.391041153530615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5e28849730d2f%3A0x5dffd675d740eddb!2sMediacollege+Amsterdam+hoofdgebouw!5e0!3m2!1snl!2snl!4v1478200275122" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<br><a href="tel: 555 555 555">555 555 555</a>
<br><a href="mailto:20502@ma-web.nl">e-mail ons</a>
<?php }} ?>
