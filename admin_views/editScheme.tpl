
    <table>
        <tr></tr>

        {foreach from=$result item=oneItem}
    <form action="admin_model/editScheme.php" method="post">
            <tr><input type="number" name="id" value="{$oneItem.id}" style="display: none"><td><input type="text" value="{$oneItem.titel}" name="titel"></td><td><textarea name="info">{$oneItem.info}</textarea></td><td><input type="number" name="price" value="{$oneItem.price}"></td><td><input name="date" type="date" value="{$oneItem.Date}"></td><td><input type="text" name="location" value="{$oneItem.location}"></td><td><button value="{$oneItem.id}">aanpassen</button></td></tr>
    </form>
        {/foreach}
    </table>
