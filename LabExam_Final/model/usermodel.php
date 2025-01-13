<?php

function getConnection() {
    $con = mysqli_connect('127.0.0.1', 'root', '', 'lab_exam');
    return $con;
}


function addUser($name, $username,$contact, $password,) {
    
        $con = getConnection();
        $sql = "INSERT INTO employees (name, contact_no, username, password) VALUES ('{$name}', '{$contact}', '{$username}', '{$password}')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            return true; 
        }
    
    return false; 
}


function login($username, $password) {
    $con = getConnection();
    $sql = "SELECT * FROM employees WHERE username='{$username}' AND password='{$password}'";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result); 
    }
    return false; 
}
?>
