<?php
// Include credentials
require_once __DIR__ . '/db_credentials.php';

// Create a secure PDO connection to protect against SQL Injection
try {
    // DSN (Data Source Name)
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
    
    // PDO Options
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Throw exceptions on errors
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Fetch associative arrays by default
        PDO::ATTR_EMULATE_PREPARES   => false,                  // Use real prepared statements (prevents SQL injection)
    ];

    // Create the PDO instance
    $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
    
    // We are temporarily maintaining a mysqli connection as well for backward compatibility
    // because existing code still uses mysqli_query(). 
    // TODO: Phase out mysqli completely in future updates and exclusively use $pdo.
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    if (!$connection) {
        throw new Exception("MySQLi fallback connection failed: " . mysqli_connect_error());
    }
    
    mysqli_set_charset($connection, "utf8mb4");

} catch (PDOException $e) {
    // In a production environment, you should log this error instead of displaying it
    // to prevent leaking sensitive database path information to attackers.
    error_log("Database Connection Error: " . $e->getMessage());
    die("Database connection failed. Please contact the administrator.");
} catch (Exception $e) {
    error_log("General Connection Error: " . $e->getMessage());
    die("A system error occurred. Please try again later.");
}
?>