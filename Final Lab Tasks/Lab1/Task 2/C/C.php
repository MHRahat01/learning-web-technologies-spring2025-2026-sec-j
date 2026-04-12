<?php
    $email = "";

    if(isset($_REQUEST['submit'])){
        $email = $_REQUEST['email'];

        if($email == ""){
            echo "null input!";
        }else{
            echo "Email: ".$email;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Email Form</title>
</head>
<body>

<form method="post" action="" enctype="multipart/form-data">
    Email: <input type="email" name="email" value="<?php if(isset($_REQUEST['email'])){ echo $email; } ?>" /> <br>
    <input type="submit" name="submit" value="Submit"/>
</form>

</body>
</html>