<?php
    session_start();
    require_once "./connection.php";
    $username = $_POST["username"];
    $passphrase = $_POST["passphrase"];
    $passphrase = hash("sha256", $passphrase);
    $query = "select level from userinfo where username = \"$username\" and passphrase = \"$passphrase\";";
    $result = mysqli_query($connection, $query) or die("Error in query: $query. ".mysqli_error($connection));
    if (mysqli_num_rows($result) > 0)
    {
        $_SESSION["username"] = $username;
        $_SESSION["level"] = mysqli_fetch_row($result)[0];
        header("location:../html/welcome.html");
    }
    else
        header("location:../html/failed.html");
    echo "123";
?>
