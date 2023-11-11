<?php
session_start();

$accio = $_GET['accio'] ?? NULL;

switch ($accio) {
    case 'llistar-categories':
        include __DIR__ . '/controller/llistar_categories.php';
        break;
    case 'login':
        include __DIR__ . '/controller/login.php';
        break;
    case 'logout':
        $_SESSION = array();
        session_destroy();
        header('Location: index.php');
        break;
    default:
        include __DIR__ . '/controller/resource_portada.php';
        break;
}
?>
