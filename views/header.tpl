<script>function responsiveButton() {
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
        <li class="display"><a  {if 'newsarticles' eq $current_page}class="menu_selected"{/if}" href="./">Home</a> </li>
        <li><a {if 'About' eq $current_page}class="menu_selected"{/if} href="About">About</a> </li>
        <li><a {if 'schema' eq $current_page}class="menu_selected"{/if}href="schema">Schema</a></li>
        {if $loggedin == 1}
<li><a {if 'admin' eq $current_page}class="menu_selected"{/if} href="admin">administrator</a> </li>
<li><a href="?logout=1">log uit</a> </li>
        {/if}
        {if $loggedin == 0}
            <li><a href="login">log in</a> </li>
        {/if}
            <li class="icon">
                <a href="javascript:void(0);" onclick="responsiveButton()">&#9776;</a>
            </li>
</ul>
</nav>
</header>