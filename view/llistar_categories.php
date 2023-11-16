<?php
require_once __DIR__ . '/../model/DBconnect.php';
require_once __DIR__.'/../model/categories.php';

?>

<h1> Llistat de categories </h1>
<div class="row">
    <ul>
        <?php foreach ($categories as $category): ?>
            <li class="col">
                <a onclick="showCategory('<?php echo $category['id']?>')">
                    <?php echo $category['nom']; ?> <!-- Agrega el nombre de la categoría -->
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
