<?php
require_once 'koneksi.php';
?>

<html>
<head>
    <title>Create WA Group</title>
</head>
<body>
    <fieldset>
        <legend>
            Form Create Group
        </legend>
        <form name="formcreategroup" method="post" action="create_group.php">
            <p>
                <label for="group_name">Group Name</label>
                <input type="text" name="group_name" id="group_name">
            </p>
            <p>
                <label for="participants">Participants (comma separated numbers)</label>
                <input type="text" name="participants" id="participants">
            </p>
            <p>
                <input type="submit" name="submit" id="submit" value="Create Group">
            </p>
        </form>
    </fieldset>
</body>
</html>