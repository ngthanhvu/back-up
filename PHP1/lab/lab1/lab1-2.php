<?php

class Product {
     public $name;
     public $price;
     public $quantity;

     function __construct($name,$price,$quantity)
     {
          $this->name = $name;
          $this->price = $price;
          $this->quantity = $quantity;
     }

     #Phương thức "getInfo()" để trả về thông tin đầy đủ về sản phẩm, bao gồm tên sản phẩm, giá và số lượng.
     public function getInfo() {
          return "Product: {$this->name}, Price: {$this->price}, Quantity: {$this->quantity}";
     }
     #Tính toán tổng giá trị của sản phẩm
     public function calculateTotal () {
          return $this->price * $this->quantity;
     }

     #get 
     function get_name () {
          return $this->name;
     }
     function get_price () {
          return $this->price;
     }
     function get_quantity () {
          return $this->quantity;
     }
     #set
     function set_name ($name) {
          return $this->name = $name;
     }
     function set_price ($price) {
          return $this->price = $price;
     }
     function set_quantity ($quantity) {
          return $this->quantity = $quantity;
     }
}

$apple = new Product("Apple",1200,10);
echo $apple->getInfo() . "<br>";
echo "Total: " . $apple->calculateTotal();
?>