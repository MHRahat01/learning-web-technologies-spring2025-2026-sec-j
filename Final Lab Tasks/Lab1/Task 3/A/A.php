<?php
if(isset($_POST['submit'])){
    $dob = $_POST['dob'];

    if($dob == ""){
        echo "Null input!";
    } else {
        echo "DOB: ".$dob;
    }
}
?>