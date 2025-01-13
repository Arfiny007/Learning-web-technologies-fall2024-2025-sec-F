<?php
include '../model/usermodel.php';

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $contact=$_POST['contact'];
    $password = $_POST['password'];
    
    $conn = getConnection(); 
        if (addUser($name, $username, $contact, $password)) {
            header("Location: ../view/login.php");
            exit;
        } else {
            echo "Registration failed. Please try again.";
        }
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = getConnection(); 

    $user = login($username, $password);

    if ($user) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: ../model/employee.php");
    } else {
        echo "Invalid email or password.";
    }
}
?>