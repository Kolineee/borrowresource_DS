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

</head>


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
 

  </body>
</html>
