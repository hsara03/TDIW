<?php
function getProductById($conn, $productId) {
    $stmt = pg_query_params($conn, "SELECT * FROM product WHERE id = $1", [$productId]);
    $productss = pg_fetch_assoc($stmt);
    return $productss;
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