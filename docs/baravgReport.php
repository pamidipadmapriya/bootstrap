<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
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
          <a class="navbar-brand" href="../dashboard.php"><img src="../images/copart_logo.png"></a>

        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../dashboard.php">Back to Dashboard</a></li>
            <!--<li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>-->
          </ul>

        </div>
      </div>
    </div>

<?php include('../database.php'); 

$query_location = "SELECT distinct(location) FROM step_report";
$location_result = mysqli_query($con, $query_location);

?>
<br><br>

  <h4 style="float:left;margin-left: 40px;">
    <a href="avgReport.php" style="color:#2a6496">Back To Step Average Report</a>
  </h4>

<form name="locationname" method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>">

  <select name="location" style="float:right;padding-right:40px;" name='location'  onchange="this.form.submit();">
    <option value=''>Select Location</option>
    <?php 
    $select = "";
    $location = $_REQUEST["location"];
    while ($location_row = mysqli_fetch_array($location_result))
    {   
        echo "<option value='".$location_row['location']."'>".$location_row['location']."</option>";
    }
    ?>        
  </select>
</form>

<?php

  $date = date('Y-m-d');
  $d = date('N', strtotime($date));
  // here N means ISO-8601 numeric representation of the day of the week (added in PHP 5.1.0)
  $week = array();
  for($i = 1; $i < $d; ++$i){
      $dateTime = new DateTime($date);
      for($j = 0; $j < $i; ++$j){
          $dateTime->modify('-1 day');
      }   
      $week[] = $dateTime;
  }
  $week[] = new DateTime($date);
  for($i = $d+1; $i <= 7; ++$i){
      $dateTime = new DateTime($date);
      for($j = 0; $j < $i - $d; ++$j){
          $dateTime->modify('+1 day');
      }   
      $week[] = $dateTime;
  }
  sort($week);

  foreach($week as $day){
      $week_dates= $day->format('Y-m-d');
      $current_week[] = $week_dates;
  }

//echo "<pre>";print_r($current_week);echo "</pre>";
//exit;

?>

<script>
  /*$('#location_change').change(function(){
    var value = $(this).val();
    $('select[name=location] option[value='+value+']').attr('selected', 'selected');

    var input = document.createElement("input");
    input.setAttribute("type", "hidden");
    input.setAttribute("name", "location");
    input.setAttribute("id","location");
    input.setAttribute("value", value);
    $("#location").val(value);
    
  });*/
</script>

<!--<input type="hidden" name="location" id="location" value="" />-->

<?php
if(isset($_REQUEST["location"])){
  $location_value = $_REQUEST["location"];
}
if(isset($location_value)){
   $q = "SELECT Userid , count(WorkOrder) as workordercount, AVG(Step1)+ AVG(Step2)+ AVG(Step3)+ AVG(Step4)+ AVG(Step5) as Average, created_date FROM step_report WHERE location = '".$location_value."' and created_date BETWEEN '".$current_week[0]."' AND '".$current_week[(count($current_week)-1)]."' GROUP BY Userid order by created_date";
}else{
  $q = "SELECT Userid , count(WorkOrder) as workordercount, AVG(Step1)+ AVG(Step2)+ AVG(Step3)+ AVG(Step4)+ AVG(Step5) as Average, created_date FROM step_report WHERE created_date BETWEEN '".$current_week[0]."' AND '".$current_week[(count($current_week)-1)]."' GROUP BY Userid order by created_date";
}

  $graph_result = mysqli_query($con, $q);
  $tmp = array();

  //echo "2014-05-06,,\t0%\n";
  while ($graph_row = mysqli_fetch_array($graph_result)) {
    $tmp[$graph_row['created_date']][] = $graph_row['created_date'].",".$graph_row['Userid'].",".$graph_row['Average'].",\t".$graph_row['workordercount']."%\n";
    //echo  $graph_row['created_date'].",".$graph_row['Userid'].",\t".$graph_row['workordercount']."%\n";
  }

  //echo "<pre>";print_r($tmp);echo "</pre>";exit;
  echo "<pre id='tsv' style='display:none'>Copart\tAnalytics\n";

  for($i = 0; $i < count($current_week); $i++){
    if(isset($tmp[$current_week[$i]])){
      for($j=0; $j<count($tmp[$current_week[$i]]); $j++)
        echo $tmp[$current_week[$i]][$j];
    } else {
      echo "$current_week[$i],,0,\t0%\n";
    }
  }
  echo "</pre>";
  //exit;
  ?>
  <!-- Data from www.netmarketshare.com. Select Browsers => Desktop share by version. Download as tsv. -->
  <!--<pre id="tsv" style="display:none">Joel	Tej	
  19th March,YXAPP01,10,	26.61%
  19th March,YXAPP02,20,	6.61%
  19th March,YXAPP03,30,	16.61%
  19th March,YXAPP04,40,	2.61%
  19th March,YXAPP05,50,	3.61%
  20th March,YXAPP01,60,	13.61%
  20th March,YXAPP03,70,	7.61%
  20th March,YXAPP04,80,	8.61%
  21th March,YXAPP04,90,	4.61%
  21th March,YXAPP05,5,	2.61%</pre>-->


