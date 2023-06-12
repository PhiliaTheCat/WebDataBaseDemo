<?php
    require_once "./connection.php";
    session_start();
    if ($_SESSION["level"] != "0")
        header("location:../html/unauthorized.html");
    $query = "select * from Query;";
    $result1 = mysqli_num_rows(mysqli_query($connection, $query));
    $client_no = $_POST["client_no"];
    $lawyer_no = $_POST["lawyer_no"];
    $class_no = $_POST["class_no"];
    $query = "insert into Query(client_no, lawyer_no, class_no) values ($client_no, $lawyer_no, $class_no);";
    mysqli_query($connection, $query);
    $query = "select * from Query;";
    $result2 = mysqli_num_rows(mysqli_query($connection, $query));
    echo "Successfully Added<br><a href = \"../html/welcome.html\"><button>Back</button></a>";
?>
