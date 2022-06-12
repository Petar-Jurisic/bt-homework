<?php


class ShoppingCart
{

    private array $cartItems = [];

    public function getcartItems()
    {
        return $this->cartItems;
    }

    public function setcartItems($cartItems)
    {
        $this->cartItems = $cartItems;
    }

    public function addToCart(Product $product, int $quantity)
    {

        $ShoppingCartItem = $this->findShoppingCartItem($product->getbarCode());
        if ($ShoppingCartItem === null){
            $ShoppingCartItem = new ShoppingCartItem($product, 0);
            $this->cartItems[$product->getbarCode()] = $ShoppingCartItem;
        }
        $ShoppingCartItem->increaseQuantity($quantity);
        return $ShoppingCartItem;
    }

    private function findShoppingCartItem(int $productbarCode)
    {
        return $this->cartItems[$productbarCode] ?? null;
    }

    public function removeItem(Product $product)
    {
        unset($this->cartItems[$product->getbarCode()]);
    }

    public function getTotalQuantity()
    {
        $sum = 0;
        foreach ($this->cartItems as $item) {
            $sum += $item->getQuantity();
        }
        return $sum;
    }

    public function getTotalSum()
    {
        $totalSum = 0;
        foreach ($this->cartItems as $item) {
            $totalSum += $item->getQuantity() * $item->getProduct()->getPrice();
        }

        return $totalSum;
    }
}