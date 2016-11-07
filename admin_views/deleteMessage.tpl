<form action="admin_model/deleteMessage.php" method="post">
    <table>
        <tr><td></td><td><b>titel</b></td><td></td></tr>
    {foreach from=$result item=oneItem}
    <tr><td style="border-right: 2px solid black"><input type="checkbox" name="delete[]" value="{$oneItem.id}" id='{$oneItem.id}'></td><td><label for="{$oneItem.id}">{$oneItem.title}</td></tr>
    {/foreach}
    <tr><td></td><td><input type="submit"></td></tr>
    </table>
    </form>
