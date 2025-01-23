<?php

    echo "ii";
    session_start();
    if(isset($_POST['submit']))
    {
        echo "ik";
        $username = trim($_REQUEST['username']);
        $password = trim($_REQUEST['password']);

        echo $username;
        echo $password;
 
        if($username==null || $password==null)
        {
            echo "Null data found";
 
        }
        else
        {
            $con = mysqli_connect('127.0.0.1', 'root', '', 'tendify');
            $sql = "select * from user where username='{$username}' and password='{$password}'";
            $result = mysqli_query($con, $sql);
            $count =  mysqli_num_rows($result);
 
 
            $_SESSION['username'] = $username;
 
            if($count ==1)
            {
                header('location: userHome.html');
               
             }
        }
    }
    else
   // header('location: CustomerLogin.html');
?>