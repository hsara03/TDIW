<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Telescopios</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="/JS/index.js"></script>
</head>
<body>
<!-- navigation -->
<header>
    <!-- search -->
    <?php include __DIR__."../../../controller/search.php"; ?>

    <!-- login -->
    <?php include __DIR__."../../../controller/login.php"; ?>
</header>

<!-- categories -->
<?php include __DIR__."../../../controller/categories.php"; ?>

<!-- productes -->
<main>
    <?php include __DIR__."../../../controller/products.php"; ?>
</main>

<!-- footer -->
<?php include __DIR__."../../../controller/footer.php"; ?>


</body>
</html>
