<!DOCTYPE html>
<html>
<head>
    <title>All Products</title>
</head>
<body>
    <h1>All Products</h1>

    <?php if (!empty($products)): ?>
        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php echo $product['price']; ?> BDT</td>
                        <td>
                            <a href="product.php?id=<?php echo $product['id']; ?>">View Details</a> |
                            <a href="../controllers/cartoperation.php?action=add&id=<?php echo $product['id']; ?>">Add to Cart</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No products available.</p>
    <?php endif; ?>

    <br>
    <a href="../contorllers/logout.php">Logout</a>
</body>
</html>
