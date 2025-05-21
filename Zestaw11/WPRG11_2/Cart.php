<?php
require_once "Product.php";
class Cart{
    private $products;
    public function __construct(){
        $this->products = array();
    }
    public function addProduct(Product $product){
        $this->products[] = $product;
    }
    public function removeProduct(Product $product){
        foreach($this->products as $products){
            if($products->getName() == $product->getName()){
                unset($this->products[array_search($product, $this->products)]);
            }
        }
    }
    public function getTotal(){
        $total = 0;
        foreach($this->products as $product){
            $total += $product->getPrice()*$product->getQuantity();
        }
        return $total;
    }
    public function __toString(){
        $withComma = implode(', ', $this->products);
        $total = $this->getTotal();
        return
            "Products in cart: \n $withComma\n\nTotal price: $total";
    }

}