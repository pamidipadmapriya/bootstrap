<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Post JOBs</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
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

    <div class="container">

       <form class="form-signin" role="form"  action="postjobs.php" method="POST">


          <h2 class="form-signin-heading">Post Jobs</h2>
          <input type="text" name="job_title" class="form-control" placeholder="Job Title" required autofocus>
          <input type="text" name="job_type" class="form-control" placeholder="Job Type" required>
          <input type="text" name="location" class="form-control" placeholder="Location" required>
          <input type="text" name="skills" class="form-control" placeholder="Skills" required >
          <input type="text" name="duration" class="form-control" placeholder="Duration" required>
          <input type="text" name="mandotary_skills" class="form-control" placeholder="Mandatory Skills/Experience" required>
          <input type="text" name="desire_skills" class="form-control" placeholder="Desirable Skills/Experience" required >
          <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>

      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>
