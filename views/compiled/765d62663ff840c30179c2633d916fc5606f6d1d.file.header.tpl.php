<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 09:16:18
         compiled from "views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1366757f222b70d5dd4-68248048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765d62663ff840c30179c2633d916fc5606f6d1d' => 
    array (
      0 => 'views\\header.tpl',
      1 => 1478160977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1366757f222b70d5dd4-68248048',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f222b71090c9_71994850',
  'variables' => 
  array (
    'current_page' => 0,
    'loggedin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f222b71090c9_71994850')) {function content_57f222b71090c9_71994850($_smarty_tpl) {?><script>function responsiveButton() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }</script>
<header>
    <nav id="header-nav">
        <ul class="topnav" id="myTopnav">
            <li class="display"><img  height="45px" src="logo.jpg"></li>
        <li class="display"><a  <?php if ('newsarticles'==$_smarty_tpl->tpl_vars['current_page']->value) {?>class="menu_selected"<?php }?>" href="./">Home</a> </li>
        <li><a <?php if ('About'==$_smarty_tpl->tpl_vars['current_page']->value) {?>class="menu_selected"<?php }?> href="About">About</a> </li>
        <li><a <?php if ('schema'==$_smarty_tpl->tpl_vars['current_page']->value) {?>class="menu_selected"<?php }?>href="schema">Schema</a></li>
        <?php if ($_smarty_tpl->tpl_vars['loggedin']->value==1) {?>
<li><a <?php if ('admin'==$_smarty_tpl->tpl_vars['current_page']->value) {?>class="menu_selected"<?php }?> href="admin">administrator</a> </li>
<li><a href="?logout=1">log uit</a> </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['loggedin']->value==0) {?>
            <li><a href="login">log in</a> </li>
        <?php }?>
            <li class="icon">
                <a href="javascript:void(0);" onclick="responsiveButton()">&#9776;</a>
            </li>
</ul>
</nav>
</header><?php }} ?>
