<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="popup1.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="sub-header">

<nav>
    <a href="index.html"><img src="images/Seline Baha.png"></a>
    <div class="nav-links" id="navLinks">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="booking.php">BOOKING</a></li>
            <li><a href="contact.php">CONTACT</a></li>
        </ul>
    </div>
</section>
</nav>
<section>
    <div id="success" class="popup-overlay">
        <div class="log-popup">
            <h2>Success</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
                <p>Acoount is created Successfully.Now you can login your account :)</p>
                <a href="#popup1" class="btn-main .btn-main-primary  ">
                        Log In
                </a>
            </div>
        </div>
    </div>
    <div id="error" class="popup-overlay">
        <div class="log-popup">
            <h2>Error</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
                <p>Username or Email already exist :( Try Again...</p>
            </div>
        </div>
    </div>
    <div id="error1" class="popup-overlay">
        <div class="log-popup">
            <h2>Error</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
                <p>No Account Found :( Try Again...</p>
            </div>
        </div>
    </div>

    <header>
        <div class="container body ">
            <center>

            <div class="log-content">
                <form action="booking.php" method="post">
                    <i class="fa fa-user icon"></i>
                    <input type="text" placeholder="Username" name="username" class="log-input" required>
                    <br>
                    <i class="fa fa-lock icon"></i>
                    <input type="password" placeholder="Password" name="password" class="log-input" required>
                    <br>
                    <input type="submit" value="Log In" class="btn-logg">
                </form>
            </div>

            </center>
        </div>
    </header>
    </section>

    <?php
include("db.php");

// Check if the form was submitted
if (isset($_POST['username'], $_POST['password'])) {
    // Assign POST variables
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES);
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES);

    // Verify the username and password in the database
    $query = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
}
?>


<footer>
  <div class="container">
    <div class="row">
      <div class="col">
        <h4>Contact Us</h4>
        <ul>
          <li>Email: info@cineplus.com</li>
          <li>Phone:21 3333 0300</li>
          <li>Ελ. Βενιζέλου 14, Θεσσαλονίκη 546 24</li>
        </ul>
      </div>
      <div class="col-3">
        <h4>Follow Us</h4>
        <ul class="social-links">
          <li>
            <a href="#">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="col-3">
        <h4>Newsletter</h4>
        <p>Sign up for our newsletter to receive updates and special offers.</p>
        <form>
          <div>
            <input type="email" placeholder="Your email address">
          </div>
          <button type="submit">Subscribe</button>
        </form>
      </div>
    </div>
    <div class="copyright">
      <p>Copyright &copy;2022 CINEPLUS</p>
    </div>
  </div>
</footer>

</body>
</html>