<form action="admin_model/newMessage.php" method="post"  enctype="multipart/form-data">
    <table>
        <tr><td><label>Titel</label></td><td><input type="text" name="title"></td></tr>
        <tr><td><label>Content</label></td><td><textarea maxlength="255" name="content" rows="10" cols="50"></textarea></td></tr>
        <tr><td><label>Image</label></td><td><input type="file" name="image" accept="image/*"></td></tr>
        <tr><td><label></label></td><td><input type="submit"></td></tr>

    </table>
</form>