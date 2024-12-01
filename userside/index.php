<?php
session_start();
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
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <div class="navbar-container">
      <div class="menu-toggle" onclick="toggleMenu()">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
      <ul class="navbar">
      <li><a href="index.php">Home</a></li>
            <li><a href="reservation.php">Reservation</a></li>
            <li><a href="available.php">Available</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="faq.php">FAQ</a></li>
      </ul>
    </div>
    <div class="main">
      <input class="srch" type="search" name="" placeholder="Search...">
      <a href="login.php" class="login-button">Login</a>
      <a href="signup.php" class="signup-button">Sign Up</a>
    </div>
  </header>
  <div class="column">
    <div class="left">
      <div class="centered-content">
        <img src="./responsive.png" alt="Logo"><br><br>
        <h1>BORROW RESOURCES</h1>
        <p>College Department Resource Reservation</p>
      </div>
    </div>
    <div class="right">
      <div class="centered-content">
        <div class="logos">
          <img src="./WMSULOGO.png" alt="WMSU Logo">
          <img src="./CCSLOGO.png" alt="CCS Logo">
        </div>
        <h3 class="center-text">Welcome to Borrow Resource, your exclusive portal <br> for reserving departmental resources <br>swiftly and conveniently!</h3><br><br>
        <button class="get-started-button" onclick="window.location.href='login.php'">Get Started</button>
      </div>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
