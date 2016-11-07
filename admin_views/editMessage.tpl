
    <table>
        <tr></tr>

        {foreach from=$result item=oneItem}
    <form action="admin_model/editMessage.php" method="post">
            <tr><input type="number" name="id" value="{$oneItem.id}" style="display: none"><td><input type="text" value="{$oneItem.title}" name="title"></td><td><textarea name="content">{$oneItem.content}</textarea></td><td><button value="{$oneItem.id}">aanpassen</button></td></tr>
    </form>
        {/foreach}
    </table>
