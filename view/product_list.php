<div class="container">
    <h1><?php echo $title; ?></h1>
    <div class="row">
        <ul>
            <?php foreach ($products as $product): ?>
                <li class="col">
                    <a href="index.php?accio=detalle_producte&product_id=<?php echo $product['id'] ?>">
                        <?php echo htmlspecialchars($product['title']) ?> - <?php echo htmlspecialchars($product['author']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
