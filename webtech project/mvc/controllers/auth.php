<?php
include '../models/usermodel.php';

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    

    

    $errors = [];

    
    if (empty($name)) {
        $errors[] = "Name is required.";
    } elseif (is_numeric($name)) {
        $errors[] = "Name cannot be a number.";
    }

    
    if (empty($username)) {
        $errors[] = "Username is required.";
    } elseif (strlen($username) < 3) {
        $errors[] = "Username must be at least 3 characters.";
    }

    
    if (empty($email)) {
        $errors[] = "Email is required.";
    } 

    
    if (empty($password)) {
        $errors[] = "Password is required.";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters.";
    }

    
    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    }
    if (!empty($_FILES['profile_image']['name'])) {
        $uploadDir = '../assets/uploads/'; 
        $imageName = time() . "_" . $_FILES['profile_image']['name'];
        $imagePath = $uploadDir . $imageName;

        if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $imagePath)) {
            $errors[] = "Failed to upload profile image.";
        }


    }

    if (empty($errors)) {
        $conn = getConnection(); 
        if (addUser($name, $username, $email, $password, $confirm_password, $imagePath)) {
            header("Location: ../view/login.php?success=registered");
            exit;
        } else {
            $errors[] = "Registration failed. Please try again.";
        }
    }
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
}
}


if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = getConnection(); 

    $user = login($email, $password);

    if ($user) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: ../index.php");
    } else {
        echo "Invalid email or password.";
    }
}
?>
