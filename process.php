<!-- process.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Result</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Perform simple validation
        if (empty($username) || empty($password)) {
            echo "Please fill in all fields.";
        } else {
            echo "Registration successful!<br>";
            echo "Username: $username<br>";
            echo "Password: $password";
        }
    } else {
        header("Location: index.php");
        exit();
    }
    ?>
</body>
</html>
