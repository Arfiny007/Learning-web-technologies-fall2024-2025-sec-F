<?php
session_start();


if (!isset($_SESSION['user_id'])) {
    header("Location: ../view/login.php");
    exit;
}

include '../models/productModel.php';


$products = getAllProducts();



include '../view/allProduct.php';
?>
