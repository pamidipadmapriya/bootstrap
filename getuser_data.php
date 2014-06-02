
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="dashboard.php"><img src="images/logo.png"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="admin.php">Go To Admin</a></li>

            <!--<li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>-->
          </ul>
         
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
        <div class="bs-example">
          <div class="panel-group" id="accordion">

         <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a href="registration.php" style="color:#2a6496">Registration</a>
            </h4>
          </div>
        </div>

         <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a href="getuser_data.php" style="color:#2a6496">Get User Info</a>
            </h4>
          </div>
        </div>

       <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a href="jobs.php" style="color:#2a6496">Post Jobs</a>
            </h4>
          </div>
        </div>

      </div>
      </div>
        </div>

    <div class="container-fluid">
      <div class="row">

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <?php 
      
      include('database.php');
        $result = mysqli_query($con, "SELECT * FROM  user");
      ?>         
                
          <h2 class="sub-header">User Data : 
          <?php echo $num_rows = mysqli_num_rows($result); ?></h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>User Id</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Phone Number</th>
                  <th>Email</th>
                  <th>Resume</th>
                  <th>Created Date</th>

                </tr>
              </thead>
              <tbody>
              <?php
              while($row = mysqli_fetch_array($result))
        		{?>
                <tr>
                  <td><?php echo $row['sno'];?></td>
                  <td><?php echo $row['firstname'];?></td>
                  <td><?php echo $row['lastname'];?></td>
                  <td><?php echo $row['phonenumber'];?></td>
                  <td><?php echo $row['email'];?></td>
                  <td><?php echo $row['resume'];?></td>
                  <td><?php echo $row['created_date'];?></td>
                </tr>
        		<?php }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>
