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
<!DOCTYPE html>
<html lang="en">
<head>

    <title>DOB</title>
</head>
<body>
    <form method="post">
    DOB: <input type="date" name="dob">
    <input type="submit" name="submit">
</form>
</body>
</html>
