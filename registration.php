
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


       <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a href="docs/getjobs.php" style="color:#2a6496">Get Post Jobs</a>
            </h4>
          </div>
        </div>

      </div>
      </div>
        </div>

    <div class="container">

       <form class="form-signin" role="form"  enctype="multipart/form-data" action="upload.php" method="POST">
           <h4 class="form-signin-heading">
             <?php 
             /*if($_REQUEST['msg'] !=""){
              if($_REQUEST['msg'] == "success")
                {echo "Thank you for applying to our job posting! Your resume has been forwarded for review.
If we consider you to be a potential match for this role or any of our open job requirements, then one of our technical recruiters will contact you to discuss in greater detail. Otherwise we will keep your information in our internal database for future job requirements.";}
              else if($_REQUEST['msg'] =="fail")
                {echo "Resume not Uploaded Failure";}
              }*/
            ?></h4>

          <h2 class="form-signin-heading">Form</h2>
          <input type="text" name="firstname" class="form-control" placeholder="FirstName" required>
          <input type="text" name="lastname" class="form-control" placeholder="LastName" required>
          <input type="text" name="phonenumber" class="form-control" placeholder="Phone" required>
          <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
          <input type="hidden" name="MAX_FILE_SIZE" value="512000000000000000000" />
          <input type="file" name="userfile" class="form-control" placeholder="Password" required>
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
