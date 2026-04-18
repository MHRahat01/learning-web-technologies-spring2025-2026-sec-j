<?php
if(isset($_POST['submit'])){
    echo "Blood Group: ".$_POST['blood'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    
    <title>Blood</title>
</head>
<body>
    <form method="post">
    <select name="blood">
        <option value="">Select</option>
        <option value="A+">A+</option>
        <option value="B+">B+</option>
    </select>
    <input type="submit" name="submit">
</form>
</body>
</html>