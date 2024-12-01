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

<main class="faqq">
  <h1 class="hfaq">Frequently Asked Questions (FAQ)</h1>
<section class="sec1">
  <div class="box">
    <h4> How does BorrowResource work?</h4>
  </div>
  <div><p>BorrowResource is a comprehensive resource booking system designed to streamline access to essential resources within 
    academic departments or organizations. Users can browse available resources, check their availability in real-time, and make 
    reservations effortlessly.</p></div>
  <div class="box">
    <h4> How do I sign up for BorrowResource?</h4>
  </div>
  <div><p>To sign up for BorrowResource, click on the "Sign Up" button located on the homepage. Fill in the required information such
    your name, email address, and password. Once submitted, you will receive a verification email. Follow the instructions in the
    email to complete the registration process.</p></div>
   <div class="box">
     <h4> What are the user roles in BorrowResource? </h4>
  </div>
  <div class="text"><p1>BorrowResource has three main user roles:</p1>
    <p>- Administrators: They have full control over resource inventory management and reservation logs.</p>
    <p>- Faculty Members: They can book resources and manage reservations within their department.</p>
    <p>- Students: They have access to browse available resources and make reservations for academic purposes.</p></p></div>
 <div class="box">
    <h4> How do I book a resource on BorrowResource?</h4>
  </div>
  <div><p> To book a resource, log in to your BorrowResource account and navigate to the desired resource. Check its availability and
    select the date and time for your reservation. Click on the "Book Now" button and follow the prompts to confirm your booking.</p></p></div>
  <div class="box">
    <h4> Can I cancel a reservation on BorrowResource?</h4>
 </div>
  <div><p> Yes, you can cancel a reservation on BorrowResource. Simply log in to your account, go to your reservations, and find the
    reservation you wish to cancel. Click on the "Cancel" button and follow the prompts to confirm the cancellation.</p></p></div>
 <div class="box">
    <h4> How will I know if my reservation is confirmed?</h4>
 </div>
  <div><p>Upon successful reservation, you will receive a confirmation email containing the details of your booking. Additionally,
    you can view your reservations in your BorrowResource account dashboard.</p></p></div>
<div class="box">
    <h4> What happens if I forget my password?</h4>
 </div>
  <div><p>If you forget your password, click on the "Forgot Password" link on the login page. Enter your email address associated
  with your account, and a password reset link will be sent to your email. Follow the instructions in the email to reset 
   your password.</p></p></div>
<div class="box">
    <h4> Can I view my reservation history on BorrowResource?</h4>
 </div>
  <div><p>Yes, you can view your reservation history by logging in to your BorrowResource account and accessing the reservation
    history section in your dashboard. Here, you can see past and upcoming reservations.</p></p></div>
<div class="box">
    <h4> How does BorrowResource handle resource availability conflicts?</h4>
 </div>
  <div><p>BorrowResource employs a real-time availability tracking system. If a resource is already booked for a specific date and time,
    it will be marked as unavailable for new reservations during that period.</p></p></div>
<div class="box">
    <h4> How can I contact BorrowResource support for further assistance?</h4>
 </div>
  <div><p>If you have any further questions or require assistance, please feel free to contact BorrowResource support via email at
    @borrowresource.com or through the contact form on the website.</p></p></div>
</section>
</main>

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
