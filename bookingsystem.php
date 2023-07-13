<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Movie Reservation Form</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
    <section class="sub-header">

<nav>
    <a href="index.html"><img src="images/Seline Baha.png"></a>
    <div class="nav-links" id="navLinks">
    <!-------Creating the menu -------->     
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="booking.php">BOOKING</a></li>
            <li><a href="contact.php">CONTACT</a></li>
        </ul>
    </div>
    </section>
</nav>


<h1>Movie reservation form</h1>
<h2>Aπομένουν ελάχιστες θέσεις για κάθε ταίνια!! Προλάβετε!!</h2>
<!-- Δημιουργία της φόρμας για να μπορεί ο χρηστης να κάνει την κράτηση -->
<form method="post" action="bookingsystem.php"> <!-- Θα το εμφανίστει στην ίδια σελίδα και μετα το add θα 
φανούν οι πληροφορίες κράτησης του χρήστη κάτω -->
<table>
<tr>
  <!-- Προσθήκη από τον χρήστη την ημερομηνία,όνομα,επίθετο,email,τηλέφωνο, ενήλικες, παιδιά  και ταίνια -->
    <td>date</td>
    <td><input type="date" name="date" class="form-control"/></td>
</tr>
<tr>
    <td>first_name</td>
    <td><input type="text" name="first_name" class="form-control"/></td>
</tr>
<tr>
    <td>last_name</td>
    <td><input type="text" name="last_name" class="form-control"/></td>
</tr>
<tr>
    <td>email</td>
    <td><input type="text" name="email" class="form-control"/></td>
</tr>

<tr>
    <td>phone</td>
    <td><input type="text" name="phone" class="form-control"/></td>
</tr>

<tr>
    <td>adults</td>
    <td><input type="text" name="adults" class="form-control"/></td>
</tr>

<tr>
    <td>children</td>
    <td><input type="text" name="children" class="form-control"/></td>
</tr>

<tr>
  <!-- Δημιουργούμε ένα option για να μπορεί ο χρήστης να επιλέξει την ταινία που επιθυμεί -->
    <td>movie_pref</td>
    <td>
        <select name="movie_pref" class="form-control">
        <option value="">choose your moovie</option>
            <option value="Alladin(2019)">Alladin(2019)</option>
            <option value="Beauty and the Beast">Beauty and the Beast</option>
            <option value="The nightmare before Christmas">The nightmare before Christmas</option>
            <option value="Moana">Moana</option>
            <option value="The Jungle book (Disney)">The Jungle book (Disney)</option>
            <option value="Black Panther (2022)">Black Panther (2022)</option>
            <option value="The lion King">The lion King</option>
            <option value="Gardians Of The Galaxy">Gardians Of The Galaxy</option>
            <option value="Violent Night">Violent Night</option>
        </select>
    </td>
</tr>

<tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="add" class="btn btn-success btn-lg " action="reservation-success.php"/></td>
</tr>
</table>

<br /><br />

<?php
/* συνδέση δεδομέμωμ με την db.php και δημιουργία εγγραφής */
if (isset($_POST['submit']))
{	   
    include 'db.php';
    $date   = $_POST['date'];
    $first_name   = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $email = $_POST['email'];					
    $phone= $_POST['phone'];
    $adults   = $_POST['adults'];
    $children = $_POST['children'];
    $movie_pref = $_POST['movie_pref'];
    

    mysqli_query($conn,"INSERT INTO websitee ( id, date ,first_name,last_name, email, phone ,adults, children, movie_pref) 
                        VALUES ('id','$date', '$first_name', '$last_name', '$email', '$phone', '$adults', '$children', '$movie_pref' )"); 
}

/* Κάποιοι πιθάνοι έλεγχοι 
//'Ελεγχος ημερομηνίας υποβολής χρήστη
    if (strtotime($date) < time()) {
        $responses[] = 'Arrival date should be in the future';
    }

    //Το νούμερο κινήτου πρέπει να περιέχει μόνο νούμερα
    if (!preg_match('/^[0-9]{9,15}$/', $phone)) {
        $responses[] = 'Phone number is not valid';
    }

    if (!is_numeric($adults) || $adults <=1 ){
	$responses[] = 'Number of adults is not valid';
    }


    if (!is_numeric($children) || $children <= 0) {
        $responses[] = 'Number of children is not valid';
    }

    // Validate email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $responses[] = 'Email is not valid!';
    }

    // Το όνομα πρέπει να έχει μόνο γράμματα
    if (!preg_match('/^[a-zA-Z]+$/', $first_name)) {
        $responses[] = 'First name must contain only characters!';
    }

    // Το επίθετο πρέπει να έχει μόνο γράμματα
    if (!preg_match('/^[a-zA-Z]+$/', $last_name)) {
        $responses[] = 'Last name must contain only characters!';
    }

    // Άν υπάρχουν κάποια errors
    if (!$responses) {
        // Σύνδεση στο database
        $db_host = "localhost"; 
        $db_username = "root"; 
        $db_password = ""; 
        $db_name = "bookingsystemm"; 
 */

?>

</form>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


<?php  
$conn = mysqli_connect('localhost', 'root', '', 'college22');

if(!$conn)
{
  die('Could not connect: ' . mysqli_error());
}
?>
<!-- Ουσιαστικά εδώ εμφανίζεται η σελίδα στην όποια εμφανιζονται τα στοιχεία κρατησης του χρήστη αφού έχει κάνει
reservesion με μέθοδο post όπως κάτω στην φόρμα -->
<!DOCTYPE html>
<html>
<head>
    <title>Reservation Success</title>
</head>
<body>
<!-- Ευχαριστούμε τον χρήστη για την κράτηση -->
    <h1>Thank you for your reservation!</h1>
    <p>Your reservation has been received and is being processed.</p>
    <p>Here is a summary of your reservation:</p>
    <ul>
        <!-- Στέλνουμε με μέθοδο post τα στοιχεία που έχει τοποθετήσει ο χρήστης για την κράτηση του -->
        <li>Date: <?php echo $_POST['date']; ?></li>
        <li>First Name: <?php echo $_POST['first_name']; ?></li>
        <li>Last Name: <?php echo $_POST['last_name']; ?></li>
        <li>Email: <?php echo $_POST['email']; ?></li>
        <li>Phone: <?php echo $_POST['phone']; ?></li>
        <li>Adults: <?php echo $_POST['adults']; ?></li>
        <li>Children: <?php echo $_POST['children']; ?></li>
        <li>Movie Pref: <?php echo $_POST['movie_pref']; ?></li>
    </ul> 
</body>
</html>

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

</body>
</html>