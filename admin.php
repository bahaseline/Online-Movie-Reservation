<?php
/* Δημιουργία σύνδεσης με την db.php */
require("db.php");
$id = $_REQUEST['id'];

$result = mysqli_query($conn,"SELECT * FROM websitee WHERE id  = '$id'");
$row    = mysqli_fetch_array($result);

if(isset($_POST['save']))
{	
    include 'db.php';
    $date_save = $_POST['date'];
    $first_name_save   = $_POST['first_name'];
    $last_name_save  = $_POST['last_name'];
    $email_save = $_POST['email'];					
    $phone_save= $_POST['phone'];
    $adults_save= $_POST['adults'];
    $children_save= $_POST['children'];
    $movie_pref_save= $_POST['movie_pref'];
/* κάνουμε update τα στοιχεία της κράτησης */
    mysqli_query($conn,"UPDATE websitee SET date ='$date_save', 
                                           first_name ='$first_name_save',
                                           email ='$email_save',
                                           phone ='$phone_save'
                                           adults ='$adults_save'
                                           children ='$children_save'
                                           movie_pref ='$movie_pref_save'
                        WHERE id= '$id'")
    or die(mysql_error()); 

    echo "Saved!";

    header("Location: index.php");			
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
    
<head>
    <link rel="stylesheet" href="style.css">
    <title>phpLibrary</title>
</head>

<body>
<form method="post">
<table>
  <!-- Δημιουργία table για την εμφάνιση των δεδομένων -->
<tr>
    <td>date</td>
    <td><input type="text" name="date" value="<?php echo $date ?>"/></td>
</tr>
<tr>
    <td>first_name</td>
    <td><input type="text" name="first_name" value="<?php echo $first_name ?>"/></td>
</tr>
<tr>
    <td>last_name</td>
    <td><input type="text" name="last_name" value="<?php echo $last_name ?>"/></td>
</tr>
<tr>
    <td>email</td>
    <td><input type="text" name="email" value="<?php echo $email ?>"/></td>
</tr>
<tr>
    <td>phone</td>
    <td><input type="text" name="phone" value="<?php echo $phone ?>"/></td>
</tr>
<tr>
    <td>adults</td>
    <td><input type="text" name="adults" value="<?php echo $adults ?>"/></td>
</tr>

<tr>
    <td>children</td>
    <td><input type="text" name="children" value="<?php echo $children ?>"/></td>
</tr>

<tr>
    <td>movie pref</td>
    <td><input type="text" name="movie_pref" value="<?php echo $movie_pref ?>"/></td>
</tr>


<tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="save" value="save" /></td>
</tr>
</table>

<!-- To footer της ιστοσελίδας -->
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