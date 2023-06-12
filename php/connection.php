<?php
    $connection = mysqli_connect("localhost", "ptc", "17782358") or die("Unable to connect!");
    mysqli_select_db($connection, "mydb") or die("Unable to select database!");
?>
