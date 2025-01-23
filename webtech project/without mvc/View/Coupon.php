<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Home</title>
<style>
    .header{
        background-color:rgb(7, 2, 1); 
    color: white;
    text-align: center;
    font-size: 2em;
    }
    .main{
        background-color:rgb(20, 21, 20); 
         color: white;
        text-align: center;
        font-size: 1.25em;
    }
    .nav
    {
        text-align: center;
    }
</style>

</head>
<body>
    <div class = "header">
    <p> Tendify onlin shop </p>
    </div>
    
    <div class = "nav">
    <a href="addCoupon.html"><button>Add</button></a>
    </div>

    <div class = "main">
        <p> Coupon Details  </p>
        <?php

        $con = mysqli_connect('127.0.0.1', 'root', '', 'Tendify');
        $sql = "SELECT * FROM coupon";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result);

        while($row = mysqli_fetch_assoc($result))
        {

        $name = $row['Name'];
        $id = $row['ID'];
        $amount = $row['Amount'];
        echo "Name: ".$name."<br>";
        echo "ID: ". $id."<br>";
        echo "Discount Amount: ". $amount."<br>";
        ?>
        <a href="deletecp.php?id=<?php echo $id; ?>"><button>Delete</button></a>
        <a href="updatecp.php?id=<?php echo $id; ?>"><button>Update</button></a><br><br>


        <?php
        }
        ?>
    </div>

</body>
</html>