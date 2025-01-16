<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - Tendify Online Shop</title>
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
    <h1>Shop - Tendify Online Shop</h1>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="products.php">Shop</a></li>
            <li><a href="cart.php">Cart</a></li>
            <?php
            session_start();
            if (isset($_SESSION['username'])) {
                echo "<li><a href='profile.php'>Profile</a></li>";
                echo "<li><a href='../controllers/logout.php'>Logout</a></li>";
            } else {
                echo "<li><a href='login.php'>Login</a></li>";
                echo "<li><a href='register.php'>Register</a></li>";
            }
            ?>
        </ul>
    </nav>
</header>



    <div class='product-container'>
        <?php
        
        include '../models/usermodel.php';

        $query = "SELECT id, name, price, description, image_url FROM products ";
        $conn= getConnection();
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            while ($product = mysqli_fetch_assoc($result)) {
                echo "<div class='product-card'>
                        <img src='{$product['image_url']}' alt='{$product['name']}' style='width:150px; height:150px;' />
                        <h3>{$product['name']}</h3>
                        <p>Price: {$product['price']}</p>
                        <a href='../controllers/viewdetails.php?id={$product['id']}'>View Details</a>
                        <a href='../controllers/cartoperation.php?action=add&id={$product['id']}'>Add to Cart</a>
                      </div>";
            }
        } else {
            echo "<p>No products found.</p>";
        }
        ?>
    </div>
</main>

<footer>
    <p>&copy; 2025 Tendify Online Shop</p>
</footer>
</body>
</html>
