<?php
// Start the session at the beginning of the script
session_start();

?>
<div class="right-section">
    <a href="#" class="logo"><img src="../Image/logo.png" alt="Logo"></a>
    <div class="auth-links">
        <a href="registro.html">Registrarse</a>
        <a href="login.html">Iniciar Sesión</a>
    </div>
</div>

<?php
/*
function authenticateUser($username, $password) {
    $conn = Database::getInstance();
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = :username");
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        return $user['id']; // Return the user's ID
    } else {
        return null; // Authentication failed
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Authenticate the user
    $user_id = authenticateUser($username, $password);

    if ($user_id) {
        // Set the user id in the session
        $_SESSION['user_id'] = $user_id;
        header('Location: index.php'); // Redirect to the home page after login
        exit();
    } else {
        // Authentication failed: handle the error, e.g., show an error message
        $error = 'Invalid credentials. Please try again.';
        // Include the login view here to sho
*/