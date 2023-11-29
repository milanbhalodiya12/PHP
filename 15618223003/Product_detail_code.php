<?php

$p_name=$_REQUEST['product_name'];
$p_desc=$_REQUEST['product_description'];
$p_category=$_REQUEST['product_category'];
$p_price=$_REQUEST['product_price'];
$p_sku=$_REQUEST['product_sku'];
$p_barcode=$_REQUEST['product_barcode'];
$p_weight=$_REQUEST['product_weight'];
$p_dimension=$_REQUEST['product_dimension'];
$p_quantity=$_REQUEST['product_quantity'];
$p_variants=$_REQUEST['product_variants'];
$p_ship_info=$_REQUEST['shipping_info'];
$p_seo_info=$_REQUEST['seo_info'];
$p_brand=$_REQUEST['product_brand'];
$p_feature=$_REQUEST['product_feature'];
$p_benefits=$_REQUEST['product_benefits'];
$p_related=$_REQUEST['related_products'];
$p_review=$_REQUEST['product_reviews'];
$p_filename=$_REQUEST['image_filenames'];


$connect=mysqli_connect("localhost","root","","15618223003");

$query="INSERT INTO `product_details`(`product_name`, `product_description`, `product_category`, `product_price`, `product_sku`, `product_barcode`, `product_weight`, `product_dimension`, `product_quantity`, `product_variants`, `shipping_info`, `seo_info`, `product_brand`, `product_features`, `product_benefits`, `related_product`, `product_review`, `image_filenames`)
 VALUES ('$p_name','$p_desc','$p_category','$p_price','$p_sku','$p_barcode','$p_weight','$p_dimension','$p_quantity','$p_variants','$p_ship_info','$p_seo_info','$p_brand','$p_feature','$p_benefits','$p_related','$p_review','$p_filename')"; 

$execute_query=mysqli_query($connect,$query);


?>