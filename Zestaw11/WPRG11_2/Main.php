<?php
require_once "Product.php";
require_once "Cart.php";

$cart = new Cart();
$product1 = new Product("Banana", 2.20,6);
$product2 = new Product("Lemon", 1.60,2);
$product3 = new Product("Watermelon", 8.00,1);
$cart->addProduct($product1);
$cart->addProduct($product2);
$cart->addProduct($product3);
printf($cart);

