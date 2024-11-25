<?php
session_start();


if ( $_SESSION['flag'] !== true) {
    header('Location: login.html'); 
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome to the Home Page</h1>

    
    <?php if (isset($_SESSION['user'])){
            $users = $_SESSION['user'];
        
        
            echo "Name: " . $users['name'] . ", Email: " . $users['email'];
    }
     else{
        echo "NO users registered yet";
     }
        
     ?>

    
    <form method="post" action="logout.php">
        <input type="submit" value="Logout" />
    </form>
</body>
</html>
