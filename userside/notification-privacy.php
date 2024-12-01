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



  <script src="script.js"></script>
 
</script>

<section class="setting-sec">
      <div class="setting-container">
        <div class="box" id="setting-b1">
          <nav class="navigation">
            <ul>
              <br><br><h2>Setting</h2>
              <li><a href="Settings.php">Setting</a></li>
              <li><a href="account.php">Account</a></li>
              <li><a href="notification-privacy.php">Notification and Privacy</a></li>
              <li><a href="terms.php">Terms and Privacy Policy</a></li>
                 
          </nav>   
        </div>
      </div>
      
    
      <section class="setting">
        <h2>Notification Settings</h2>
        <div class="setting-item">
          <h3>Notification Channels</h3>
          
          <p>Receive notification in:</p>
          <p>Email</p>
          <label class="switch">
            <input type="checkbox">
            <span class="slider"></span>
          </label>
           <p>Phone Number</p>
           <label class="switch">
            <input type="checkbox">
            <span class="slider"></span>
          </label>
        </div>
        <div class="setting-item">
          <h3>Notification Types</h3>
          <label class="switch">
            <input type="checkbox">
            <span class="slider"></span>
          </label>
          <p>Event reminderr</p>
          <label class="switch">
            <input type="checkbox">
            <span class="slider"></span>
          </label>
           <p>System update</p>
           <label class="switch">
            <input type="checkbox">
            <span class="slider"></span>
          </label>
        </div>
      
        <h2>Privacy Settings</h2>
        <div class="setting-item">
          <h3>Visibility Controls (Profile Visibility)</h3>

            <p> Private</p>
            <label class="switch">
              <input type="checkbox">
              <span class="slider"></span>
            </label>
        </div>
        
          
      </section>
      
   
</section>

</body>
</html>
