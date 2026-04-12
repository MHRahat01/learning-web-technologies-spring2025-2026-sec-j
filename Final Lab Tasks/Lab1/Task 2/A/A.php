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