<?php

include 'models/usermodel.php';

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tendify Online Shop</title>
    <style>
         nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 15px;
        }
        
        .product-container{
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .product-card{
            border: 1px solid;
            border-radius: 5px;
            padding: 10px;
            width: 200px;
            text-align: center;

        }
    </style>
</head>
<body>
<header>
    <h1>Tendify Online Shop</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="view/products.php">Shop</a></li>
            <li><a href="controllers/productcontroller.php">All Products</a></li>
            <li><a href="view/cart.php">Cart</a></li>
            <?php
            if (isset($_SESSION['username'])) {
                echo "<li><a href='view/profile.php'>Profile</a></li>";
                echo "<li><a href='controllers/logout.php'>Logout</a></li>";
            } else {
                echo "<li><a href='view/login.php'>Login</a></li>";
                echo "<li><a href='view/register.php'>Register</a></li>";
            }
            ?>
        </ul>
    </nav>
</header>

<main>
    <h2>Welcome to Tendify Online Shop</h2>
    <?php
    if (isset($_SESSION['username'])) {
        echo "<p>Welcome, " . $_SESSION['username'] . "! <a href='controllers/logout.php'>Logout</a></p>";
    } else {
        echo "<p><a href='view/login.php'>Login</a> or <a href='view/register.php'>Register</a></p>";
    }
    ?>

    <h2>Featured Products</h2>
    <div class="product-container">
        <?php
        
        $conn = getConnection();
        $query = "SELECT id, name, price, description, image_url FROM products ";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            while ($product = mysqli_fetch_assoc($result)) {
                echo "<div class='product-card'>
                        <img src='{$product['image_url']}' alt='{$product['name']}' style='width:150px; height:150px;' />
                        <h3>{$product['name']}</h3>
                        <p>Price: {$product['price']}</p>
                        <p>Description: {$product['description']}</p>
                        <a href='controllers/viewdetails.php?id={$product['id']}'>View Details</a>
                      </div><hr>";
            }
        } else {
            echo "<p>No products available at the moment.</p>";
        }
        ?>
    </div>
</main>

<footer>
    <p>&copy; 2025 Tendify Online Shop</p>
</footer>
</body>
</html>
