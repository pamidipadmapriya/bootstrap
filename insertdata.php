
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

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
            <li><a href="#">Dashboard</a></li>
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
         <!-- <ul class="nav nav-sidebar">
            <li><a href="installation.php">InstallationInfo Report</a></li>
            <li><a href="stepReport.php">Step Info Report</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul>-->

          <!-- <ul class="nav nav-sidebar">
            <li><a href="docs/installationreport.php">InstallationInfo Report</a></li>
            <li><a href="docs/stepReport.php">Step Info Report</a></li>
            </ul>
           <ul class="nav nav-list" >
              <li class="nav-header"><b>Usage by Feature</b></li>
              <li><a href="docs/uploadreport.php">UploadReport</a></li>
              <li><a href="docs/searchReport.php">Search Report</a></li>
              <li><a href="docs/sortReport.php">Sort Report</a></li>
              <li><a href="docs/filterReport.php">Filter Report</a></li>
              <li><a href="docs/logoutReport.php">Logout Report</a></li>
              <li><a href="docs/cameraReport.php">Camera Used Report</a></li>
              <li><a href="docs/photosReport.php">Photos Deleted Report</a></li>
              <li><a href="docs/videosReport.php">Videos Deleted Report</a></li>
              <li><a href="docs/appkickedReport.php">App Kicked Report</a></li>
          </ul>-->

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
      </div>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>
          
          <div class="table-responsive">
              <div class="jumbotron">
               <?php 

                include 'database.php';

                function objectToArray( $object )
                  {
                      if( !is_object( $object ) && !is_array( $object ) )
                      {
                          return $object;
                      }
                      if( is_object( $object ) )
                      {
                          $object = get_object_vars( $object );
                      }
                      return array_map( 'objectToArray', $object );
                  }
                           
   
              if(isset($_GET['type'])){
                
                  $date = date("Y-m-d");
                 //Installation Report json data
                 if($_GET['type'] == "installation"){
 
                  $info = '{
                  "schema": "installationinfo",
                  "tableinfo": [
                      {
                          "Userid": "TEST",
                          "City": "Dallas",
                          "created_date": "'.$date.'"
                      }
                    ]
                 }';
                }

                 //step Report json data
                 if($_GET['type'] == "step"){
 
                    $info = '{
                    "schema": "Step_Report",
                    "tableinfo": [
                        {
                            "Userid": "TEST",
                            "WorkOrder": "TEST",
                            "Step1": "10",
                            "Step2": "10",
                            "Step3": "10",
                            "Step4": "10",
                            "Step5": "20",
                            "created_date": "'.$date.'"

                        }
                      ]
                   }';
                }

                 //upload Report json data
                 if($_GET['type'] == "upload"){
 
                    $info = '{
                        "schema": "Report_uploads",
                        "tableinfo": [
                            {
                                "Userid": "TEST",
                                "WorkOrder": "TEST",
                                "status": "online",
                                "images_count": "9",
                                "videos_count": "3",
                                "created_date": "'.$date.'"

                            }
                          ]
                   }';
                }

                 //search Report json data
                 if($_GET['type'] == "search"){
                    $info = '{
                        "schema": "search_used",
                        "tableinfo": [
                            {
                                "Userid": "TEST",
                                "search_count": "1",
                                "created_date": "'.$date.'"

                            }
                          ]
                       }';
                }

                //Sort Report json data
                 if($_GET['type'] == "sort"){
                  $info = '{
                      "schema": "sort_used",
                      "tableinfo": [
                          {
                              "Userid": "YXAPP01",
                              "sort_count": "1",
                              "created_date": "'.$date.'"

                          }
                        ]
                     }';
                }

              }
 
 
 
              /* 
                //Step Report json data
                $info = '{
                    "schema": "Step_Report",
                    "tableinfo": [
                        {
                            "Userid": "YXAPP02",
                            "WorkOrder": "ASWPP105",
                            "Step1": "10",
                            "Step2": "10",
                            "Step3": "10",
                            "Step4": "10",
                            "Step5": "20",
                            "created_date": "'.$date.'"
                        }
                      ]
                   }';

                //Upload Report json data
                $info = '{
                    "schema": "Report_uploads",
                    "tableinfo": [
                        {
                            "Userid": "YXAPP02",
                            "WorkOrder": "ASWPP105",
                            "status": "online",
                            "images_count": "9",
                            "videos_count": "3",
                            "created_date": "'.$date.'"
                        }
                      ]
                   }';

                //Usage of Search Report json data
                $info = '{
                    "schema": "search_used",
                    "tableinfo": [
                        {
                            "Userid": "YXAPP01",
                            "search_count": "1",
                            "created_date": "'.$date.'"
                        }
                      ]
                   }';

                //Usage of Sort Report json data
                $info = '{
                    "schema": "sort_used",
                    "tableinfo": [
                        {
                            "Userid": "YXAPP01",
                            "sort_count": "1",
                            "created_date": "'.$date.'"
                        }
                      ]
                   }';

                //Usage of Filter Report json data
                $info = '{
                    "schema": "filter_used",
                    "tableinfo": [
                        {
                            "Userid": "YXAPP01",
                            "filter_count": "1",
                            "created_date": "'.$date.'"
                        }
                      ]
                   }';

                //Usage of Logout Report json data

                $info = '{
                    "schema": "logout_used",
                    "tableinfo": [
                        {
                            "Userid": "YXAPP01",
                            "logout_count": "1",
                            "created_date": "'.$date.'"
                        }
                      ]
                   }';
              //Usage of Camera Report json data

                $info = '{
                    "schema": "camera_used",
                    "tableinfo": [
                        {
                            "Userid": "YXAPP01",
                            "camera_count": "1",
                            "created_date": "'.$date.'"
                        }
                      ]
                   }';

              //Usage of Photos Deleted by USer Report json data

                $info = '{
                    "schema": "photos_deleted",
                    "tableinfo": [
                        {
                            "Userid": "YXAPP01",
                            "photos_count": "1",
                            "created_date": "'.$date.'"
                        }
                      ]
                   }';

              //Usage of Videos Deleted by USer Report json data

                $info = '{
                    "schema": "videos_deleted",
                    "tableinfo": [
                        {
                            "Userid": "YXAPP01",
                            "videos_count": "1",
                            "created_date": "'.$date.'"
                        }
                      ]
                   }';

              //user Kicked out of the app Report json data

                $info = '{
                    "schema": "app_kicked",
                    "tableinfo": [
                        {
                            "Userid": "YXAPP02",
                            "kicked_count": "1",
                            "created_date": "'.$date.'"
                        }
                      ]
                   }';
              */

                $data = json_decode($info);
                $table_name = $data->schema;
                $info = $data->tableinfo;
                $table_info = objectToArray($info[0]);

                $table_keys = array_keys($table_info);

                $table_values = array_values($table_info);

                $coloumns_count = count($table_keys);

                $coloumns = '';
                $insert_coloumns = '';
                $coloumns_values = '';

                for($i=0;$i<$coloumns_count;$i++){
                  
                  $insert_coloumns .= $table_keys[$i] .",";
                  $coloumns .= $table_keys[$i] ." varchar(100)".",";
                  $coloumns_values .= "'".$table_values[$i]."'".",";
                }

                $coloumns = chop($coloumns,",");
                $insert_coloumns = chop($insert_coloumns,",");
                $values = chop($coloumns_values,",");

                // Create table
                $sql="CREATE TABLE IF NOT EXISTS ".$table_name."($coloumns)";

                // Execute query
                if (mysqli_query($con,$sql))
                  {
                    echo "Table ".$table_name." created successfully<br>";
                  }
                else
                  {
                    echo "Error creating table: " . mysqli_error($con);
                  }
                ?>

                <?php 
                  $sql="INSERT INTO ".$table_name." ($insert_coloumns) VALUES($values)";
                  
                  if (!mysqli_query($con,$sql))
                    {
                      die('Error: ' . mysqli_error($con));
                    }
                  echo "1 record added<br>";
                ?>


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
