<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CINEPLUS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&family=Playfair+Display:ital,wght@1,700&family=Poppins:wght@100;200;300;400;600;700&family=Raleway:ital,wght@1,200&display=swap"
     rel="stylesheet">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>

<!--- δημιουργία του header -->

    <section class="sub-header">

<nav>
    <!-- Δημιουργία του μένου επιλογής-->
    <a href="index.html"><img src="images/Seline Baha.png"></a>
    <div class="nav-links" id="navLinks">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="booking.php">BOOKING</a></li>
            <li><a href="contact.php">CONTACT</a></li>
        </ul>
    </div>

</nav>
<!-- Δημιουργούμε τα boxes όπου θα έχουμε τις ταίνιες και ο χρήστης θα μπορει να κάνει booking -->
       <h1>Select Your Movie</h1>

       <section class="features">
        <div class="feature-container">
<!-- πρώτο box  -->
            <div class="feature-box">
                <div class="imgf">
                    <img src="images/photo1.jpeg" alt="">
                </div>
                <div class="textf">
                    <!-- Εμφάνιση του button που σε μεταφέρει στην φόρμα κράτησης -->
                    <a href="bookingsystem.php" class="mainbtn">BOOK NOW</a>
                </div>
            </div>
<!-- δεύτερο box  -->
            <div class="feature-box">
                <div class="imgf">
                    <img src="images/photo2.jpeg" alt="">
                </div>
                <div class="textf">
                    <!-- Εμφάνιση του button που σε μεταφέρει στην φόρμα κράτησης -->
                    <a href="bookingsystem.php" class="mainbtn">BOOK NOW</a>
                </div>
            </div>
<!-- τρίτο box  -->
            <div class="feature-box">
                <div class="imgf">
                    <img src="images/photo3.jpeg" alt="">
                </div>
                <div class="textf">
                    <!-- Εμφάνιση του button που σε μεταφέρει στην φόρμα κράτησης -->
                    <a href="bookingsystem.php" class="mainbtn">BOOK NOW</a>
                </div>
            </div>


        </div>

    </section>
<!-- Καινούργιο section για τα υπόλοιπα boxes -->
    <section class="features">
        <div class="feature-container">
<!-- 4ο box  -->
            <div class="feature-box">
                <div class="imgf">
                    <img src="images/photo4.jpeg" alt="">
                </div>
                <div class="textf">
                    <!-- Εμφάνιση του button που σε μεταφέρει στην φόρμα κράτησης -->
                    <a href="bookingsystem.php" class="mainbtn">BOOK NOW</a>
                </div>
            </div>
<!-- 5ο box  -->
            <div class="feature-box">
                <div class="imgf">
                    <img src="images/photo5.jpeg" alt="">
                </div>
                <div class="textf">
                    <!-- Εμφάνιση του button που σε μεταφέρει στην φόρμα κράτησης -->
                    <a href="bookingsystem.php" class="mainbtn">BOOK NOW</a>
                </div>
            </div>
<!-- 6ο box  -->
            <div class="feature-box">
                <div class="imgf">
                    <img src="images/photo11.jpeg" alt="">
                </div>
                <div class="textf">
                    <!-- Εμφάνιση του button που σε μεταφέρει στην φόρμα κράτησης -->
                    <a href="bookingsystem.php" class="mainbtn">BOOK NOW</a>
                </div>
            </div>

        

        </div>
<!-- Καινούργιο section για τα υπόλοιπα boxes -->
    </section>

    <section class="features">
        <div class="feature-container">
<!-- 7ο box  -->
            <div class="feature-box">
                <div class="imgf">
                    <img src="images/photo7.jpeg" alt="">
                </div>
                <div class="textf">
                    <!-- Εμφάνιση του button που σε μεταφέρει στην φόρμα κράτησης -->
                    <a href="bookingsystem.php" class="mainbtn">BOOK NOW</a>
                </div>
            </div>
<!-- 8ο box  -->
            <div class="feature-box">
                <div class="imgf">
                    <img src="images/photo8.png" alt="">
                </div>
                <div class="textf">
                    <!-- Εμφάνιση του button που σε μεταφέρει στην φόρμα κράτησης -->
                    <a href="bookingsystem.php" class="mainbtn">BOOK NOW</a>
                </div>
            </div>
<!-- 9ο box  -->
            <div class="feature-box">
                <div class="imgf">
                    <img src="images/photo9.jpeg" alt="">
                </div>
                <div class="textf">
                    <!-- Εμφάνιση του button που σε μεταφέρει στην φόρμα κράτησης -->
                    <a href="bookingsystem.php" class="mainbtn">BOOK NOW</a>
                </div>
            </div>

        

        </div>

    </section>
    <!-- Tο footer της ιστοδελίδας -->
    <footer>
  <div class="container">
    <div class="row">
      <div class="col">
        <!-- class για την επεξεργασία περιεχομενού δεδομένων  -->
        <h4>Contact Us</h4>
        <ul>
          <li>Email: info@cineplus.com</li>
          <li>Phone:21 3333 0300</li>
          <li>Ελ. Βενιζέλου 14, Θεσσαλονίκη 546 24</li>
        </ul>
      </div>
      <!-- class για την τοποθέτηση social media -->
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
        <!-- class για την επξεργασία των newsletters -->
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
    <!-- class για την επεξερασία του copyright -->
    <div class="copyright">
      <p>Copyright &copy;2022 CINEPLUS</p>
    </div>
  </div>
</footer>
</body>
</html>

