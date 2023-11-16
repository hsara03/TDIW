<?php

include __DIR__."view/login.php";


function registerUser($conn, $name, $email, $password, $address_line1, $address_line2, $address_city, $number_string) {
    // Hashing del password antes de guardarlo en la base de datos
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    // Preparar la consulta SQL para evitar inyecciones SQL
    $query = 'INSERT INTO "user" (name, email, secret, address_line1, address_line2, address_city, number_string) VALUES ($1, $2, $3, $4, $5, $6, $7)';

    // Preparar la consulta
    $result = pg_query_params($conn, $query, [
        $name,
        $email,
        $passwordHash,
        $address_line1,
        $address_line2,
        $address_city,
        $number_string
    ]);

    if($result==false) throw new Exception("user already exists");
}
?>
