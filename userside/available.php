<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resource Management System</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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
      <a href="#"></a><button class="btn">Search</button></a>
      <a href="login.php" class="login-button">Login</a>
      <a href="signup.php" class="signup-button">Sign Up</a>
      <div class="menu-icon">
        <i class="ri-menu-line menu-icon"></i>
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

<section class="reservation">
  
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
    <td><button id="btn1" class="reserve-button" onclick="borrow('btn1', '7:00 AM - 9:00 AM')">Reserve</button></td>
  </tr>
  <tr>
    <td>9:00 AM - 11:00 AM</td>
    <td>Monday</td>
    <td>Projector 2</td>
    <td>Available</td>
    <td><button id="btn2" class="reserve-button" onclick="borrow('btn2', '9:00 AM - 11:00 AM')">Reserve</button></td>
  </tr>
  
  <tr>
    <td>3:00 PM - 5:00 PM</td>
    <td>Tuesday</td>
    <td>Lecture 1</td>
    <td>Available</td>
    <td><button id="btn3" class="reserve-button" onclick="borrow('btn3', '3:00 PM - 5:00 PM')">Reserve</button></td>
  </tr>
  <tr>
    <td>3:00 PM - 5:00 PM</td>
    <td>wednesday</td>
    <td>Lecture 1</td>
    <td>Available</td>
    <td><button id="btn3" class="reserve-button" onclick="borrow('btn3', '3:00 PM - 5:00 PM')">Reserve</button></td>
  </tr>
  <tr>
    <td>5:00 PM - 7:00 PM</td>
    <td>Wednesday</td>
    <td>Lecture 4</td>
    <td>Available</td>
    <td><button id="btn4" class="reserve-button" onclick="borrow('btn4', '5:00 PM - 7:00 PM')">Reserve</button></td>
  </tr>
  <td>7:00 AM - 9:00 AM</td>
  <td>Thursday</td>
    <td>HDMI</td>
    <td>Available</td>
    <td><button id="btn1" class="reserve-button" onclick="borrow('btn1', '7:00 AM - 9:00 AM')">Reserve</button></td>
  </tr>
  <tr>
    <td>9:00 AM - 11:00 AM</td>
    <td>Thursday</td>
    <td>Projector 2</td>
    <td>Available</td>
    <td><button id="btn2" class="reserve-button" onclick="borrow('btn2', '9:00 AM - 11:00 AM')">Reserve</button></td>
  </tr>
  <tr>
    <td>7:00 AM - 9:00 AM</td>
  <td>Friday</td>
    <td>HDMI</td>
    <td>Available</td>
    <td><button id="btn1" class="reserve-button" onclick="borrow('btn1', '7:00 AM - 9:00 AM')">Reserve</button></td>
  </tr>
  <tr>
    <td>9:00 AM - 11:00 AM</td>
    <td>Friday</td>
    <td>Projector 2</td>
    <td>Available</td>
    <td><button id="btn2" class="reserve-button" onclick="borrow('btn2', '9:00 AM - 11:00 AM')">Reserve</button></td>
  </tr>
  <tr>
    <td>9:00 AM - 11:00 AM</td>
    <td>Saturday</td>
    <td>Projector 2</td>
    <td>Available</td>
    <td><button id="btn2" class="reserve-button" onclick="borrow('btn2', '9:00 AM - 11:00 AM')">Reserve</button></td>
  </tr>
  <tr>
</tbody>
</table>


<div id="loginModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>You need to login to reserve a resource.</p>
    <button class="logButton" id="loginButton"><a href="./login.php">Login</a></button>
  </div>
</div>
<script src="script.js"></script>

</section>


  </body>
</html>
