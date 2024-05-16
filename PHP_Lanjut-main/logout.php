<?php
// Start session
session_start();

// Destroy the session to log out the user
session_destroy();

header("Location: sessions.php"); // Redirect to login page
exit();
?>