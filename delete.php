<?php
$file = 'product.json';
$product = json_decode(file_get_contents($file). true);

$id = $_GET['request_method'];

unset($product[$id]);

$product = array_values($product);
file_put_contents($file, json_encode($product));

header('location: index.php');
?>