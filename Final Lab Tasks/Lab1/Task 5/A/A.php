<?php
if(isset($_POST['submit'])){
    foreach($_POST['degree'] as $d){
        echo $d."<br>";
    }
}
?>