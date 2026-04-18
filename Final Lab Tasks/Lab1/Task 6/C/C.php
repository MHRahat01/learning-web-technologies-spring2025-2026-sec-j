<?php
    $blood = "";

    if(isset($_REQUEST['submit'])){
        $blood = $_REQUEST['blood'];

        if($blood == ""){
            echo "null input!";
        }else{
            echo "Blood Group: ".$blood;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blood Group Form</title>
</head>
<body>

<form method="post" action="" enctype="multipart/form-data">
    Blood Group:
    <select name="blood">
        <option value="">Select</option>
        <option value="A+" <?php if($blood=="A+"){ echo "selected"; } ?>>A+</option>
        <option value="B+" <?php if($blood=="B+"){ echo "selected"; } ?>>B+</option>
        <option value="O+" <?php if($blood=="O+"){ echo "selected"; } ?>>O+</option>
    </select> <br>

    <input type="submit" name="submit" value="Submit"/>
</form>

</body>
</html>