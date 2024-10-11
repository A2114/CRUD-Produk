<?php
$file = 'product.json';
$product = json_decode(file_get_contents($file). true);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Product List</title>
    </head>
    <body>
        <h1>Product List</H1>
        <a href="create.php">Add New Product</a>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            <?php foreach($product $index => $products): ?>
            <tr>
                <td><?php echo $index * 1; ?></td>
                <td><?php echo $products['product_name']; ?></td>
                <td><?php echo $products['price']; ?></td>
                <td><?php echo $products['description']; ?></td>
                <td><a href="edit.php?id=<?php echo $index; ?>">Edit</td>
                <td><a href="delete.php?id=<?php echo $index; ?>" onclick="return confirm('Are you Sure?')">Delete</td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>