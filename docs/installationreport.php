<?php include"header.php";?>

<?php 

include('../database.php');

if(isset($_POST['from'])){

  $fromdate = $_POST['from'];
  $todate = $_POST['to'];
  
  $result = mysqli_query($con, "SELECT * FROM  installationinfo where created_date BETWEEN '".$fromdate."' AND '".$todate."'");
}else{
  $result = mysqli_query($con, "SELECT * FROM  installationinfo");

}

 $graph_result = mysqli_query($con, "SELECT count(created_date) as count, created_date FROM installationinfo group by created_date");
  while ($graph_row = mysqli_fetch_array($graph_result)) {

     $date =  $graph_row['created_date'];
     $value = $graph_row['count'];
     $data[] = "['".$date."', ".$value."]";
    // $bar_date[] = "[".$date."]";
  }

  $bargraph_result = mysqli_query($con, "SELECT count(created_date) as count, created_date FROM installationinfo group by created_date");

    while ($bargraph_row = mysqli_fetch_array($bargraph_result)) {

      $bdate =  $bargraph_row['created_date'];
      $bar_value =  $bargraph_row['count'];
      $bar_date[] = "'".$bdate."'";
      $bar_install_count[] = $bar_value;

      /*$bargraph_result1 = mysqli_query($con, "SELECT count(created_date) as count, City FROM installationinfo where created_date = '".$bdate."' group by City");
      
      while ($bargraph_row1 = mysqli_fetch_array($bargraph_result1)) {

        $city = $bargraph_row1['City'];
        $count = $bargraph_row1['count'];
            
         $jsondata = "{
                name: ".$city.",
                data: ".$count."
            }";
       // $bar_data[] = "['".$city."','".$count."']";
       $bar_data[] = $jsondata;
      }*/
    }
    //echo"<pre>";print_r($bar_date); echo"</pre>";
    $count_dates = count($bar_date);

    for($i=0;$i<$count_dates;$i++)
    {
      $bargraph_result1 = mysqli_query($con, "SELECT count(created_date) as count, City,created_date FROM installationinfo where created_date = ".$bar_date[$i]." group by City order by created_date");

      while($bargraph_row1 = mysqli_fetch_array($bargraph_result1)) {

        $city = $bargraph_row1['City'].',';
        $count = $bargraph_row1['count'];
        $cdate[]= $bargraph_row1['created_date'];

        $sdata = "{
            name: ".$city.",
            data: ".$count."
        }";
      }
    }
    //echo"<pre>";print_r($sdata); echo"</pre>";



?>

<div id="banner">
	<h1>Installation Report</em></h1><br>
	<h3></h3>
</div>
<br><br>

<script type="text/javascript">

    $(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Installation Report'
        },
        tooltip: {
    	    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    color: '#000000',
                    connectorColor: '#000000',
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Installation Based on Date',
            data:  [<?php echo join($data, ',') ?>]
        }]
    });
});
  
</script>


<script type="text/javascript">
$(function () {
        $('#container_bar').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Installation Report Barchart'
            },
            subtitle: {
                text: 'Source: Bar chart'
            },
            xAxis: {
                //categories: ['2010-03-13', '2010-03-14', '2010-03-18']
                categories:[<?php echo join($bar_date, ',') ?>]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Number Of Installation'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
           /* series: [{
                //name: 'Tokyo',
                data: [<?php echo join($bar_install_count, ',')?>]
            } ]*/
            series: [{
                name: 'Tokyo',
                data: [7.0, 6.9, 9.5]
            }, {
                name: 'New York',
                data: [8.2, 0.8, 5.7]
            }, {
                name: 'Berlin',
                data: [9.9, 0.6, 3.5]
            }, {
                name: 'London',
                data: [3.9, 4.2, 5.7]
            }]
        });
    });
    

		</script>

	</head>
	<body>

<script src="Highcharts/js/highcharts.js"></script>
<script src="Highcharts/js/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<div id="container_bar" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<br><br>

<form name="search" method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>">
  <label for="from">From</label>
  <input type="text" id="from" name="from" value="<?php if(isset($_POST['from'])){  echo $fromdate = $_POST['from'];} ?>">
  <label for="to">to</label>
  <input type="text" id="to" name="to" value="<?php if(isset($_POST['to'])){  echo $todate = $_POST['to'];} ?>">
  <input type="submit" name="submit" value="Get Report"> 
  <br>
</form>

<div style="font-size:18px;font-weight:bold;"><?php if(isset($_POST['from'])){?> Report From <?php echo $_POST['from'];?> To <?php echo $_POST['to'];}?></div>
 <br>
<div id="main">
	<div id="demo">
  <table class="tablesorter">
	<thead>
    <tr>
      <th>User Id</th>
      <th>App Version</th>
      <th>Device Version</th>
      <th>City</th>
      <th>Date</th>
    </tr>
	</thead>
	<tfoot>
		<tr>
			<th colspan="7" class="ts-pager form-horizontal">
				<button type="button" class="btn first"><i class="icon-step-backward glyphicon glyphicon-step-backward"></i></button>
				<button type="button" class="btn prev"><i class="icon-arrow-left glyphicon glyphicon-backward"></i></button>
				<span class="pagedisplay"></span> <!-- this can be any element, including an input -->
				<button type="button" class="btn next"><i class="icon-arrow-right glyphicon glyphicon-forward"></i></button>
				<button type="button" class="btn last"><i class="icon-step-forward glyphicon glyphicon-step-forward"></i></button>
				<select class="pagesize input-mini" title="Select page size">
					<option selected="selected" value="10">10</option>
					<option value="20">20</option>
					<option value="30">30</option>
					<option value="40">40</option>
					<option value="60">60</option>
					<option value="80">80</option>
					<option value="100">100</option>
				</select>
				<select class="pagenum input-mini" title="Select page number"></select>
			</th>
		</tr>
	</tfoot>
	<tbody>
	 <?php
    while($row = mysqli_fetch_array($result))
    {?>
        <tr>
          <td><?php echo $row['Userid'];?></td>
          <td><?php echo $row['app_version'];?></td>
          <td><?php echo $row['device_version'];?></td>
          <td><?php echo $row['City'];?></td>
          <td><?php echo $row['created_date'];?></td>

        </tr>
    <?php } ?>
	</tbody>
</table></div>

</div>
</div>
</div>
</body>
</html>