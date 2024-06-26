<?php
require_once 'koneksi.php';
?>

<html>
<head>
    <title>Add Members to WA Group</title>
</head>
<body>
    <fieldset>
        <legend>Form Add Members</legend>
        <form name="formaddmembers" method="post" action="add_members.php" enctype="multipart/form-data">
            <p>
                <label for="group_name">Group Name</label>
                <input type="text" name="group_name" id="group_name" required>
            </p>
            <p>
                <label for="participants_file">Participants JSON File</label>
                <input type="file" name="participants_file" id="participants_file" accept=".json" required>
            </p>
            <p>
                <input type="submit" name="submit" id="submit" value="Add Members">
            </p>
        </form>
    </fieldset>
</body>
</html>
