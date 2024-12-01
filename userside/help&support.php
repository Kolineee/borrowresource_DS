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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <li><a href="./home.php">Home</a></li>
    <li><a href="./main_reservation.php">Reservation</a></li>
    <li><a href="./main_available.php">Available</a></li>
    <li><a href="./main_contact.php">Contact</a></li>
    <li><a href="./main_about.php">About</a></li>
    <li><a href="./main_faq.php">FAQ</a></li>
  </ul>
 </div>
  <div class="main">
    <input class="srch" type="search" name="" placeholder="Search...">
    <a href="#"></a><button class="btn">Search</button></a>
  </div>
  <div class="icons">
    <i class="far fa-bell bell-icon" id="bellIcon" onclick="toggleNotification()"></i>
    <div class="notification-box" id="notificationBox">
      <h2>Notifications</h2>
    <p>No new notifications!</p>
  </div>
    <img src="./pfp.png" class="user-pic" onclick="toggleMenu2()">
    <div class="sub-menu-wrap" id="subMenu">
      <div class="sub-menu">
        <div class="user-info">
          <img src="./pfp.png" alt="pfp">
          <h3>Calista Perez</h3>
        </div>
        <hr>
        <a href="profile.php" class="sub-menu-link">
          <img src="./user.png" alt="user">
          <p>Profile</p>
          <span>></span>
        </a>
        <a href="Settings.php" class="sub-menu-link">
          <img src="./settings.png" alt="settings">
          <p>Settings</p>
          <span>></span>
        </a>
        <a href="help&support.php" class="sub-menu-link">
          <img src="./help-&-Support.png" alt="h&s">
          <p>Help & Support</p>
          <span>></span>
        </a>
        <a href="logout.php" class="sub-menu-link">
          <img src="./logout.png" alt="Logout">
          <p>Logout</p>
          <span>></span>
        </a>
      </div>
    </div>
  </div>
</header>

<section class="SrchH">
  <div class="H&P">
    <input class="srch" type="search" name="" placeholder="Search...">
    <a href="#"></a><button class="btn">Search</button></a>
  </div>

</section>

<section class="helpsupport-sec">
  <h1>Help & Support</h1><br><br>
  <h3>User Guides and Tutorials:</h3>
  <h4>How to Make a Reservation Guide:</h4>
  <p>Check out our step-by-step guide on how to make a reservation using our system FAQs.
    <br>
  <h6>Video Tutorial: Making a Reservation:</h6>
  <p>Watch our video tutorial to learn how to make a reservation quickly and easily tutorial.yt.com .</p><br>

  <h6>Contact Information:</h6>
  <p>Email: Tingas@gmail.com</p>
  <p>Phone: 09999888776</p>
  <p>Visit Us: College of Computing Studies</p><br>

  <h4>Troubleshooting Tips:</h4>
  <h4>Problem: Unable to Log In</h4>
  <p>Ensure that you are using the correct username and password. If you've forgotten your password,</p>
   <p>use the "Forgot Password" option to reset it.</p><br>
  <h4>Problem: Reservation Error</h4>
  <p>Double-check the availability of the resource and ensure that you're </p>
  <p>selecting a valid date and time for your reservation.</p><br>
  <h4>Problem: Technical Glitch</h4>
  <p>Clear your browser cache and cookies, or try accessing the system using a different browser.</p>
   <p>If the issue persists, contact our technical support team for assistance.</p><br>
  <h4>Feedback Mechanism:</h4>
  <p>We value your feedback! Please share your suggestions, report any issues,</p>
   <p>or provide general feedback about the reservation system at 'contact'.</p><br>
  <h4>Policies and Guidelines:</h4>
  <h4>Reservation Policies:</h4>
  <p>Review our reservation policies to understand the terms and conditions of</p>
   <p>borrowing resources from our department.</p><br>
  <h4>Data Privacy:</h4>
  <p>Learn about how we protect your privacy and ensure the security of</p>
   <p>your personal information when using the reservation system.</p><br>
  <h4>Updates and Announcements:</h4>
  <p>Stay updated with the latest news, features, and maintenance schedules related to</p>
   <p>the reservation system by checking our announcements section regularly.</p><br>
  <h4>Accessibility Information:</h4>
  <p>Our reservation system is designed to be accessible to all users. </p>
  <p>If you require any assistance or accommodations, please contact us, and we'll be happy to assist you.</p>
  
</section>


  <script src="script.js"></script>
 

</body>
</html>
