<?php
include('db.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["new_username"];
    $password = trim($_POST["new_password"]);
    $old_username = $_POST["old_username"];
    $sql = "UPDATE users SET username=?, password=? where username=?" ;
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $password, $old_username);
    if($stmt->execute()){
        $conn->commit(); 
        echo "$stmt->error";
        header("Location: index.php?message=User+updated+Successfully.+Please+Login+again");
        echo "<div class='success-message'>User updated successfully. Please Login again</div>";
    }
    else{
        echo "Please recheck the username";
    }
    $result = $stmt->get_result();   
}
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
            <h2>Login</h2>
            
            <br>
            <br>
            <form action="edit.php" method="POST">
            <label for="old_username">Enter Old Username:</label>
            <input type="text" name="old_username" required><br><br>
            <br>
            <label for="new_username">Enter New Username:</label>
            <input type="text" name="new_username" required><br><br>
            <br>
            <label for="new_password">Enter New Password:</label>
            <input type="password" name="new_password" required><br><br>
            <br>
            <br>
            <input type="submit" value="Update">
            </form>
        </div>
    </div>
</div>
</body>
</html>