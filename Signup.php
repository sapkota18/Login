<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
if (isset($_POST["btn1"])) {
    $dbname = "User";
    $dbpass = "";
    $dbuser = "root";
    $servername = "localhost:3306";
    $conn = new mysqli($servername, $dbuser, $dbpass, $dbname);

    if ($_POST["password"] != $_POST["password2"]) {
        header("Location: index.php?error=password_mismatch");
        exit();
    }

    if ($conn->connect_error) {
        die("Connection Error: " . $conn->connect_error);
    }

    $name = $_POST["username"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $sql = "INSERT INTO LoginInfo (username, password, phone, email) VALUES('$name', '$password', '$phone', '$email')";
    $result = $conn->query($sql);

    if ($result) {
        echo "<div class='success-message'>SIGNUP Successful</div>";
    } else {
        echo "Signup Failed";
    }

    $conn->close();
}
?>
</body>
</html>
 