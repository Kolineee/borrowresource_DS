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


  <script src="script.js"></script>
 
</script>

<section class="setting-sec1">
      <div class="setting-container">
        <div class="box" id="setting-b1">
          <nav class="navigation">
            <ul>
              <br><br><h2>Setting</h2>
              <li><a href="Settings.php">Setting</a></li>
              <li><a href="account.php">Account</a></li>
              <li><a href="notification-privacy.php">Notification and Privacy</a></li>
              <li><a href="privacy.php">Privacy</a></li>       
               <li><a href="terms.php">Terms and Privacy Policy</a></li>
              
            </ul>
          </nav>
        </div>
      </div>

      <section class="sec-account-setting">
        <img src="pfp.png" id="pfp-user-profile">
        <div class="content">
          <br>
          <div class="fname"><strong>First Name: </strong> Calista</div><br>
          <div class="lname"><strong>Last Name: </strong>Perez</div><br>
            <div class="uname"><strong>Username:</strong> Calie </div><br>
            <div class="role"><strong> Role:</strong> Student</div><br>
            <div class="snumber"><strong>Student number:</strong> 202205480</div><br>
            <div class="course"><strong>Course:</strong> Bachelor of Science in Computer Science</div><br>
            <div class="y&s"><strong>Year & Section:</strong> 2nd year C</div> 
            <p><br></p>   
            <button class="edit-account-btn" onclick="window.location.href='editprofile.php'">Edit Details</button> 
            <p><br></p>     
        </setting>   

<section class="setting-sec2">
  <h2>Password Management</h2><br>
  <div class="changepass">
    <h3>Saved Account</h3>
    <p>No accounts currently saved</p>
    <button class="add-account-button" onclick="window.location.href='login.php'">ADD</button>
    <p>Change password?</p>
    <button class="changepass-button" onclick="window.location.href='changepass.php'">YES</button>
  </div>
</section>
</body>
</html>
