<?php
session_start();
include '../models/productModel.php';

$search = '';
if (isset($_POST['search'])) {
    $search = trim($_POST['search']); 
}

$conn = getConnection();

$sql = "SELECT id, name, price, description, image_url FROM products";
if ($search !== '') {
    $sql .= " WHERE name LIKE '%{$search}%' OR description LIKE '%{$search}%'";
}

$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    echo "<div class='product-container'>";
    while ($product = mysqli_fetch_assoc($result)) {
        echo "<div class='product-card'>
                <img src='{$product['image_url']}' alt='{$product['name']}' style='width:150px; height:150px;' />
                <h3>{$product['name']}</h3>
                <p>Price: {$product['price']}</p>
                <p>Description: {$product['description']}</p>
                <a href='../controllers/viewdetails.php?id={$product['id']}'>View Details</a>
                <a href='../controllers/cartoperation.php?action=add&id={$product['id']}'>Add to Cart</a>
              </div>";
    }
    echo "</div>";
} else {
    echo "<p>No products found.</p>";
}


?>
