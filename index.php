<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Login and Registration</title>
</head>
<style>
    .center{
        position : absolute;
        top : 50%;
        left : 50%;
        transform: translate(-50%, -50%);
    }
    .flex-container {
        display: flex;
    }
    .flex-container > div{
        background-color: white;
        margin: 10px;
        padding: 100px;
        font-size: 20px
    }

</style>
<body class="p-3 mb-2 bg-black text-emphasis-info">
<div class="p-3 mb-2 bg-primary-subtle text-emphasis-secondary center" >
    <div class='flex-container'>
        <div>
            <h2>Login</h2>
            <form action="login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" name="username" required><br><br>
        
            <label for="password">Password:</label>
            <input type="password" name="password" required><br><br>
        
            <input type="submit" value="Login">
            </form>
        </div>
        <div>
            <h2>Register</h2>
            <form action="register.php" method="POST">
            <label for="new_username">Username:</label>
            <input type="text" name="new_username" required><br><br>
            
            <label for="new_password">Password:</label>
            <input type="password" name="new_password" required><br><br>
            
            <input type="submit" value="Register">
            </form>
        </div>
    </div>
</div>
</body>
</html>