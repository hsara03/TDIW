<?php

function getCategories($conn)
{
    $stmt = pg_query($conn, "SELECT * FROM category");
    $filas = pg_fetch_all($stmt);
    return $filas;
}

function getCategoryById($conn, $categoryId)
{
    $stmt = pg_query_params($conn, "SELECT * FROM category WHERE id =?", [$categoryId]);
    $category = pg_fetch_row($stmt);
    return $category;
}


