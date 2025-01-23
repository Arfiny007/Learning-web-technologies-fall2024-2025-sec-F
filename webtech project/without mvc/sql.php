<?php
session_start();

if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $password = trim($_POST['password']);

    $con = mysqli_connect('127.0.0.1', 'root', '', 'Tendify');

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO employee (Name, Password) VALUES ('$name', '$password')";

    if (mysqli_query($con, $sql)) {
        echo "Employee added successfully!";
        header('location: addSR.html');
    } else {
        echo "Error: " . mysqli_error($con);
    }

    mysqli_close($con);
} else {
    header('location: addSR.html');
}
?>
