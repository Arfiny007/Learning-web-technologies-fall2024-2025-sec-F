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
    $sql = "UPDATE emplolyee SET Password = '{$password}', Name = '{$name}', Mail = '{$email}', DOB = '{$dob}', Salary = '{$salary}' WHERE ID = '$userid'";

    //$sql = "INSERT INTO emplolyee(,Password,Name,Mail,DOB,Salary,Role) VALUES ('{$password}','{$name}','{$email}','{$dob}','{$salary}','{$role}')";

    $result = mysqli_query($con,$sql);


    
    if ($result) {
        $status = ['pass' => 1]; 
    }
 

echo json_encode($status);
?>
