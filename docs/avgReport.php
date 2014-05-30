<?php include"header.php";?>

<?php 
include('../database.php');

if(isset($_POST['from'])){

  $fromdate = $_POST['from'];
  $todate = $_POST['to'];
    
  $result = mysqli_query($con, "SELECT Userid , count(WorkOrder) as reportcount, AVG(Step1)+ AVG(Step2)+ AVG(Step3)+ AVG(Step4)+ AVG(Step5) as Average FROM step_report where created_date BETWEEN '".$fromdate."' AND '".$todate."'  GROUP BY Userid ");
}else{
  $result = mysqli_query($con, "SELECT Userid , count(WorkOrder) as reportcount, AVG(Step1)+ AVG(Step2)+ AVG(Step3)+ AVG(Step4)+ AVG(Step5) as Average FROM step_report  GROUP BY Userid");
}

$graph_result = mysqli_query($con, "SELECT Userid , count(WorkOrder) as reportcount, AVG(Step1)+ AVG(Step2)+ AVG(Step3)+ AVG(Step4)+ AVG(Step5) as Average FROM step_report  GROUP BY Userid");

  while ($graph_row = mysqli_fetch_array($graph_result)) {

     $date =  $graph_row['Userid'];
     $value = $graph_row['Average'];
     $reportcount[] = '"'.$graph_row['reportcount'].'"';
     $data[] = "['".$date."', ".$value."]";
    // $bar_date[] = "[".$date."]";
  }

//echo "<pre>";print_r($reportcount);echo "</pre>";

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
      $current_week[] = "'".$week_dates."'";
  }

//echo "<pre>";print_r($current_week);echo "</pre>";
?>

<div id="banner">
	<h1>User Average Report</em></h1>
	<h3></h3>
</div>
<br><br>
  <h4 style="float:right;margin-right: 40px;">
    <a href="baravgReport.php" style="color:#2a6496">Step Report Bar Chart</a>
  </h4>


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
          <th>No Of Reports</th>
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
                <td><?php echo $row['reportcount'];?></td>
                <td><?php echo $row['Average'];?></td>
              </tr>
          <?php }
        ?>
	</tbody>
</table></div>
	
</div>

</body>
</html>

