<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
</head>
<body>
    <?php 
    if ($product){
        echo "<div>
                <img src='{$product['image_url']}' alt='{$product['name']}' style='width:150px; height:150px;' />
                <h3>{$product['name']}</h3>
                <p>Price: {$product['price']}</p>
                <p>Description: {$product['description']}</p>
                <a href='../controllers/cartoperation.php?action=add&id={$product['id']}'>Add to Cart</a>
            </div><hr>";
    }

    ?>
        
        
</body>
</html>
