<?php
include '../models/productModel.php';

$productId = intval($_GET['id']);

$product = getProductsById($productId);

if (!$product) {
    echo "Product not found.";
    exit;
}

// Load the view
include '../view/viewdetails.php';
?>