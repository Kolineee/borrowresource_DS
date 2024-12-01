<?php
include 'config.php';

$errors = [];
$firstname = $lastname = $username = $course = $section = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $conn->real_escape_string($_POST['firstname']);
    $lastname = $conn->real_escape_string($_POST['lastname']);
    $username = $conn->real_escape_string($_POST['username']);
    $course = $conn->real_escape_string($_POST['course']);
    $section = $conn->real_escape_string($_POST['section']);
    $password = $conn->real_escape_string($_POST['password']);
    $confirm_password = $conn->real_escape_string($_POST['confirm_password']);

    if (empty($firstname)) {
        $errors['firstname'] = 'First Name is required!';
    }
    if (empty($lastname)) {
        $errors['lastname'] = 'Last Name is required!';
    }
    if (empty($username)) {
        $errors['username'] = 'Username is required!';
    }
    if (empty($course)) {
        $errors['course'] = 'Course is required!';
    }
    if (empty($section)) {
        $errors['section'] = 'Section is required!';
    }
    if (empty($password)) {
        $errors['password'] = 'Password is required!';
    }
    if (empty($confirm_password)) {
        $errors['confirm_password'] = 'Confirm Password is required!';
    } elseif ($password !== $confirm_password) {
        $errors['password_mismatch'] = 'Passwords do not match!';
    }

    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Check if the username already exists
        $check_username = $conn->query("SELECT * FROM Users WHERE Username='$username'");
        if ($check_username->num_rows > 0) {
            $errors['username_exists'] = 'Username already exists!';
        } else {
            $sql = "INSERT INTO Users (FirstName, LastName, Username, Course, Section, Password)
                    VALUES ('$firstname', '$lastname', '$username', '$course', '$section', '$hashed_password')";

            if ($conn->query($sql) === TRUE) {
                header('Location: login.php'); // Redirect to login.php after successful registration
                exit();
            } else {
                $errors['db_error'] = 'Error: ' . $sql . '<br>' . $conn->error;
            }
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

    <div class="signup">
        <div class="boxx2">
            <div class="signifo">
                <form method="POST" action="signup.php">
                    <h1 style="text-align: center;">Sign Up</h1>
                    <?php if (!empty($errors)): ?>
                        <?php if (isset($errors['password_mismatch'])): ?>
                            <p style="color: red;"><?php echo $errors['password_mismatch']; ?></p>
                        <?php endif; ?>
                    <?php endif; ?>
                    <label for="firstname">First Name:</label>
                    <input type="text" name="firstname" value="<?php echo htmlspecialchars($firstname); ?>" placeholder="First Name" required><br>
                    <?php if (isset($errors['firstname'])): ?>
                        <p style="color: red;"><?php echo $errors['firstname']; ?></p>
                    <?php endif; ?>
                    <label for="lastname">Last Name:</label>
                    <input type="text" name="lastname" value="<?php echo htmlspecialchars($lastname); ?>" placeholder="Last Name" required><br>
                    <?php if (isset($errors['lastname'])): ?>
                        <p style="color: red;"><?php echo $errors['lastname']; ?></p>
                    <?php endif; ?>
                    <label for="username">Username:</label>
                    <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" placeholder="Username" required><br>
                    <?php if (isset($errors['username'])): ?>
                        <p style="color: red;"><?php echo $errors['username']; ?></p>
                    <?php endif; ?>
                    <?php if (isset($errors['username_exists'])): ?>
                        <p style="color: red;"><?php echo $errors['username_exists']; ?></p>
                    <?php endif; ?>
                    <label for="course">Course:</label>
                    <input type="text" name="course" value="<?php echo htmlspecialchars($course); ?>" placeholder="Course" required><br>
                    <?php if (isset($errors['course'])): ?>
                        <p style="color: red;"><?php echo $errors['course']; ?></p>
                    <?php endif; ?>
                    <label for="section">Section:</label>
                    <input type="text" name="section" value="<?php echo htmlspecialchars($section); ?>" placeholder="Section" required><br>
                    <?php if (isset($errors['section'])): ?>
                        <p style="color: red;"><?php echo $errors['section']; ?></p>
                    <?php endif; ?>
                    <label for="password">Password:</label>
                    <input type="password" name="password" required><br>
                    <?php if (isset($errors['password'])): ?>
                        <p style="color: red;"><?php echo $errors['password']; ?></p>
                    <?php endif; ?>
                    <label for="confirm_password">Confirm Password:</label>
                    <input type="password" name="confirm_password" required><br>
                    <?php if (isset($errors['confirm_password'])): ?>
                        <p style="color: red;"><?php echo $errors['confirm_password']; ?></p>
                    <?php endif; ?>
                    <input type="submit" value="Sign Up">
                    <?php if (isset($errors['db_error'])): ?>
                        <p style="color: red;"><?php echo $errors['db_error']; ?></p>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
