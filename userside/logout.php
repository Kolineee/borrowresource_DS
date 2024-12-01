<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resource Management System</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
 </head>

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
    <a href="#"></a><button class="btn">Search</button></a>
    <a href="login.php" class="login-button">Login</a>
    <a href="signup.php" class="signup-button">Sign Up</a>    
</div>
  </header><br><br>

 <section class="logsec">
    <div class="seclog"><br> 
    <p class="pp">You've log out. Log in another account?</p>
    <button class="yes" onclick="window.location.href='login.php'">Yes</button>
  </div>
 </section>
