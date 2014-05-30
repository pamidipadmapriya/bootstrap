<?php include"header.php";?>
<div id="banner">
	<h1>Logout Report</em></h1>
	<h3></h3>
</div>

<div id="main">

    <?php 
      include('../database.php');

      $result = mysqli_query($con, "SELECT Userid ,count(logout_count)as logoutused FROM logout_used GROUP BY Userid");
    ?>    
    
	<div id="demo"><table class="tablesorter">
	<thead>
        <tr>
          <th>User Id</th>
          <th>Logout Used Count</th>
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
          <td><?php echo $row['logoutused'];?></td>
        </tr>
    <?php }
        ?>
	</tbody>
</table></div>
	
</div>

</body>
</html>

