<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Telescopios</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
        <div class="intro-container">
            <h1>Bienvenido a Nuestra Tienda de Telescopios</h1>
            <p>Explora el universo desde la comodidad de tu hogar. Nuestra tienda online ofrece una amplia variedad de telescopios para todos los niveles, desde principiantes hasta profesionales. Sumérgete en las estrellas con nosotros.</p>
        </div>
    </main>

    <?php include __DIR__."../../../controller/products.php"; ?>

    <!-- footer -->
    <?php include __DIR__."../../../controller/footer.php"; ?>


</body>
</html>
