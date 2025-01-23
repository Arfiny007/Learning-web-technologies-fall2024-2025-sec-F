<?php
    session_start();
    if(isset($_POST['submit']))
    {
        $id = trim($_REQUEST['id']);
        $name = $_REQUEST['name'];
        $amount = $_REQUEST['amount'];
        


        $con = mysqli_connect('127.0.0.1', 'root', '', 'Tendify');
        $sql = "INSERT INTO coupon (ID,Name,Amount) VALUES ('{$id}','{$name}','{$amount}')";

        $result = mysqli_query($con,$sql);

        //header('location: addSR.html');
        
    }
    else
    header('location: addCoupon.html');
?>