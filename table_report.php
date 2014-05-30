<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		
		<link href='demo_table.css' rel='stylesheet' type='text/css'>
		<script type="text/javascript" language="javascript" src="jquery.js"></script>
		<script type="text/javascript" language="javascript" src="jquery.dataTables.min.js"></script>
		<script type="text/javascript" charset="utf-8">
			/* Note 'unshift' does not work in IE6. A simply array concatenation would. This is used
			 * to give the custom type top priority
			 */
			jQuery.fn.dataTableExt.aTypes.unshift(
				function ( sData )
				{
					var sValidChars = "0123456789-,";
					var Char;
					var bDecimal = false;
					
					/* Check the numeric part */
					for ( i=0 ; i<sData.length ; i++ )
					{
						Char = sData.charAt(i);
						if (sValidChars.indexOf(Char) == -1)
						{
							return null;
						}
						
						/* Only allowed one decimal place... */
						if ( Char == "," )
						{
							if ( bDecimal )
							{
								return null;
							}
							bDecimal = true;
						}
					}
					
					return 'numeric-comma';
				}
			);
			
			jQuery.fn.dataTableExt.oSort['numeric-comma-asc']  = function(a,b) {
				var x = (a == "-") ? 0 : a.replace( /,/, "." );
				var y = (b == "-") ? 0 : b.replace( /,/, "." );
				x = parseFloat( x );
				y = parseFloat( y );
				return ((x < y) ? -1 : ((x > y) ?  1 : 0));
			};
			
			jQuery.fn.dataTableExt.oSort['numeric-comma-desc'] = function(a,b) {
				var x = (a == "-") ? 0 : a.replace( /,/, "." );
				var y = (b == "-") ? 0 : b.replace( /,/, "." );
				x = parseFloat( x );
				y = parseFloat( y );
				return ((x < y) ?  1 : ((x > y) ? -1 : 0));
			};
			
			$(document).ready(function() {
				$('#my_tab').dataTable();
			} );
		</script>
	</head>
	      <?php 
      
      include('database.php');
      $result = mysqli_query($con, "SELECT * FROM  installationinfo");
      ?> 
<table cellpadding="0" cellspacing="0" border="0" class="display" id="my_tab">
	<thead>
		<tr>
        <th>User Id</th>
        <th>City</th>
        <th>Average Time</th>
		</tr>
	</thead>
	<tbody>
		 <?php
        while($row = mysqli_fetch_array($result))
        {?>
            <tr>
              <td><?php echo $row['Userid'];?></td>
              <td><?php echo $row['City'];?></td>
              <td><?php echo $row['AvgTime'];?></td>
            </tr>
        <?php }
          ?>
	</tbody>
	<tfoot>
		<tr>
      <th>User Id</th>
      <th>City</th>
      <th>Average Time</th>
		</tr>
	</tfoot>
</table>
</html>