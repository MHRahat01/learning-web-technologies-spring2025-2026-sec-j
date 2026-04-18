<?php
    $dob = "";

    if(isset($_REQUEST['submit'])){
        $dob = $_REQUEST['dob'];

        if($dob == ""){
            echo "null input!";
        }else{
            echo "DOB: ".$dob;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>DOB Form</title>
</head>
<body>

<form method="post" action="" enctype="multipart/form-data">
    DOB: <input type="date" name="dob" value="<?php if(isset($_REQUEST['dob'])){ echo $dob; } ?>" /> <br>
    <input type="submit" name="submit" value="Submit"/>
</form>

</body>
</html>