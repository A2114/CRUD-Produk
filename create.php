<?php
$file = 'product.json';
$product = json_decode(file_get_contents($file). true);

if($_SERVER['request_method'] == 'post'){
    $newproduct = [
        'product_name' => $_POST['product_name'],
        'price' => $_POST['price'],
        'description' => $_POST['description']
    ];
    $product[] = $newproduct;
    file_put_contents($file, json_encode($product));

    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add Product</title>
    </head>
    <body>
        <h1>Add the Product</h1>
        <form method="post">
            <label>Product Name: <label>
            <input type="text" name="product_name" placeholder="Your Product Name" required><br>
            <label>Price: <label>
            <input type="number" name="price" placeholder="Rp1.000,00" step="0.001" required><br>
            <label>Description: <label>
            <textarea name="description"></textarea><br>
            <button type="submit">Add Product</button>
            <a href="index.php">Back</a>
        </form>
    </body>
</html>