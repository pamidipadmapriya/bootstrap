<?php

$con=mysqli_connect("localhost","root","pop@123","derex");
// Check connection
if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$uploaddir = 'uploads/';
echo $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$uploadfile = $uploadfile . date('d/m/y');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$resume = $_FILES['userfile']['name'];
$date = date("d/m/Y h:m:i");
  


//echo "<p>";

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
header('Location: registration.php?msg=success');
//echo "File is valid, and was successfully uploaded.\n";
} else {
header('Location: registration.php?msg=fail');
  // echo "Upload failed";
}

/*echo "</p>";
echo '<pre>';
echo 'Here is some more debugging info:';
print_r($_FILES);
print "</pre>";*/

?> 

<?php 

$sql="INSERT INTO user (firstname, lastname, phonenumber,email,resume,created_date)
VALUES
('$firstname','$lastname','$phonenumber','$email','$resume','$date')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";
?>