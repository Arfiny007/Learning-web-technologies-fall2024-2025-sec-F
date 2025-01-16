<?php
function getConnection() {
    return mysqli_connect('127.0.0.1', 'root', '', 'tendify');
}

function getAllProducts() {
    $conn = getConnection();
    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);

    $products = [];
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $products[] = $row;
        }
    }

    return $products;
}

function getProductsbyId($productId) {
    $conn = getConnection();
    $sql = "SELECT * FROM products where id ='{$productId}'";
    $result = mysqli_query($conn, $sql);
    $products = mysqli_fetch_assoc($result);
    return $products;
}

?>
