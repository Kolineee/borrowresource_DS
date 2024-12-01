<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resource Management System</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"><link rel="stylesheet" type="text/css" href="styles.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

  <header>
  <div class="navbar-container">
      <div class="menu-toggle" onclick="toggleMenu()">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
  <ul class="navbar">
    <li><a href="home.php">Home</a></li>
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
        <a href="#" class="sub-menu-link">
          <img src="./user.png" alt="user">
          <p>Profile</p>
          <span>></span>
        </a>
        <a href="#" class="sub-menu-link">
          <img src="./settings.png" alt="settings">
          <p>Settings</p>
          <span>></span>
        </a>
        <a href="#" class="sub-menu-link">
          <img src="./help-&-Support.png" alt="h&s">
          <p>Help & Support</p>
          <span>></span>
        </a>
        <a href="#" class="sub-menu-link">
          <img src="./logout.png" alt="Logout">
          <p>Logout</p>
          <span>></span>
        </a>
      </div>
    </div>
  </div>
</header>
<body class="lgreen"></body>

<div class="Cbox">
  <h2 class="textc">Contact Us</h2>
  </div>
<div class="contact_container">
  <div class="contact-section">
    <p class="green">Have any questions? Send us a message!</p>
    <form class="form" action="#" method="post">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Full name" required>
      </div>

      <div class="form-group">
        <label for="telephone">Telephone</label>
        <input type="tel" id="telephone" name="telephone" placeholder="Telephone" required>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="E-mail address" required>
      </div>

      <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject" placeholder="Subject" required>
      </div>

      <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Message" required></textarea>
      </div>

      <div class="form-group">
        <input type="checkbox" id="agree" name="agree" required>
        <label for="agree">By Clicking Submit, you agree to our Customer Care Privacy Policy</label>
      </div>

      <input type="submit" value="Submit" class="submit-btn">
    </form>
  </div>

  <div class="contact-details">
    <h3>Contact Details</h3>
    <p>If you have any questions, feedback, or need support, please feel free to contact us:</p>
    <p>Email: borrowresource@email.com</p>
    <p>Phone: +1234567890</p>
    <p>By contacting us, you agree to our Customer Care Privacy Policy.</p>
  </div>

  <div class="social-media">
    <h3>Follow us!</h3>
    <p>Your Social Media Platform</p>
    <p>@BorrowResource</p>
    <p>@ResourceResevation</p>
  
  </div>
</div>
<footer class="footer">
  
  <div class="footer-section">
      <h3>Contact Information</h3>
      <p>Email: BorrowResource@gmail.com</p>
      <p>Phone: +123456789</p>
  </div>
  

  <div class="footer-section">
      <h3>Social Media</h3>
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-linkedin"></i></a>
    
  </div>
  

  <div class="footer-section">
      <h3>Navigation</h3>
      <a href="home.php">Home</a> | 
      <a href="main_about.php">About</a> | 
      <a href="main_contact.php">Contact</a> | 
      <a href="main_faq.php">FAQ</a>
  </div>
  
  <div class="copyright">
      <p>&copy; 2024 All Rights Reserved, BorrowResource</p>
  </div>
  <br>
 
  
</footer>


  <script src="script.js"></script>

</script>
</body>
</html>
