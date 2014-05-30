<?php

    include('../database.php');
    $result = mysqli_query($con, "SELECT * FROM  installationinfo where created_date BETWEEN ".$_POST['from']." AND ".$_POST['to']."");

   return $result;
   ?>
