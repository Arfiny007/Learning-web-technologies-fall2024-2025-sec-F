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
    <link rel="stylesheet" href="../assets/cart.css">
    
</head>
<body>
<header>
    <h1>Your Shopping Cart</h1>
</header>
<nav>
    <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="products.php">Shop</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="../controllers/logout.php">Logout</a></li>
    </ul>
</nav>
<main>
    <?php if (!empty($_SESSION['cart'])): ?>
        <form method="POST" action="../controllers/cartoperation.php">
            <table>
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
                            <td><?php echo htmlspecialchars($product['name']); ?></td>
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
            <p class="total">Total: <?php echo number_format($total, 2); ?></p>
            <div class="cart-actions">
                <button type="submit" name="update_cart">Update Cart</button>
                <a href="checkout.php">Proceed to Checkout</a>
            </div>
        </form>
    <?php else: ?>
        <p>Your cart is empty. <a href="products.php">Start Shopping</a></p>
    <?php endif; ?>
</main>
<footer>
    <p>&copy; 2025 Tendify Online Shop</p>
</footer>
</body>
</html>
