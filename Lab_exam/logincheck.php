<?php
    session_start();

    if (isset($_POST['submit'])) {
        $email = trim($_REQUEST['email']);
        $password = trim($_REQUEST['password']);

        
        if (isset($_SESSION['user'])) {
            $users = $_SESSION['user'];

            
            if ($email === $users['email'] && $password === $users['password']) {
                $_SESSION['flag'] = true; 
                header('location: home.php'); 
            } else {
                echo "Invalid email or password!";
            }
        } else {
            echo "No registered user found. Please register first.";
            header('location: registration.html'); 
        }
    } else {
        header('location: login.html'); 
    }

    if(isset($_POST['reg'])){
        
            header('Location: registration.html');
            exit();
        }
    
?>
