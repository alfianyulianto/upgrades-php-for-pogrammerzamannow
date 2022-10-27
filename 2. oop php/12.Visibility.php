<?php

include_once "./data/Product.php";

$product = new Product("Apple", 16000);

// echo $product->name . PHP_EOL; //error karena access modifier properties name yaitu private

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$pd = new ProductDummy("Jeruk", 10000);
$pd->info();
