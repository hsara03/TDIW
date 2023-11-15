<?php

require_once __DIR__ . "/../model/DBconnect.php";
require_once __DIR__."/../model/categories.php";

$conn = getConn();
$categories = getCategories($conn);

include __DIR__."/../view/categories.php";

?>