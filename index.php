<?php

// index.php

$accio = $_GET['accio'] ?? NULL;

switch ($accio) {
    case 'llistar-categories':
        include __DIR__ . '/resource_llistar_categories.php';
        break;
    default:
        include __DIR__ . '/resource_portada.php';
        break;
}
