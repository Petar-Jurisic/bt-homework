<?php

require_once "Product.php";
require_once "ShoppingCart.php";
require_once "ShoppingCartItem.php";

$product1 = new Product(1, "iPhone 10", 1500, 10);
$product2 = new Product(2, "M3 SSD", 420, 10);
$product3 = new Product(3, "Samsung Galaxy S10", 2200, 10);
$ShoppingCart = new ShoppingCart();
$ShoppingCartItem1 = $ShoppingCart->addToCart($product1, 1);
$ShoppingCartItem2 = $product2->addToShoppingCart($ShoppingCart, 1);

echo "Number of items in ShoppingCart: ";
echo $ShoppingCart->getTotalQuantity() . "<br>"; 
echo "Total price of items in ShoppingCart: ";
echo $ShoppingCart->getTotalSum() . "<br><br>"; 

$ShoppingCartItem2->increaseQuantity();

echo "Number of items in ShoppingCart: ";
echo $ShoppingCart->getTotalQuantity() . "<br>"; 

echo "Total price of items in ShoppingCart: ";
echo $ShoppingCart->getTotalSum() . "<br><br>"; 

$ShoppingCart->removeItem($product1);

echo "Number of items in ShoppingCart: ";
echo $ShoppingCart->getTotalQuantity() . "<br>"; 

?>