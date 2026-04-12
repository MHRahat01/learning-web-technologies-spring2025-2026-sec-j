<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];

    if($email == ""){
        echo "Null input!";
    } else {
        echo "Email: ".$email;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>Email</title>
</head>
<body>
    <form method="post" action="">
    Email: <input type="email" name="email">
    <input type="submit" name="submit">
</form>
</body>
</html>
