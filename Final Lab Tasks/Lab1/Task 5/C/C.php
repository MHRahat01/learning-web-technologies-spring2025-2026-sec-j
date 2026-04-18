<?php
    $degree = [];

    if(isset($_REQUEST['submit'])){
        if(isset($_REQUEST['degree'])){
            $degree = $_REQUEST['degree'];

            foreach($degree as $d){
                echo $d."<br>";
            }
        }else{
            echo "null input!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Degree Form</title>
</head>
<body>

<form method="post" action="" enctype="multipart/form-data">
    Degree:
    <input type="checkbox" name="degree[]" value="SSC" <?php if(in_array("SSC",$degree)){ echo "checked"; } ?> /> SSC
    <input type="checkbox" name="degree[]" value="HSC" <?php if(in_array("HSC",$degree)){ echo "checked"; } ?> /> HSC
    <input type="checkbox" name="degree[]" value="BSc" <?php if(in_array("BSc",$degree)){ echo "checked"; } ?> /> BSc <br>

    <input type="submit" name="submit" value="Submit"/>
</form>

</body>
</html>