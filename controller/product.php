<?php

require_once __DIR__."/../model/productes.php";

$conn = getConn();
$product = getProductById($conn, $_GET["product"]);


include __DIR__."/../view/product.php";

?>