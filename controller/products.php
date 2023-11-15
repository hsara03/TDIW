<?php
require_once __DIR__ . "/../model/DBconnect.php";
include __DIR__."/../model/productes.php";
$conn = getConn();
$products =  getAllProducts($conn);

include __DIR__."/../view/products.php";
?>
