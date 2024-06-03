<?php
session_start();

if (isset($_POST["login_btn"])) {
    $dbname = "User";
    $dbpass = "";
    $dbuser = "root";
    $servername = "localhost:3306";
    $conn = new mysqli($servername, $dbuser, $dbpass, $dbname);

    if ($conn->connect_error) {
        die("Connection Error: " . $conn->connect_error);
    }

    $username = $_POST["username"];
    $password = $_POST["password"];

    
    $sql = "SELECT password FROM LoginInfo WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        $error = "Invalid username or password";
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="container">
        <?php
        if (isset($error)) {
            echo "<p class='error'>$error</p>";
        }
        ?>
        <form action="login.php" method="post">
            <h2>Login</h2>
            <label for="usname">Username</label>
            <input type="text" id="usname" name="username" required /><br /><br />
            <label for="pass">Password</label>
            <input type="password" id="pass" name="password" required /><br /><br />
            <input type="submit" value="Login" name="login_btn" />
            <input type="reset" value="Clear" name="clear_btn" />
        </form>
        <div id="signup">
            <a href="index.php">Don't have an account? Sign Up</a>
        </div>
    </div>
</body>
</html>
