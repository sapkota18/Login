<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignUp Page</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="container">
        <?php
        if (isset($_GET['error']) && $_GET['error'] == 'password_mismatch') {
            echo "<p class='error'>Password does not match</p>";
        }
        ?>
        <form action="Signup.php" method="post">
            <h2>Sign Up</h2>
            <label for="usname">Username</label>
            <input type="text" id="usname" name="username" required /><br /><br />
            <label for="pass">Password</label>
            <input type="password" id="pass" name="password" required /><br /><br />
            <label for="pass2">Confirm Password</label>
            <input type="password" id="pass2" name="password2" required /><br /><br />
            <label for="ph">Phone</label>
            <input type="text" id="ph" name="phone" required /><br /><br />
            <label for="em">Email</label>
            <input type="email" id="em" name="email" required /><br /><br />
            <input type="submit" value="Sign Up" name="btn1" />
            <input type="reset" value="Clear" name="btn2" />
        </form>
        <div id="login">
            <a href="login.php">Already have an account? Login</a>
        </div>
    </div>
</body>
</html>
