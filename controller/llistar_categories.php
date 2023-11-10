<?php

require_once __DIR__.'/../model/connectaDB.php';
require_once __DIR__.'/../model/categories.php';
$categories = getCategories();

require __DIR__ . '/../view/llistar_categories.php';
