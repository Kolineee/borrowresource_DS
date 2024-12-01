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
          <span></span>
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
              <li><a href="account.php">Account</a></li>
              <li><a href="notification-privacy.php">Notification and Privacy</a></li>
              <li><a href="terms.php">Terms and Privacy Policy</a></li>
            
             
            </ul>
          </nav>
        </div>
      </div>

      <br><br>
      <div class="setting-info">
        <h1 style="margin-right: 150px;">Welcome to Settings</h1>
      <p>Welcome to the settings menu of our college department resource reservation system.</p> 
      <p>This is where you can customize and manage your account preferences to tailor your experience according to your needs. </p>
      <p>Take control of your account settings, notifications, privacy, and provide valuable feedback to help us improve our service.</p>
      
       <h2>Account Settings</h2>
      <p>Manage your account details, update your personal information, and modify your login credentials </p>
      <p>to ensure your account is up-to-date and secure.</p>
      
      <h2>Notification Preferences</h2>
      <p>Customize your notification settings to receive updates and alerts about your reservations, </p>
      <p>account activity, and important announcements.</p>
      
      <h2>Privacy</h2>
      <p>Review and adjust your privacy settings to control who can view your profile information </p>
      <p>and reservation history within the system.</p>


      <h2>Terms and Privacy Policy</h2>
      <p>Access our terms of service and privacy policy to understand your rights and responsibilities when using our system.</p>
      
      <h2>Feedback</h2>
      <p>Share your thoughts, suggestions, and concerns with us. Your feedback is invaluable and </p>
      <p>helps us enhance our system to better meet your needs.</p>
      
      <h4>Thank you for taking the time to explore the settings menu. If you have any questions </h4>
      <h4>or need assistance, feel free to reach out to our support team. Enjoy your reservation experience!</h4>
    </div>

    </section>
</body>
</html>
