<?php
    $gender = "";

    if(isset($_REQUEST['submit'])){
        $gender = $_REQUEST['gender'];

        if($gender == ""){
            echo "null input!";
        }else{
            echo "Gender: ".$gender;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gender Form</title>
</head>
<body>

<form method="post" action="" enctype="multipart/form-data">
    Gender:
    <input type="radio" name="gender" value="Male" <?php if($gender=="Male"){ echo "checked"; } ?> /> Male
    <input type="radio" name="gender" value="Female" <?php if($gender=="Female"){ echo "checked"; } ?> /> Female <br>

    <input type="submit" name="submit" value="Submit"/>
</form>

</body>
</html>