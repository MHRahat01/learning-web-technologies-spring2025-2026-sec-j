<?php
    $name = "";

    if(isset($_REQUEST['submit'])){
        $name = $_REQUEST['name'];

        if($name == ""){
            echo "null input!";
        }else{
            echo "Name: ".$name;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Name Form</title>
</head>
<body>

<form method="post" action="" enctype="multipart/form-data">
    Name: <input type="text" name="name" value="<?php if(isset($_REQUEST['name'])){ echo $name; } ?>" /> <br>
    <input type="submit" name="submit" value="Submit"/>
</form>

</body>
</html>