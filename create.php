<?php
$con=mysqli_connect("localhost","root","pop@123","Popcorn_Analytics");
// Check connection
if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Create table
$sql="CREATE TABLE IF NOT EXISTS Persons(FirstName CHAR(30),LastName CHAR(30),AvgTime INT)";

// Execute query
if (mysqli_query($con,$sql))
  {
    echo "Table persons created successfully";
  }
else
  {
    echo "Error creating table: " . mysqli_error($con);
  }
?>


<?php 
$sql="INSERT INTO Persons (FirstName, LastName, AvgTime)
VALUES
('Priya','Pamidi','10')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";
?>