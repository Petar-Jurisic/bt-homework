<?php


class Product
{
    private int $barCode;
    private string $title;
    private float $price;
    private int $availableQuantity;

    /**
     * Product constructor.
     *
     * @param int    $barCode
     * @param string $title
     * @param float  $price
     * @param int    $availableQuantity
     */
    public function __construct($barCode, $title, $price, $availableQuantity)
    {
        $this->barCode = $barCode;
        $this->title = $title;
        $this->price = $price;
        $this->availableQuantity = $availableQuantity;
    }

    /**
     * @return int
     */
    public function getbarCode()
    {
        return $this->barCode;
    }

    /**
     * @param int $barCode
     */
    public function setbarCode($barCode)
    {
        $this->barCode = $barCode;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getAvailableQuantity()
    {
        return $this->availableQuantity;
    }

    public function setAvailableQuantity($availableQuantity)
    {
        $this->availableQuantity = $availableQuantity;
    }

    public function addToShoppingCart(ShoppingCart $ShoppingCart, int $quantity)
    {
        return $ShoppingCart->addToCart($this, $quantity);
    }

    public function removeFromShoppingCart(ShoppingCart $ShoppingCart)
    {
        return $ShoppingCart->removeItem($this);
    }
}