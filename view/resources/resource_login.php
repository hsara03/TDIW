<?php?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<!-- Aquí puedes incluir el mismo <header> que en index.html si quieres que se muestre el mismo diseño -->

<main>
    <!-- Formulario de Inicio de Sesión -->
    <form action="#" method="post">
        <label for="login_email">Correo Electrónico:</label>
        <input type="email" id="login_email" name="login_email" required>

        <label for="login_password">Contraseña:</label>
        <input type="password" id="login_password" name="login_password" required>

        <input type="submit" value="Iniciar Sesión">
    </form>
</main>
...
