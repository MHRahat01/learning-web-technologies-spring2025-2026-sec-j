<?php
session_start();

if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    if($name == "" || $email == "" || $password == ""){
        $error = "Null input!";
    } else {
        $_SESSION['user'] = [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'profile_pic' => 'default.png'
        ];
        $success = "Registration Successful!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>

<form method="post">
<fieldset style="width:400px;">
    <legend><b>Registration</b></legend>
         Name :
        <input type="text" name="name"><br><br>
            
        Email :
        <input type="email" name="email">
        <br><br>
        UserName :
        <input type="text" name="username">
        <br><br>
        Password:
        <input type="password" name="password">
        <br><br>
        Confirm Password :
        <input type="password" name="cpassword">
       <br><br>
        Gender:
            
        <fieldset>
            <input type="radio" name="gender"> Male
            <input type="radio" name="gender"> Female
            <input type="radio" name="gender"> Other
        </fieldset><br><br>
        Date of Birth :
        <input type="date" name="dob"> 
        <br><br>


    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset"


</fieldset>
</form>

</body>
</html>