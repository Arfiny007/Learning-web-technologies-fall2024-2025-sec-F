<?php
 session_start();

$user = $_POST['mydata'];
$data = json_decode($user, true);


$status = ['pass' => 0]; 

if (isset($data['userid']) && isset($data['password'])) {
    $userid = $data['userid'];
    $password = $data['password'];


    $con = mysqli_connect('127.0.0.1', 'root', '', 'Tendify');
            $sql = "select * from emplolyee where ID='{$userid}' and password='{$password}'";
            $result = mysqli_query($con, $sql);
            $count =  mysqli_num_rows($result);


            $_SESSION['userid'] = $userid;

    if ($count) {
        $status = ['pass' => 1]; 
    }
} else {
    $status = ['pass' => 0, 'error' => 'Invalid input data'];
}

echo json_encode($status);
?>
