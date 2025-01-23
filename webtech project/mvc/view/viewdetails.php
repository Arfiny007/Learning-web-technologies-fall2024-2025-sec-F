<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details - Tendify Online Shop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FBF5DD;
            color: #16404D;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .product-details-container {
            border: 2px solid #16404D;
            border-radius: 10px;
            padding: 20px;
            width: 350px;
            background-color: #A6CDC6;
            text-align: center;
        }
        img {
            width: 100%;
            max-width: 200px;
            height: auto;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        h3 {
            margin-bottom: 10px;
        }
        p {
            margin: 5px 0;
        }
        a {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            color: #FFF;
            background-color: #16404D;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        a:hover {
            background-color: #113039;
        }
    </style>
</head>
<body>
    <?php 
    if ($product) {
        echo "<div class='product-details-container'>
                <img src='{$product['image_url']}' alt='{$product['name']}' />
                <h3>{$product['name']}</h3>
                <p><strong>Price:</strong> {$product['price']}</p>
                <p><strong>Description:</strong> {$product['description']}</p>
                <a href='../controllers/cartoperation.php?action=add&id={$product['id']}'>Add to Cart</a>
              </div>";
    } else {
        echo "<p>Product not found.</p>";
    }
    ?>
</body>
</html>
