<?php
session_start();
include 'config.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    if (empty($username) || empty($password)) {
        $error = 'All fields are required!';
    } else {
        $result = $conn->query("SELECT * FROM Users WHERE Username='$username'");

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['Password'])) {
                $_SESSION['username'] = $username;
                header('Location: home.php');
                exit();
            } else {
                $error = 'Invalid username or password!';
            }
        } else {
            $error = 'Invalid username or password!';
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resource Management System</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <ul class="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="reservation.php">Reservation</a></li>
            <li><a href="available.php">Available</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="faq.php">FAQ</a></li>
        </ul>
        <div class="main">
            <input class="srch" type="search" name="" placeholder="Search...">
            <a href="login.php" class="login-button">Login</a>
            <a href="signup.php" class="signup-button">Sign Up</a>
        </div>
    </header>

    <section class="log">  
        <div class="login">
            <div class="boxx1">
                <div class="log">
                    <form method="POST" action="login.php">
                        <h1 style="text-align: center;">Log In</h1>
                        <?php if ($error): ?>
                            <p style="color: red;"><?php echo $error; ?></p>
                        <?php endif; ?>
                        <label for="username" style="color: white;">Username</label>
                        <input type="text" name="username" placeholder="username" required><br><br>
                        <label for="password" style="color: white;">Password</label>
                        <input type="password" name="password" required><br><br>
                        <input type="submit" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
