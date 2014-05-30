<?php include"header.php";?>

<?php 

include('../database.php');

if(isset($_POST['from'])){

  $fromdate = $_POST['from'];
  $todate = $_POST['to'];
  
  $result = mysqli_query($con, "SELECT Userid,WorkOrder,Step1,Step2,Step3,Step4,Step5, (Step1 + Step2 + Step3 +Step4 + Step5)/5 as Average FROM  step_report where created_date BETWEEN '".$fromdate."' AND '".$todate."'");
}else{
  $result = mysqli_query($con, "SELECT Userid,WorkOrder,Step1,Step2,Step3,Step4,Step5, (Step1 + Step2 + Step3 +Step4 + Step5)/5 as Average FROM  step_report");
}
?>

<div id="banner">
	<h1>Step Report</em></h1>
	<h3></h3>
</div>
<br><br>



<script type="text/javascript">

/*$(function () {
        $('#container').highcharts({
            title: {
                text: 'Installation Report',
                x: -20 //center
            },
            subtitle: {
                text: 'Source: Copart Analytics',
                x: -20
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                title: {
                    text: 'Users'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: '°C'
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 0
            },
            series: [{
                name: 'Tokyo',
                data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
            }, {
                name: 'New York',
                data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
            }, {
                name: 'Berlin',
                data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
            }, {
                name: 'London',
                data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
            }]
        });
    });
  */

  /*$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Browser market shares at a specific website, 2010'
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
            name: 'Browser share',
            data: [
                ['Firefox',   45.0],
                ['IE',       26.8],
                {
                    name: 'Chrome',
                    y: 12.8,
                    sliced: true,
                    selected: true
                },
                ['Safari',    8.5],
                ['Opera',     6.2],
                ['Others',   0.7]
            ]
        }]
    });
});*/
    

		</script>
	</head>
	<body>
<script src="Highcharts/js/highcharts.js"></script>
<script src="Highcharts/js/modules/exporting.js"></script>

<!--<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<br><br>-->



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

	<div id="demo"><table class="tablesorter">
	<thead>
        <tr>
          <th>User Id</th>
          <th>Work Order</th>
          <th>Step1</th>
          <th>Step2</th>
          <th>Step3</th>
          <th>Step4</th>
          <th>Step5</th>
          <th>Average Time(Min)</th>
        </tr>
	</thead>
	<tfoot>
		<tr>
			<th colspan="8" class="ts-pager form-horizontal">
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
          <td><?php echo $row['WorkOrder'];?></td>
          <td><?php echo $row['Step1'];?></td>
          <td><?php echo $row['Step2'];?></td>
          <td><?php echo $row['Step3'];?></td>
          <td><?php echo $row['Step4'];?></td>
          <td><?php echo $row['Step5'];?></td>
          <td><?php echo $row['Average'];?></td>
        </tr>
    <?php }
        ?>
	</tbody>
</table></div>
	
</div>

</body>
</html>

