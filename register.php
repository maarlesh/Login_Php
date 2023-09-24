<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_username = $_POST["new_username"];
    $new_password = $_POST["new_password"];
    //$new_password = password_hash($_POST["new_password"], PASSWORD_DEFAULT);
    //creating a primary field for session id
    $sql = "INSERT INTO users (id, username, password) VALUES (null, ?, ?)";
    //$sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $new_username, $new_password);

    if ($stmt->execute()) {
        echo "Registration successful. <a href='index.php'>Login</a>";
        echo $new_username;
        echo $new_password;
    } 
    else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>