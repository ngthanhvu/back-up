<?php
namespace sanpham;
class Product {
     public $nameproduct;
     public $quantity;
     public $price;

     public function __construct($nameproduct,$quantity,$price)
     {
          $this->nameproduct = $nameproduct;
          $this->quantity = $quantity;
          $this->price = $price;
     }
     public function info() {
          echo "Name Product: " . $this->nameproduct . "<br>";
          echo "Quantity: " . $this->quantity . "<br>";
          echo "Price: " . $this->price . "<br>";
     }
}


?>