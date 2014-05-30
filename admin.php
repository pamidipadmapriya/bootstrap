
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Admin Dashboard</title>

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
          <a class="navbar-brand" href="dashboard.php">Copart Analytics</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="dashboard.php">Dashboard</a></li>
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
              <a href="docs/installationreport.php" style="color:#2a6496">InstallationInfo Report</a>
            </h4>
          </div>
        </div>

         <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a href="docs/stepReport.php" style="color:#2a6496">Step Info Report</a>
            </h4>
          </div>
        </div>

         <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a href="docs/avgReport.php" style="color:#2a6496">Step Average Report</a>
            </h4>
          </div>
        </div>

         <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a href="docs/uploadreport.php" style="color:#2a6496">Upload Report</a>
            </h4>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="color:#2a6496">Usage by Feature</a>
            </h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body">
            <ul class="nav nav-list" >
              <li><a href="docs/searchReport.php">Search Report</a></li>
              <li><a href="docs/sortReport.php">Sort Report</a></li>
              <li><a href="docs/filterReport.php">Filter Report</a></li>
              <li><a href="docs/logoutReport.php">Logout Report</a></li>
              <li><a href="docs/cameraReport.php">Camera Used Report</a></li>
              <li><a href="docs/photosReport.php">Photos Deleted Report</a></li>
              <li><a href="docs/videosReport.php">Videos Deleted Report</a></li>
              <li><a href="docs/appkickedReport.php">App Kicked Report</a></li>
          </ul>
            </div>
          </div>
        </div>
      </div>

      <h4 class="panel-title">
        <a href="" style="color:#2a6496;font-weight:bold">GRAPH REPORTS</a>
      </h4>

      <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a href="docs/baravgReport.php" style="color:#2a6496">Step Report Bar Chart</a>
            </h4>
          </div>
        </div>
      </div>


        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>
          
          <div class="table-responsive">
              <div class="jumbotron">

              <p class="lead">Welcome  to Copart Analytics</p>
                <p class="lead">Click below for creating Tables & Inserting data</p>

                <p><a class="btn btn-lg btn-success" href="insertdata.php?type=installation" role="button">Insert Installation Data</a></p>

                <p><a class="btn btn-lg btn-success" href="insertdata.php?type=step" role="button">Insert Step Data</a></p>

                <p><a class="btn btn-lg btn-success" href="insertdata.php?type=upload" role="button">Insert Upload a Report</a></p>

                <p><a class="btn btn-lg btn-success" href="insertdata.php?type=search" role="button">Insert Search Data</a></p>

                <p><a class="btn btn-lg btn-success" href="insertdata.php?type=sort" role="button">Insert Sort Data</a></p>

                <p><a class="btn btn-lg btn-success" href="insertdata.php?type=reportAvgtime" role="button">Reports per UserID & Avg Time</a></p>

              </div>
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
