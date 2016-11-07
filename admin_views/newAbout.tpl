<form method="post" action="admin_model/newAbout.php" enctype="multipart/form-data">
    <table>
        <tr><td>Titel: </td><td><input type="text" name="title"></td></tr>
        <tr><td>Text:</td><td><textarea name="content"></textarea></td></tr>
        <tr><td>Foto: </td><td><input type="file" accept="image/*" name="image"></td></tr>
        <tr><td>Media Url</td><td><input type="text" name="media"></td></tr>
        <tr><td>Youtube link</td><td><input type="checkbox" name="format"></td>
        <tr><td></td><td><input type="submit"></td></tr>
    </table>
</form>