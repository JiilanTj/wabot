<?php
require_once 'koneksi.php';
?>

<html>
<head>
    <title>Add Member to WA Group</title>
</head>
<body>
    <fieldset>
        <legend>
            Form Add Member
        </legend>
        <form name="formaddmember" method="post" action="add_member.php">
            <p>
                <label for="group_id">Group ID</label>
                <input type="text" name="group_id" id="group_id">
            </p>
            <p>
                <label for="participant">Participant Number</label>
                <input type="text" name="participant" id="participant">
            </p>
            <p>
                <input type="submit" name="submit" id="submit" value="Add Member">
            </p>
        </form>
    </fieldset>
</body>
</html>
