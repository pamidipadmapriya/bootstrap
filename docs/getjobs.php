<?php include"header.php";?>

<?php 

include('../database.php');

if(isset($_POST['from'])){

  $fromdate = $_POST['from'];
  $todate = $_POST['to'];
  
  $result = mysqli_query($con, "SELECT Userid,WorkOrder,Step1,Step2,Step3,Step4,Step5, (Step1 + Step2 + Step3 +Step4 + Step5)/5 as Average FROM  step_report where created_date BETWEEN '".$fromdate."' AND '".$todate."'");
}else{
  $result = mysqli_query($con, "SELECT * FROM  jobs");
}
?>

<div id="banner">
	<h1>Jobs Data</em></h1>
	<h3></h3>
</div>
<br><br>



<script type="text/javascript">

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
            <th>Job Type</th>
            <th>Job Title</th>
            <th>Location</th>
            <th>skills</th>
            <th>Duration</th>
            <th>Mandotary Skills</th>
            <th>Desire Skills</th>
            <th>Created Date</th>
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
                  <td><?php echo $row['sno'];?></td>
                  <td><?php echo $row['job_type'];?></td>
                  <td><?php echo $row['job_title'];?></td>
                  <td><?php echo $row['location'];?></td>
                  <td><?php echo $row['skills'];?></td>
                  <td><?php echo $row['duration'];?></td>
                  <td><?php echo $row['mandotary_skills'];?></td>
                  <td><?php echo $row['desire_skills'];?></td>
                  <td><?php echo $row['created_date'];?></td>
        </tr>
    <?php }
        ?>
	</tbody>
</table></div>
	
</div>

</body>
</html>

