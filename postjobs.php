<?php

$con=mysqli_connect("localhost","root","pop@123","derex");
// Check connection
if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$job_type = $_POST['job_type'];
$job_title = $_POST['job_title'];
$location = $_POST['location'];
$skills = $_POST['skills'];
$duration = $_POST['duration'];
$mandotary_skills = $_POST['mandotary_skills'];
$desire_skills = $_POST['desire_skills'];
$date = date("d/m/Y h:m:i");

?> 

<?php 

$sql="INSERT INTO jobs (job_type, job_title, location,skills,duration,mandotary_skills,desire_skills,created_date)
VALUES
('$job_type','$job_title','$location','$skills','$duration','$mandotary_skills','$desire_skills','$date')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }else{
    header('Location: jobs.php');
  }
?>