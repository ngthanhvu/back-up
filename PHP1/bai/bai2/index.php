<?php
// include ("category/category.php");
// include ("product/product.php");

use sanpham\Product as produts;
use danhmuc\Category as category;

spl_autoload_register(function ($class) {
     $filename = __DIR__ . DIRECTORY_SEPARATOR . $class . '.php';
     $new_filename = str_replace("\\", "/",  $filename);
     if (file_exists($new_filename)) {
         print(" " . $filename);
         include $new_filename;
     }
 });

$sp = new produts("Apple", 4343, 4334);
$sp->info();

$tm = new category("Tao xuat khau");
$tm->info();


?>