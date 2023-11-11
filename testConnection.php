<?php
require_once 'connectaDB.php'; // Adjust the path as necessary

// Attempt to connect to the database
try {
    $conn = Database::getInstance();
    echo "Connected successfully to the database.";

    // Execute a test query
    $stmt = $conn->query('SELECT * FROM categories LIMIT 1'); // Assuming you have a 'categories' table
    $result = $stmt->fetchAll();

    // Check if the query returned any result
    if ($result) {
        echo "Data fetched successfully.";
        print_r($result); // Output the result
    } else {
        echo "No data found.";
    }
} catch (PDOException $e) {
    // If there is an error in the connection, catch it and display the error message
    echo "Connection failed: " . $e->getMessage();
}
?>
