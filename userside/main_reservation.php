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
<section class="projector-section">
<div class="containerr"><div class="searchh-bar"><div class="dropdown3">
  <button class="dropdown3-btn"><span id="dropdownText">Days</span> <i class="fa fa-caret-down"></i></button>
  <div class="dropdown3-content">
    <a href="#" class="dropdown3-item" onclick="changeSelection('Projector 1')">Projector 1</a>
    <a href="#" class="dropdown3-item" onclick="changeSelection('Projector 2')">Projector 2</a>
    <a href="#" class="dropdown3-item" onclick="changeSelection('HDMI')">HDMI</a>
    <a href="#" class="dropdown3-item" onclick="changeSelection('TV')">TV</a>
    <a href="#" class="dropdown3-item" onclick="changeSelection('Whiteboard')">Whiteboard</a>
    <a href="#" class="dropdown3-item" onclick="changeSelection('Lab 1')">Lab 1</a>
    <a href="#" class="dropdown3-item" onclick="changeSelection('Lab 2')">Lab 2</a>
    <a href="#" class="dropdown3-item" onclick="changeSelection('Lec 1')">Lec 1</a>
    <a href="#" class="dropdown3-item" onclick="changeSelection('Lec 2')">Lec 2</a>
    <a href="#" class="dropdown3-item" onclick="changeSelection('Lec 3')">Lec 3</a>
    <a href="#" class="dropdown3-item" onclick="changeSelection('Lec 4')">Lec 4</a>
    <a href="#" class="dropdown3-item" onclick="changeSelection('Auditorium')">Auditorium</a>
    <a href="#" class="dropdown3-item" onclick="changeSelection('Monday')">Monday</a>
    <a href="#" class="dropdown3-item" onclick="changeSelection('Tuesday')">Tuesday</a>
    <a href="#" class="dropdown3-item" onclick="changeSelection('Wednesday')">Wednesday</a>
    <a href="#" class="dropdown3-item" onclick="changeSelection('Thursday')">Thursday</a>
    <a href="#" class="dropdown3-item" onclick="changeSelection('Friday')">Friday</a>
    <a href="#" class="dropdown3-item" onclick="changeSelection('Saturday')">Saturday</a>
            </div>
        </div>
        <input type="text" class="searchh-input" placeholder="Search...">
        <button class="searchh-bttn"><i class="fa fa-search"></i></button>
    </div>
</div>

<section class="projector-section">
  
  <h2>Availability - Monday</h2>

<table>
<thead>
  <tr>
    <th>Time Slot</th>
    <th>Day</th>
    <th>Resources</th>
    <th>Availability</th> 
    <th>Action</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>7:00 AM - 9:00 AM</td>
    <td>Monday</td>
    <td>HDMI</td>
    <td>Available</td>
    <td><button id="btn1" class="reserve-button" onclick="reserve('btn1', '7:00 AM - 9:00 AM')">Reserve</button></td>
      <button id="cancel1" class="cancel-button" onclick="cancelReservation('btn1', '7:00 AM - 9:00 AM')">Cancel</button>
  </tr>
  <tr>
    <td>1:00 PM - 3:00 PM</td>
    <td>Tuesday</td>
    <td>TV</td>
    <td>Not Available</td>
    <td class="na-text">N/A</td>
  </tr>
  <tr>
    <td>9:00 AM - 11:00 AM</td>
    <td>Monday</td>
    <td>Projector 2</td>
    <td>Available</td>
    <td><button id="btn2" class="reserve-button" onclick="reserve('btn2', '9:00 AM - 11:00 AM')">Reserve</button></td>
    <button id="cancel2" class="cancel-button" onclick="cancelReservation('btn2', '9:00 AM - 11:00 AM')">Cancel</button>
  </tr>
  <tr>
    <td>11:00 AM - 1:00 PM</td>
    <td>Monday</td>
    <td>HDMI</td>
    <td>Not Available</td>
    <td class="na-text">N/A</td>
  </tr>
  <tr>
    <td>1:00 PM - 3:00 PM</td>
    <td>Tuesday</td>
    <td>Projector 1</td>
    <td>Not Available</td>
    <td class="na-text">N/A</td>
  </tr>
  <tr>
    <td>1:00 PM - 3:00 PM</td>
    <td>Saturday</td>
    <td>Projector 1</td>
    <td>Not Available</td>
    <td class="na-text">N/A</td>
  </tr>
  <tr>
    <td>3:00 PM - 5:00 PM</td>
    <td>Tuesday</td>
    <td>Lecture 1</td>
    <td>Available</td>
    <td><button id="btn3" class="reserve-button" onclick="reserve('btn3', '3:00 PM - 5:00 PM')">Reserve</button></td>
    <button id="cancel3" class="cancel-button" onclick="cancelReservation('btn3', '3:00 PM - 5:00 PM')">Cancel</button>
  </tr>
  <tr>
    <td>5:00 PM - 7:00 PM</td>
    <td>Wednesday</td>
    <td>Lecture 4</td>
    <td>Available</td>
    <td><button id="btn4" class="reserve-button" onclick="reserve('btn4', '5:00 PM - 7:00 PM')">Reserve</button></td>
    <button id="cancel4" class="cancel-button" onclick="cancelReservation('btn4', '5:00 PM - 7:00 PM')">Cancel</button>
  </tr>
  <tr>
    <td>1:00 PM - 3:00 PM</td>
    <td>Tuesday</td>
    <td>Lec 2</td>
    <td>Not Available</td>
    <td class="na-text">N/A</td>
  </tr>
  <td>7:00 AM - 9:00 AM</td>
  <td>Thursday</td>
    <td>HDMI</td>
    <td>Available</td>
    <td><button id="btn5" class="reserve-button" onclick="reserve('btn5', '7:00 AM - 9:00 AM')">Reserve</button></td>
    <button id="cancel5" class="cancel-button" onclick="cancelReservation('btn5', '7:00 AM - 9:00 AM')">Cancel</button>
  </tr>
  <tr>
    <td>9:00 AM - 11:00 AM</td>
    <td>Thursday</td>
    <td>Projector 2</td>
    <td>Available</td>
    <td><button id="btn6" class="reserve-button" onclick="reserve('btn6', '9:00 AM - 11:00 AM')">Reserve</button></td>
    <button id="cancel6" class="cancel-button" onclick="cancelReservation('btn6', '9:00 AM - 11:00 AM')">Cancel</button>
  </tr>
  <tr>
    <td>9:00 AM - 11:00 AM</td>
    <td>Saturday</td>
    <td>Projector 2</td>
    <td>Available</td>
    <td><button id="btn7" class="reserve-button" onclick="reserve('btn7', '9:00 AM - 11:00 AM')">Reserve</button></td>
    <button id="cancel7" class="cancel-button" onclick="cancelReservation('btn7', '9:00 AM - 11:00 AM')">Cancel</button>
  </tr>
  <tr>
    <td>11:00 AM - 1:00 PM</td>
    <td>saturday</td>
    <td>HDMI</td>
    <td>Not Available</td>
    <td class="na-text">N/A</td>
  </tr>
  <tr>
</tbody>
</table>

<div id="notification" class="notification">
<h3>Reservation Successful</h3>
<p id="reserved-time"></p>
</div>
<script src="script.js"></script>

</section>
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
  
</footer>


</body>
</html>
