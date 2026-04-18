<?php
if(isset($_POST['submit'])){
    foreach($_POST['degree'] as $d){
        echo $d."<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Degree</title>
</head>
<body>
    <form method="post">
    <input type="checkbox" name="degree[]" value="SSC">SSC
    <input type="checkbox" name="degree[]" value="HSC">HSC
    <input type="checkbox" name="degree[]" value="BSc">BSc
    <input type="submit" name="submit">
</form>
</body>
</html>