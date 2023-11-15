<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
<!-- navigation -->
<header>
    <!-- search -->
    <?php include __DIR__ . "/../../controller/search.php"; ?>

    <!-- login -->
    <?php include __DIR__ . "/../../controller/login.php"; ?>
</header>

<!-- registration form -->
<main>
    <section id="registration">
        <h1>Crear una cuenta</h1>
        <form action="/controller/register.php" method="post">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" pattern="[A-Za-z\s]+" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" pattern="[A-Za-z0-9]+" required>

            <label for="address">Dirección:</label>
            <input type="text" id="address" name="address" maxlength="30" required>

            <label for="city">Población:</label>
            <input type="text" id="city" name="city" maxlength="30" required>

            <label for="postal_code">Código Postal:</label>
            <input type="text" id="postal_code" name="postal_code" pattern="^\d{5}$" required>

            <button type="submit">Registrarse</button>
        </form>
    </section>
</main>

<!-- footer -->
<?php include __DIR__ . "/../../controller/footer.php"; ?>

<script src="/JS/index.js"></script>
</body>
</html>
