<?php
$con = mysqli_connect('127.0.0.1', 'root', '', 'tendify');


    $id = $_GET['id'];
    $sql = "SELECT * FROM coupon WHERE ID = '{$id}'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

        $name = $_POST['name'];
        $amount = $_POST['amount'];
        
        echo $id;
        echo $amount;
        echo $namae;
        $update_sql = "UPDATE coupon SET Name='$name', Ammount='$amount' WHERE ID = '$id'";
        if (mysqli_query($con, $update_sql)) {
            echo "Coupon updated successfully!";
           
        } else {
            echo "Error updating coupon: " . mysqli_error($con);
        }
