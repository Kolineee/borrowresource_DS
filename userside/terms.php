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
              
            </ul>
          </nav>
          
        </div>
      </div>
      
<br><h1 style="margin-right: 200px;">Terms of Service:</h1><br><br>
<h3>Introduction:</h3>
<p>Welcome to the Borrow Resource Reservation System . </p>
<p>By accessing or using the System, you agree to comply with and be bound by the following terms and conditions.</p>

<h3>User Agreement:</h3>
<p>The System is intended for use by students, faculty, and staff of College of Computing Studies.</p>
 <p>Users agree to use the System responsibly and to adhere to all applicable policies and regulations.</p>

<h3>Reservation Process:</h3>
<p>Users may reserve resources through the System according to established procedures. </p>
<p>Reservations are subject to availability and may be canceled or modified as necessary.</p>

<h3>Resource Use:</h3>
<p>Users are responsible for the proper use and care of borrowed resources. </p>
<p>Any damage or loss incurred during the borrowing period will be the responsibility of the borrower.</p>

<h3>Privacy and Data Protection:</h3>
<p>We are committed to protecting your privacy.</p> 
 <p>Your personal information collected through the System will be used for reservation</p>
 <p>and administrative purposes only and will not be shared with third parties without your consent.</p>

<h3>Intellectual Property:</h3>
<p>Users retain ownership of any content uploaded or shared through the System.</p> 
<p>However, by using the System, users grant [College Department Name] a non-exclusive, </p>
<p>royalty-free license to use, reproduce, and distribute such content for the purpose of operating and improving the System.</p>

<h3>Dispute Resolution:</h3>
<p>Any disputes arising from the use of the System shall be resolved in accordance </p>
<p>with the policies and procedures of College of Computing Studies.</p>

<h3>Termination:</h3>
<p>College of Computing Studies reserves the right to terminate user access to the</p>
 <p>System at any time for violations of these terms or for any other reason deemed necessary.</p>

<h3>Changes to Terms:</h3>
<p>College of Computing Studies may revise these terms of service at</p>
 <p>any time without prior notice. By continuing to use the System after any </p>
 <p>such changes, you agree to be bound by the revised terms.</p>

<h3>Contact Information:</h3>
<p>For questions or concerns regarding these terms of service, </p>
<p>please contact College of Computing Studies at 09998989899.</p>

<h1>Privacy Policy:</h1>
<h3>Information Collection:</h3>
<p>The System collects personal information provided by users during the registration</p>
 <p>and reservation process, including but not limited to names, contact information, and student </p>
 <p>or employee IDs. Additionally, usage data such as log files and cookies may be collected automatically.</p>

<h3>Use of Information:</h3>
<p>Collected information is used to facilitate resource reservations, manage user accounts,</p>
 <p>and improve the functionality and user experience of the System.</p>

<h3>Data Sharing:</h3>
<p>User information will not be shared with third parties without user consent,</p>
 <p>except as required by law or as necessary to operate the System and fulfill user requests.</p>

<h3>Data Security:</h3>
<p>We employ industry-standard security measures to protect user data </p>
<p>from unauthorized access, alteration, or disclosure.</p>

<h3>Retention Policy:</h3>
<p>User data will be retained for as long as necessary to fulfill </p>
<p>the purposes outlined in this privacy policy, or as required by law.</p>

<h3>User Rights:</h3>
<p>Users have the right to access, update, or delete their personal information</p>
 <p>stored in the System. Requests for such actions can be submitted to College of Computing Studies at 09998989899.</p>

<h3>Cookies:</h3>
<p>The System may use cookies to enhance user experience and collect usage data. </p>
<p>Users may adjust their browser settings to refuse cookies, although this may affect the functionality of the System.</p>

<h3>Third-party Links:</h3>
<p>The System may contain links to third-party websites. </p>
<p>College of Computing Studies is not responsible for the privacy practices or content of these websites.</p>

<h3>Updates to Privacy Policy:</h3>
<p>This privacy policy may be updated periodically to reflect changes in our</p>
 <p> practices. Users will be notified of any significant changes to the policy.</p>

<h3>Contact Information:</h3>
<p>For questions or concerns regarding this privacy policy, please contact College of Computing Studies at 09998989899.</p>








</section>

</body>
</html>
