<?php
include 'connection.php';

$query ="SELECT * FROM `tbl_visitors`";
$result=mysqli_query($con,$query);
//print_r(mysqli_num_rows($result));
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Country', 'Visits'],
		  <?php
			$i=0;
			while($row = mysqli_fetch_array($result))
			{
				$i++;
				if($i==mysqli_num_rows($result))
					echo "['".$row['Country']."',".$row['Visits']."]";
				else
					echo "['".$row['Country']."',".$row['Visits']."],";
			}
		?>

        ]);

        var options = {
          title: 'Visits From Countries',
          is3D:true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
