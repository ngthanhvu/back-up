<?php
namespace danhmuc;
class Category {
     public $nameCategory;

     public function __construct($nameCategory)
     {
          $this->nameCategory = $nameCategory;
     }

     public function info() {
          echo "Name Category: ". $this->nameCategory . "<br>";
     }
}



?>