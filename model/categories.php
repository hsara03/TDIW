<?php
/**
 * @return array
 */
function getCategories(): array
{
    #$conn = \connectaDB::conn();
    #$stmt = connectaDB::conn()->prepare($sql);
    #var_dump($stmt);
    $conn = getConn();
    $sql = ("SELECT * FROM categories");
    $stmt = pg_query($conn, $sql);
    #$stmt = connectaDB::conn()->prepare($sql);
    $filas = pg_fetch_all($stmt);
    var_dump($filas);
    $stmt-> execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);


}

/**
 * @param int $categoryId
 * @return array
 */

function getCategoryById(int $categoryId): array
{
    $conn = \connectaDB::con();
    $sql = 'SELECT id,`name`
            FROM category
            WHERE id= :category_id';
    $stmt =$conn->prepare($sql);
    $stmt->execute(
        [
            'product_id' => $categoryId,
        ]
    );
    return $stmt -> fetch(PDO::FETCH_ASSOC);
}

function getProductById(int $productId): array
{
    $conn = \connectaDB::conn();
    $sql = 'SELECT id,`title`, `author`, `description`
            FROM product
            WHERE id= :prduct_id';
    $stmt =$conn->prepare($sql);
    $stmt->execute(
        [
            'product_id' => $productId,
        ]
    );
    return $stmt -> fetch(PDO::FETCH_ASSOC);
}
