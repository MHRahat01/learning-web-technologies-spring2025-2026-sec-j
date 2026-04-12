<?php
if (isset($_REQUEST['submit'])) {

    $name = $_REQUEST['name'];

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Name</title>
</head>

<body>
    <form method="post" action="upload.php" enctype="multipart/form-data">
        Name: <input type="text" name="name" value="<?php if (isset($_POST['name'])) {
            echo $name;
        } ?>" />
        <input type="submit" name="submit" value="Submit" />

    </form>
</body>

</html>