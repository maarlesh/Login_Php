<?php
include("db.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = trim($_POST["password"]);
    $username = $_SESSION["username"];
    $sql = "SELECT id, username, password FROM users WHERE username=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        echo $password;
        if ($password == $user["password"]) {
            $sql_delete = "DELETE FROM users where username= ?";
            $stmt_delete = $conn->prepare($sql_delete);
            $stmt_delete-> bind_param('s',$username);
            if ($stmt_delete->execute()) {
                echo "User deleted successfully.";
                header("Location: index.php?messageDeleted=User+Deleted");
            } else {
                echo "Error deleting user.";
            }
        } else {
            echo "Password does not match.";
        }
    } else {
        echo "User not found.";
    }

    $stmt->close();
}
$conn->close();
?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Login and Registration</title>
</head>
<style>
    .success-message {
    color: green;
    font-weight: bold;
    background-color: #f0f8ff;
    padding: 10px;
    border: 1px solid #008000; 
    }
    .center{
        position : absolute;
        top : 50%;
        left : 50%;
        transform: translate(-50%, -50%);
        height : 700px;
        width : 1200px; 
    }
    .flex-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 650px;
    }
    .flex-container > div{
        background-color: white;
        margin: 10px;
        padding: 100px;
        font-size: 20px
    }
</style>
<body class="p-3 mb-2 bg-black text-emphasis-info body-center">
<div class="p-3 mb-2 bg-primary-subtle text-emphasis-secondary center" >
    <div class='flex-container'>
        <div>
            <h2>Please enter the Password to Confirm</h2>
            <br>
            <br>
            <form action="delete.php" method="POST">
            <label for="password">Password:</label>
            <input type="password" name="password" required><br><br>
            <br>
            <br>
            <input type="submit" value="Confirm">

            </form>
        </div>
    </div>
</div>
</body>
</html>

