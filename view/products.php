
<div>
    <ul>
        <?php
        global $products;
        foreach($products as $product): ?>
            <section onclick="displayProduct('<?php echo $product['id']?>')" class="telescope">
                <img src="<?php echo $product['image']?>" alt="<?php echo $product['id']?>"/>
                <div class="description">
                    <p><?php echo $product['description']?></p>
                    <p>Precio: <?php echo $product['price']?>€</p>
                </div>
            </section>
        <?php endforeach ?>
    </ul>
</div>
