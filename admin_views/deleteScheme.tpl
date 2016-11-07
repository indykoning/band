<form action="admin_model/deleteScheme.php" method="post">
    <table>
        <tr><td></td><th>titel</th><th>beschrijving</th><th>datum</th><th>prijs</th></tr>
    {foreach from=$result item=oneItem}
    <tr><td style="border-right: 2px solid black"><input type="checkbox" name="delete[]" value="{$oneItem.id}" id='{$oneItem.id}'></td><td><label for="{$oneItem.id}">{$oneItem.titel}</td><td><label for="{$oneItem.id}">{$oneItem.info}</td><td><label for="{$oneItem.id}">{$oneItem.Date}</td><td><label for="{$oneItem.id}">&euro;{$oneItem.price},-</td></tr>
    {/foreach}
    <tr><td></td><td><input type="submit"></td></tr>
    </table>
    </form>
<style>
    td, th{
        border-right: 2px solid black
    }
</style>
