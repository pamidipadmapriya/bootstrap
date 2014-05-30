<?php

$con=mysqli_connect("localhost","root","pop@123","copart_analytics");
// Check connection
if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $username = $_POST['email'];
  $password = $_POST['password'];

	echo $query = "SELECT * FROM users WHERE username = '".$username."' and password ='".$password."'";
  $data=mysqli_query($con,$query);
  $row = mysqli_fetch_array($data);
  if($row > 0)
  {
      $url = 'dashboard.php'; 
      header('Location: '.$url);
  }
  else
  {
     //not registerd/username&password incorrect
      $url = '/CopartAnalytics?msg=notvalid'; 
      header('Location: '.$url);
  }
?>