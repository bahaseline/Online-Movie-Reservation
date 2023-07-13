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
     <link rel="stylesheet" href="popup1.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

 <!-------Creating the first section which include the menu -------->

    <section class="header">

<nav>
    <a href="index.html"><img src="images/Seline Baha.png"></a>
    <div class="nav-links" id="navLinks">
    <!-------Creating the menu -------->     
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="booking.php">BOOKING</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="login.php">LOG IN</a></li>
        </ul>
    </div>

</nav>

 <!-------Creating a div for the first page adding an image   -------->
<div class="text-box">
    <h1>Find Your Movie Now</h1>
    <p>An eight-year-old troublemaker,  <br> mistakenly left home alone <br> 
    ,must defend his home against a pair <br> of burglars on Christmas eve. </p>
    <p> </p>
    <a href="https://www.netflix.com/search?q=%CE%BC%CE%BF%CE%BD%CE%BF%CF%83%20%CF%83%CF%84%CE%BF%20%CF%83%CF%80%CE%B9%CF%84%CE%B9&jbv=70052697" class="hero-btn1">WATCH NOW</a>
</div>
    </section>




    <section>
      <!-- Δημιουργία του login  -->
    <div id="popup1" class="popup-overlay">
        <div class="log-popup">
            <h2>Log In</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
              <!-- Αφού ο χρήστης συνδεθεί θα τον μεταφέρει κατευθείαν στην ιστοσελίδα  οπου θα επιλέξει την ταινία
              την οποία επυθυμεί να δει -->
                <form action="booking.php" method="post">
                    <i class="fa fa-user icon"></i>
                    <!-- Προσθέτει username -->
                    <input type="text" placeholder="Username" name="username" class="log-input" required>
                    <br>
                    <i class="fa fa-lock icon"></i>
                    <!-- Προσθέτει τον κωδικό -->
                    <input type="password" placeholder="Password" name="password" class="log-input" required>
                    <br>
                    <!-- Και η σύνδεση μεσω του button -->
                    <input type="submit" value="Log In" class="btn-logg">
                </form>
            </div>
        </div>
    </div>


<!-- Ο χρήστης θα μπορεί να κάνει sign up -->
    <div id="popup2" class="popup-overlay">
        <div class="log-popup">
            <h2>Sign Up</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
              <!-- Αφού συνδεθεί θα μπορέσει να πάει να συνδεθεί στο login -->
                <form action="login.php" method="post">
                    <i class="fa fa-user icon"></i>
                    <!-- Τοποθετεί όνομα -->
                    <input type="text" placeholder="Enter your name" name="name" class="log-input" required>
                    <br>
                    <!-- Τοποθετεί email -->
                    <i class="fa fa-envelope icon"></i>
                    <input type="email" placeholder="Enter your email" name="email" class="log-input" required>
                    <br>
                    <!-- Τοποθετεί username -->
                    <i class="fa fa-link icon"></i>
                    <input type="text" placeholder="Enter username" name="username" class="log-input" required>
                    <br>
                    <!-- Τοποθετεί κωδικό  -->
                    <i class="fa fa-lock icon"></i>
                    <input type="password" placeholder="Password" name="password" class="log-input" required>
                    <br>
                    <!-- Κάνει αποδοχή στους όρους χρήσης -->
                    <input type="checkbox" name="chkbox" required> I agree to Terms and Conditions
                    <br>
                    <!-- Και τέλος κάνει sign up -->
                    <input type="submit" value="Sign Up" name="signup-btn" class="btn-log">
                </form>
            </div>
        </div>
    </div>

    <div id="success" class="popup-overlay">
        <div class="log-popup">
          <!-- Σε περίπτωση που γίνει επιτυχείς σύνδεση θα εμφανίσει αυτό -->
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
    <!-- Σε περίπτωση που δεν γίνει επιτυχείς σύνδεση θα εμφανίζει αυτό -->
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
      <!-- Εδώ προσθέτουμε το button όπου γίνετε το login -->
        <div class="container body ">
            <center>

                <div class="container">
                    <a href="#popup1" class="btn-main btn-main-primary">
                        Log In
                    </a>
                    <!-- Εδώ το button πολυ κάνει register -->
                    <a href="#popup2" class="btn-main">
                        Sign Up
                    </a>
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



<!-- Γίνετε προσθήκη ενός slideshow από w3-school  -->
<h2 class="w3-center">NEW COLLECION</h2>

<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="images/photo17.jpg" style="width:200%">
  <img class="mySlides" src="images/photo18.jpg" style="width:200%">
  <img class="mySlides" src="images/photo19.jpg" style="width:200%">
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

 <!-------The Most Famous Movies -------->
    <section class="movie">
     <h1>The Most Famous Movies</h1>
     <p>

     </p>

