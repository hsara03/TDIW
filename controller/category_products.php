<?php
require_once  __DIR__."/../model/connectaDB.php";
include __DIR__."/../model/productes.php";
$conn = getConn();
$products = getProductsByCategory($conn, $_GET['category']);
include __DIR__."/../view/products.php";
?>
