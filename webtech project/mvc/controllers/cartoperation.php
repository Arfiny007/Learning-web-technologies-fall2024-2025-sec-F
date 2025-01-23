<?php
session_start();
include '../models/productModel.php';

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}


if (isset($_GET['action']) && $_GET['action'] === 'add' && isset($_GET['id'])) {
    $productId = intval($_GET['id']);
    $conn = getConnection();

    
    $query = "SELECT id, name, price FROM products WHERE id = $productId";
    $result = mysqli_query($conn, $query);
    $product = mysqli_fetch_assoc($result);

    if ($product) {
        if (isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId]['quantity'] += 1; 
        } else {
            $_SESSION['cart'][$productId] = [
                'name' => $product['name'],
                'price' => $product['price'],
                'quantity' => 1,
            ];
        }
    }
    header("Location: ../view/cart.php");
    exit;
}


if (isset($_GET['action']) && $_GET['action'] === 'remove' && isset($_GET['id'])) {
    $productId = intval($_GET['id']);
    unset($_SESSION['cart'][$productId]);
    header("Location: ../view/cart.php");
    exit;
}

if (isset($_POST['update_cart'])) {
    
    header("Location: ../view/cart.php");
    exit;
}
?>
