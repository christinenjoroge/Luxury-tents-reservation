<?php
// admin_logout.php

// Destroy the session
session_destroy();

// Redirect to the admin login page
header("Location:sign in.php");  // Use forward slashes for paths
exit();
?>