</div>

    <div class="row">
        <div class="movie-col">
            <img src="images/photo1.jpeg" >
            <h3>Aladdin(2019)</h3>
            <p>Aladdin is a 2019 American musical fantasy film directed by Guy Ritchie from a screenplay 
                he co-wrote with John August. Co-produced by Walt Disney Pictures and Rideback, 
                it is a live-action adaptation of Disney's 1992 animated film of the same name, itself based 
                on the eponymous story from One Thousand and One Nights. The film stars Will Smith with Mena Massoud, 
                Naomi Scott, Marwan Kenzari, Navid Negahban, Nasim Pedrad and Billy Magnussen in supporting roles.
                 The plot follows Aladdin, a street urchin, as he falls in 
                love with Princess Jasmine, befriends a wish-granting genie, and battles the wicked sorcerer Jafar.</p>
         </div>

         <div class="movie-col">
            <img src="images/photo2.jpeg" >
            <h3>Beauty And The Beast </h3>
            <p>Beauty and the Beast is a 2017 American musical romantic fantasy film directed by Bill Condon from 
                a screenplay by Stephen Chbosky and Evan Spiliotopoulos. Co-produced by Walt Disney Pictures and 
                Mandeville Films, the film is a live action adaptation of Disney's 1991 animated film of the same name, 
                itself an adaptation of Jeanne-Marie Leprince de Beaumont's 1756 version of the fairy tale.[8] Led by Emma 
                Watson and Dan Stevens as the eponymous Belle and the Beast, the film features an ensemble and choir cast 
                including Luke Evans, Kevin Kline,
                 Josh Gad, Ewan McGregor, Stanley Tucci, Audra McDonald, Gugu Mbatha-Raw, Ian McKellen, and Emma Thompson</p>
            
        </div>

        <div class="movie-col">
            <img src="images/photo7.jpeg" >
            <h3>Gyros(Greece)</h3>
            <p>The Lion King is a 2019 American musical drama film directed and produced by Jon Favreau, written by
                 Jeff Nathanson, and produced by Walt Disney Pictures and Fairview Entertainment. It is a photorealistic 
                 computer-animated remake of Disney's traditionally animated 1994 film of the same name. The film stars the 
                 voices of Donald Glover, Seth Rogen, Chiwetel Ejiofor, Alfre Woodard, Billy Eichner, John Kani, John Oliver,
                  Florence Kasumba, Eric André, Keegan-Michael Key, JD McCrary, Shahadi Wright Joseph, and Beyoncé 
                  Knowles-Carter, as well as James Earl Jones reprising his role from the original film. The plot follows
                   Simba, a young lion who must embrace his role as the 
                rightful king of his homeland following the murder of his father, Mufasa, at the hands of his uncle, Scar.</p>
            
        </div>
    </div> 
 </section>


 <!------- Trending right now  -------->

 <section class="movie">
     <h1>Trending Right Now </h1>
     <p>

     </p>

    <div class="row">
        <div class="movie-col">
            <img src="images/photo8.png" >
            <h3>Gardians Of The Galaxy</h3>
            <p>Guardians of the Galaxy (retroactively referred to as Guardians of the Galaxy Vol. 1
                 is a 2014 American superhero film based on the Marvel Comics superhero team of the same name. 
                 Produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures, it is the 10th
                  film in the Marvel Cinematic Universe (MCU). Directed by James Gunn, who wrote the screenplay with
                   Nicole Perlman, it features an ensemble cast including Chris Pratt, Zoe Saldaña, Dave Bautista, 
                   Vin Diesel, and Bradley Cooper as the titular Guardians, along with Lee Pace, Michael Rooker,
                    Karen Gillan, Djimon Hounsou, John C. Reilly, Glenn Close, and Benicio del Toro. In the film,
                 Peter Quill and a group of extraterrestrial criminals go on the run after stealing a powerful artifact.</p>
         </div>

         <div class="movie-col">
            <img src="images/photo9.jpeg" >
            <h3>Violent Night(2022) </h3>
            <p>Violent Night is a 2022 American Christmas action comedy film directed by Tommy Wirkola and written
                 by Pat Casey and Josh Miller. It follows Santa Claus (portrayed by David Harbour) as he fights
                  mercenaries who have taken a wealthy family hostage in their home. The film also stars John Leguizamo,
                 Alex Hassell, Alexis Louder, Edi Patterson, Cam Gigandet, Leah Brady, and Beverly D'Angelo.</p>
            
        </div>

        <div class="movie-col">
            <img src="images/photo10.jpeg" >
            <h3>Avatar(2022)</h3>
            <p>Avatar: The Way of Water is a 2022 American epic science fiction film directed by James Cameron, 
                who co-wrote the screenplay with Rick Jaffa and Amanda Silver from a story the trio wrote with 
                Josh Friedman and Shane Salerno. Produced by Lightstorm Entertainment and TSG Entertainment and
                 distributed by 20th Century Studios, it is the sequel to Avatar (2009) and the second installment 
                 in the Avatar film series. Cast members Sam Worthington, Zoe Saldaña, Stephen Lang, Joel David Moore, 
                 CCH Pounder, Giovanni Ribisi, Dileep Rao, and Matt Gerald reprise their roles from the original film, 
                 with Sigourney Weaver returning in an additional role. New cast members include Kate Winslet, Cliff Curtis,
                  Edie Falco, and Jemaine Clement. In the film, Na'vi Jake Sully (Worthington) 
                and his family, under renewed human threat, seek refuge with the Metkayina clan of Pandora.</p>
            
        </div>
    </div> 
 </section>



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
