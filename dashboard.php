<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
    exit();
}

// Display the user's dashboard content here
echo "Welcome to your dashboard! <a href='logout.php'>Logout</a>";
?>