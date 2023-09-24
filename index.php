<!DOCTYPE html>
<html>
<head>
    <title>Login and Registration</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>

    <h2>Register</h2>
    <form action="register.php" method="POST">
        <label for="new_username">Username:</label>
        <input type="text" name="new_username" required><br><br>
        
        <label for="new_password">Password:</label>
        <input type="password" name="new_password" required><br><br>
        
        <input type="submit" value="Register">
    </form>
</body>
</html>