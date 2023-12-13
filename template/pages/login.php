<?php
session_start();

if (isset($_POST["uname"])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "project";

    $conn = new mysqli($servername, $username, $password, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connection_error);
    }

    $usname = $_POST["uname"];
    $pssword = $_POST["pwd"];

    $sql = "SELECT username,password FROM users WHERE username = '$usname' AND password = '$pssword'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION["Musername"] = $usname;
        header("location: home.html");
    } else {
        echo "<script> alert ('Invalid username or password') </script>";
    }

    mysqli_close($conn);
}
?>