<script type="text/javascript">
  $(function () {

    Highcharts.data({
        csv: document.getElementById('tsv').innerHTML,
        itemDelimiter: '\t',
        parsed: function (columns) {

        var brands = {},
            brandsData = [],
            versions = {},
            drilldownSeries = [],
            avgs = [];
        
        // Parse percentage strings
        columns[1] = $.map(columns[1], function (value) {
            if (value.indexOf('%') === value.length - 1) {
                value = parseFloat(value);
            }
            //alert(value);
            return value;
        });

        $.each(columns[0], function (i, name) {
          var brand,
          version, avg, tmp;

            if (i > 0) {

              // Remove special edition notes
              tmp = name.split(',');
              name = tmp[0];
              version = tmp[1];
              avg = tmp[2];

              // Split into brand and version
              /*version = name.match(/([0-9]+[\.0-9x]*)/);
              if (version) {
              version = version[0];
              }*/
              brand = name;//.replace(version, '');

              // Create the main data
              if (!brands[brand]) {
                brands[brand] = columns[1][i];
                avgs[brand] = avg;

              } else {
                brands[brand] += columns[1][i];
                avgs[brand] = avgs[brand] - (-avg);
              }
              //alert(brand+" "+avgs[brand]+" "+brands[brand]+" "+columns[0][i]);

              // Create the version data
              if (version !== null) {
                if (!versions[brand]) {
                  versions[brand] = [];
                }
                versions[brand].push([version, columns[1][i]]);
              }
              //alert(brands[brand]+","+versions[brand]);
            }
                
            });

           $.each(brands, function (name, y) {
          //alert(name+"---"+y);
                brandsData.push({ 
                    name: name, 
                    y: y,
                    drilldown: versions[name] ? name : null,
					          avg: avgs[name] ? avgs[name] : 0
                });
              });

            $.each(versions, function (key, value) {
			          //alert(key+"---"+value);
                drilldownSeries.push({
                    name: key,
                    id: key,
                    data: value,
                });
            });

            // Create the chart
            $('#container').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Workorders Average Report.'
                },
                subtitle: {
                    text: 'Click the columns to view in detail.'
                },
                xAxis: {
                    type: 'category'
                },
                yAxis: {
                    title: {
                        text: 'Work Orders'
                    }
                },
                legend: {
                    enabled: false
                },
                plotOptions: {
                    series: {
                        borderWidth: 0,
                        dataLabels: {
                            enabled: true,
                            format: '{point.y:.0f}'
                        }
                    }
                },

                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.0f}</b> of total. (AVG: {point.avg})<br/>'
                }, 

                series: [{
                    name: 'Summary',
                    colorByPoint: true,
                    data: brandsData
                }],
                drilldown: {
                    series: drilldownSeries
                }
            })

        }
    });
});
    

		</script>

<script src="Highcharts/js/highcharts.js"></script>
<script src="Highcharts/js/modules/data.js"></script>
<script src="Highcharts/js/modules/drilldown.js"></script>
<?php if(isset($_REQUEST["location"])){?>
<div style="text-align:center;font-weight:bold;color:rgb(48, 74, 180);font-size: 18px;margin-left: 157px;"><?php echo"Yard Location : ". $_REQUEST["location"];?></div>
<hr>
<?php } ?>
<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<!--<h3><div style="float:left">Previuos </div> <div style="float:left">||</div> <div style="float:left">Next</div></h3>-->
<!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../css/dashboard.css" rel="stylesheet">

<link rel="stylesheet" href="../datepicker/jquery-ui.css">
<script src="../datepicker/jquery-ui.js"></script>

  <script>
  $(function() {

    $( "#from" ).datepicker({
      defaultDate: "+1w",
      dateFormat: "yy-mm-dd",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });

    $( "#to" ).datepicker({
      defaultDate: "+1w",
      dateFormat: "yy-mm-dd",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });

  });
  </script>

<br><br>

	</body>
</html>
