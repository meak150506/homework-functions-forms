<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form method = "POST" action = "">
        <label>Username:</label> <input type = "text" name="username" required><br><br>
        <label>Password:</label> <input type = "password" name="password" required><br><br>
        <button type="submit" name = "login">Login</button>
    </form>

    <?php 
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == "admin" && $password == "1234") {
            echo "<p>Login successful!</p>";
        } else {
            echo "<p>Invalid username or password.</p>";
        }
    }

?>
</body>
</html>