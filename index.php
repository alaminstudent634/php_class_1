<?php

/**
 *  Product Type : Monitor
 * brand : Lenovo
 * Product status : old
 * Size : 15.5 inch
 * price : 8000 tk
 * VGA cable status : Yes

 */


$product_Type = "Monitor" ; // Data type is string
$brand = "Lenovo" ; // Data type is string
$product_status = "old" ; // Data type is string
$vGA_cable = true ; // Data type is boolen
$size = 15.5  ; // Data type is float / double
$price = 7000 ; // Data type is INTEGER


$porduct_specifications = "Product Type =  $product_Type  <br> Brand = $brand  <br> Product Status = $product_status  <br> VGA Cable = $vGA_cable <br> Size = $size inch <br> Price = $price tk" ;

echo $porduct_specifications;
