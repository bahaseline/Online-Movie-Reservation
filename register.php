<?php
session_start();

// Connect to the database
include 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
/* Ελέγχους που θα μπορουσαμε να κάνουμε
$check_email = "SELECT email FROM signin WHERE email = ?";
    $check_username = "SELECT username FROM signin WHERE username = ?";
    $stmt_email = $conn->prepare($check_email);
    $stmt_username = $conn->prepare($check_username);
    $stmt_email->bind_param("s", $email);
    $stmt_username->bind_param("s", $username);
    $stmt_email->execute();
    $stmt_username->execute();
    $result_email = $stmt_email->get_result();
    $result_username = $stmt_username->get_result();
    if ($result_email->num_rows > 0) {
        echo "Email already exists.";
        exit();
    }
    if ($result_username->num_rows > 0) {
        echo "Username already exists.";
        exit();
    }
    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $insert_query = "INSERT INTO signin (id, name, email, phone, username, password) VALUES ('id', '$name', , ?, ?, ?)";
    $stmt = $conn->prepare($insert_query);
    $stmt->bind_param("sssss", $name, $email, $phone, $username, $hashed_password);
    $stmt->execute();
    echo "Registration successful!";   */
     
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="popup1.css">
</head>
<body>
    

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
</body>
</html>
