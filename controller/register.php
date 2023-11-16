<?php

require_once __DIR__ . "/../model/DBconnect.php";
require __DIR__."/../model/usuaris.php";

$signed = null;

try {

    $filters = filter_input_array(
        INPUT_POST, [
            'name' => FILTER_SANITIZE_STRING,
            'email' => FILTER_VALIDATE_EMAIL,
            'password' => FILTER_DEFAULT,
            'address_1' => FILTER_DEFAULT,
            'address_2' => FILTER_DEFAULT,
            'city' => FILTER_SANITIZE_STRING,
            'postal_code' => FILTER_SANITIZE_STRING
        ]
    );

    if($filters==0){
        throw new Exception("invalid fields");
    } else {
        $name = $filters['name'];
        $email = $filters['email'];
        $password = $filters['password'];
        $address1 = $filters['address_1'];
        $address2 = $filters['address_2'];
        $city = $filters['city'];
        $postal_code = $filters['postal_code'];

        $conn = getConn();

        print_r($filters);
        registerUser($conn, $name, $email, $password, $address1, $address2, $city, $postal_code); // Assuming $number_string is not provided in your form.
    }
    header("Location: /?accio=register&success=true");
} catch (Exception $err){
    header("Location: /?accio=register&error=".$err->getMessage());
}

include_once __DIR__."/../view/register.php";
?>
