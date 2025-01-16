<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>
    <h1>Your Shopping Cart</h1>
    <a href="products.php">Continue Shopping</a>

    <?php if (!empty($_SESSION['cart'])): ?>
        <form method="POST" action="../controllers/cartoperation.php">
            <table border="1">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    foreach ($_SESSION['cart'] as $productId => $product): 
                        $subtotal = $product['price'] * $product['quantity'];
                        $total += $subtotal;
                    ?>
                        <tr>
                            <td><?php echo $product['name']; ?></td>
                            <td><?php echo number_format($product['price'], 2); ?></td>
                            <td>
                                <input type="number" name="quantities[<?php echo $productId; ?>]" value="<?php echo $product['quantity']; ?>" min="1">
                            </td>
                            <td><?php echo number_format($subtotal, 2); ?></td>
                            <td>
                                <a href="../controllers/cartoperation.php?action=remove&id=<?php echo $productId; ?>">Remove</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <p><strong>Total: <?php echo number_format($total, 2); ?></strong></p>
            <button type="submit" name="update_cart">Update Cart</button>
        </form>
        <a href="checkout.php">Proceed to Checkout</a>
    <?php else: ?>
        <p>Your cart is empty. <a href="../index.php">Start Shopping</a></p>
    <?php endif; ?>
</body>
</html>
