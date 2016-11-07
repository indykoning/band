<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 09:08:58
         compiled from "views\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1743057fcef519eebd5-63738510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b9e15c8bea74af24c568bdf519895827a0da35e' => 
    array (
      0 => 'views\\admin.tpl',
      1 => 1478160536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1743057fcef519eebd5-63738510',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57fcef519f0c34_55083429',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fcef519f0c34_55083429')) {function content_57fcef519f0c34_55083429($_smarty_tpl) {?><div id="adminMenu">
<ul>
    <li style="font-size: 25px; text-decoration: underline; color: white"">berichten</li>
    <li><a href="admin?subpage=newMessage">Nieuw Bericht</a></li>
    <li><a href="admin?subpage=editMessage">Bericht Aanpassen</a></li>
    <li><a href="admin?subpage=deleteMessage">Bericht verwijderen</a></li>
    <li style="font-size: 25px; text-decoration: underline; color: white"">schema</li>
    <li><a href="admin?subpage=newScheme">Schema Bericht</a></li>
    <li><a href="admin?subpage=editScheme">Schema Aanpassen</a></li>
    <li><a href="admin?subpage=deleteScheme">Schema verwijderen</a></li>
    <li style="font-size: 25px; text-decoration: underline; color: white">about</li>
    <li><a href="admin?subpage=newAbout">About toevoegen</a></li>

</ul>
</div>
<style>

#adminMenu ul li {
    color: #000;
    margin-left: -40px;
}
#adminMenu{
    background: rgba(0,0,0,0.8);

    position: fixed;
    top: 40px;
    left:0;
}
#adminMenu ul li a {
    text-decoration: none;
    color: #fff;
}

#adminMenu ul li a:visited {
    color: #fff;
}
body {
    margin-left: 130px;
}


</style><?php }} ?>
