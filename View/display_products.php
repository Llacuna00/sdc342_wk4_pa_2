<?php
require_once('../Controller/products.php');
require_once('../Controller/products_controller.php');
?>
<html>
<head>
    <title>Week4 PA - Lizzi Llacuna</title>
    <link rel="stylesheet" type="text/css" href="style.css"  />
</head>
<body>
    <h1>Week4 PA - Lizzi Llacuna</h1>
    <h2>Products</h2>
    <?php //display foreach table of each products ?>
    <table>
        <tr>
            <th>Product Name</th>
            <th>Product Number</th>
            <th>Product Price</th>
            <th>Product Inventory</th>
        </tr>
        <?php foreach (ProductsController::getAllProducts() as $product) : ?>
        <tr>
            <td><?php echo $product->getProductName(); ?></td>
            <td><?php echo $product->getProductNo(); ?></td>
            <td><?php echo $product->getProductPrice(); ?></td>
            <td><?php echo $product->getProductInventory(); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <form method="POST">
        <button><a href="user.php">Home</a></button>
        <button><a href="../index.php">Logout</a></button>
    </form>
</body>
</html>