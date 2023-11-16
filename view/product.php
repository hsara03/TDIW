<?php
global $product;
?>
<link rel="stylesheet" type="text/css" href="style.css">

<div class="product-details">
    <h2><?php echo $product['name'] ?></h2>
    <div class="product-content">
        <img class="product-image" src="<?php echo $product['image'] ?>" alt="<?php echo $product['name'] ?>"/>
        <div class="product-info">
            <h3 class="product-price"><?php echo $product['price']?>€</h3>
            <p class="product-description"><?php echo $product['description'] ?></p>
        </div>
    </div>
</div>
