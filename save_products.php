<?php
$product = $_POST['producto'];
$price = $_POST['precio'];
$category = $_POST['categoria'];

/** echo $product." ".$price." ".$category; **/

include_once("config_products.php");
include_once("db.php");
$link = new Db();
include_once('upload_image.php');
$path_img=$directorio.$nombre_img;   //Ruta completa de la imagen levantada.
$sql="insert products(product_name, image, price, id_category) values (:product,:path_img,:price,:category)";
$stmt = $link->prepare($sql);
$stmt->execute();
$data = $stmt->fetchAll();
