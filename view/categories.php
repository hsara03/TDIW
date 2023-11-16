<div id="rectangle" class="side-rectangle">
    <ul>
        <?php
        global $categories;
        foreach($categories as $category): ?>
                    <li>
                        <a onclick="showCategory('<?php echo $category['id']?>')">
                            <?php echo htmlentities($category['name'], ENT_QUOTES | ENT_HTML5, 'UTF-8') ?>
                        </a>
                    </li>
        <?php endforeach ?>
    </ul>
</div>