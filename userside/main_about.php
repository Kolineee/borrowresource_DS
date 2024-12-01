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
<br><br><br><br>
<section class="atsec">
  <div class="box3">
  <h2 class="texth1">Welcome to the Borrow Resource Reservation System, </h2>
  <h3>your one-stop solution for efficient and convenient room and equipment reservations within our college department.</h3>
</div>
<div class="box4">
  <br><br><h2>Our Mission</h2>
  <br>
  <p>At Borrow Resource Reservation System, we understand the importance of seamless logistics in facilitating effective teaching and learning experiences.</p>
  <p>Our mission is to simplify the reservation process, optimize resource allocation, and enhance the overall efficiency of academic activities within our department.</p>
</div>
<div class="box5">
  <br><br><h2>What We Offer</h2>
  <p><strong>Room Reservations:</strong> Our system allows you to easily reserve lecture rooms, auditorium, laboratory rooms and meeting spaces for various academic and administrative purposes.</p>
  <p><strong>Equipment Reservations</strong>: Need a projector, whiteboard, or other materials for your presentation or lecture? You can reserve them in advance through our platform.</p>
  <p><strong>Material Reservations:</strong> Beyond traditional equipment, we also facilitate reservations for specific materials and resources that may be needed within lecture rooms, ensuring that instructors and students have everything they need for effective teaching and learning.</p>
  <p><strong>Streamlined Process:</strong> Say goodbye to tedious paperwork and endless email chains. Our user-friendly interface simplifies the reservation process, allowing you to book rooms and equipment with just a few clicks. </p>
  <p><strong>Real-Time Availability:</strong> Check the availability of rooms and equipment in real-time, making it easier to plan your activities and avoid scheduling conflicts.</p>
  <p><strog>Customization:</strong> Tailor your reservations to suit your specific needs. Whether you're organizing a small group meeting or a large-scale event, our system offers flexibility and customization options to accommodate diverse requirements.</p>
  <p><strong>Efficiency:</strong> By centralizing the reservation process, we eliminate confusion and minimize administrative overhead, freeing up valuable time and resources for more important tasks.</p>
</div>
  <br><br><h2 style="margin-left: 20px; text-align: center;">Get in Touch</h2>
  <p>Have questions or need assistance? Our dedicated support team is here to help. Contact us at 0998062477 for personalized assistance or technical support.</p>
  <br><br>
  <p>Thank you for choosing the Borrow Resource Reservation System. We're committed to enhancing your academic experience through efficient reservation management.</p>
</section>

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

</body>
</html>
