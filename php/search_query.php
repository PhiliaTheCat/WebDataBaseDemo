<?php
    require_once "./connection.php";
    session_start();
    if ($_SESSION["level"] != "1")
        header("location:../html/unauthorized.html");
    $query = "select * from Query;";
    $client_no = $_POST["client_no"];
    $lawyer_no = $_POST["lawyer_no"];
    $query = "select * from Query where client_no = $client_no and lawyer_no = $lawyer_no;";
    $result = mysqli_query($connection, $query);
    echo "no client_no lawyer_no class_no<br>";
    while ($row = mysqli_fetch_row($result))
        echo "$row[0] $row[1] $row[2] $row[3]<br>"
?>
