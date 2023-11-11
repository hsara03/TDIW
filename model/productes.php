<?php
function getProductById($conn, $productId) {
    $stmt = pg_query_params($conn, "SELECT * FROM product WHERE id =?", [$productId]);
    $product = pg_fetch_row($stmt);
    return $product;
}

function getProductsByCategory($conn, $categoryId) {
    $stmt = pg_query_params($conn, "SELECT * FROM product WHERE category_id = $1", [$categoryId]);
    $products = pg_fetch_all($stmt);
    return $products;
}

function getAllProducts($conn) {
    $stmt = pg_query($conn, "SELECT * FROM product");
    $products = pg_fetch_all($stmt);
    return $products;
}