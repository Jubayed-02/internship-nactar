<?php
// Start session — MUST be before any output
session_start();

// Store data
$_SESSION['user_id'] = 42;
$_SESSION['username'] = "john";
$_SESSION['cart'] = ["item1", "item2"];

// Read data
echo $_SESSION['username'] ?? "Guest";

// Check existence
if (isset($_SESSION['user_id'])) {
    echo "Logged in";
}

// Remove one value
unset($_SESSION['cart']);

// Destroy entire session
session_unset();     // clear variables
session_destroy();   // destroy session data
?>