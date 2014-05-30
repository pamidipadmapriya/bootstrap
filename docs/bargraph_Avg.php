<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	</head>
	<body>

<?php include('../database.php'); 
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
                    text: 'Workorder average report. March, 2014'
                },
                subtitle: {
                    text: 'Click the columns to view in detail.'
                },
                xAxis: {
                    type: 'category'
                },
                yAxis: {
                    title: {
                        text: 'Work Order'
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
                            format: '{point.y:.1f}%'
                        }
                    }
                },

                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.1f}%</b> of total. (AVG: {point.avg})<br/>'
                }, 

                series: [{
                    name: 'Work Order',
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

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

	</body>
</html>
