<?php 
$con=mysqli_connect("localhost","root","pop@123","derex");
// Check connection
if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>