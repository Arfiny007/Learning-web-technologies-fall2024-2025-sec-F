<?php
 session_start();

$user = $_POST['mydata'];
$data = json_decode($user, true);


$status = ['pass' => 0]; 

    $userid = $data['userid'];
    $password = $data['password'];
    $name = $data['name'];
    $email = $data['email'];
    $dob = $data['dob'];
    $salary = $data['salary'];
    $role = 'SR';


    $con = mysqli_connect('127.0.0.1', 'root', '', 'Tendify');
        $sql = "INSERT INTO emplolyee(ID,Password,Name,Mail,DOB,Salary,Role) VALUES ('{$userid}','{$password}','{$name}','{$email}','{$dob}','{$salary}','{$role}')";
        $result = mysqli_query($con,$sql);


    
    if ($result) {
        $status = ['pass' => 1]; 
    }
 

echo json_encode($status);
?>
