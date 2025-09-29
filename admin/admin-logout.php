<?php
session_start();
session_unset(); // remove all session variables
session_destroy(); // destroy the session

// Optionally redirect to login page
header("Location: admin_login.html");
exit();
?>
