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