<?php  
$conn = mysqli_connect('localhost', 'root', '', 'college22');

if(!$conn)
{
  die('Could not connect: ' . mysqli_error());
}
?>