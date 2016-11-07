<div id="adminMenu">
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


</style>