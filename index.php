<?php
//session_start();
$connection_string = "host=127.0.0.1 port=5432 dbname=tdiw-k2 user=tdiw-k2 password=CozitjdL";
$connection = pg_connect($connection_string);

// index.php?accio=category
$accio = $_GET['accio'] ?? NULL;


switch ($accio) {
    case 'llistar-categories':
        include __DIR__ . '/controller/llistar_categories.php';
        break;
    case 'register':
        include __DIR__ . '/view/resources/resource_register.php';
        break;
    case 'category':
        require __DIR__."/view/resources/resource_category.php";
        break;
    case 'logout':
        $_SESSION = array();
        session_destroy();
        header('Location: index.php');
        break;
    default:
       require __DIR__."/view/resources/resource_main.php";
       break;
}

?>
