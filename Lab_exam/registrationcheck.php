<?php
    session_start();

    if (isset($_POST['submit'])) {
        
        $name = trim($_REQUEST['name']);
        $id = trim($_REQUEST['id']);
        $email = trim($_REQUEST['email']);
        $password = trim($_REQUEST['password']);

        if ($name == null || $id == null || $email == null || $password == null) {
            echo "Null data found!";
        } 
        else {
            $user = [
                'name' => $name,
                'id' => $id,
                'email' => $email,
                'password' => $password
            ];
            $_SESSION['user'] = $user;
            $_SESSION['flag'] = true;

            
            header('location: login.html');
        }
    } else {
        
        header('location: registraion.html');
    }
?>
