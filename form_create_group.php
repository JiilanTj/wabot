<!DOCTYPE html>
<html>
<head>
    <title>Create WA Group</title>
</head>
<body>
    <fieldset>
        <legend>Form Create Group</legend>
        <form name="formcreategroup" method="post" action="create_group.php" enctype="multipart/form-data">
            <p>
                <label for="group_name">Group Name</label>
                <input type="text" name="group_name" id="group_name" required>
            </p>
            <p>
                <label for="participants_file">Participants JSON File</label>
                <input type="file" name="participants_file" id="participants_file" accept=".json" required>
            </p>
            <p>
                <input type="submit" name="submit" id="submit" value="Create Group">
            </p>
        </form>
    </fieldset>
</body>
</html>
