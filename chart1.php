<?php
include 'connection.php';

$query ="SELECT * FROM `accidentrates`";
$result=mysqli_query($con,$query);
//print_r(mysqli_num_rows($result));
?>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <ul class="list-inline">
            
			</ul>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['locality', 'rate'],
		  <?php
			$i=0;
			while($row = mysqli_fetch_array($result))
			{
				$i++;
				if($i==mysqli_num_rows($result))
					echo "['".$row['locality']."',".$row['rate']."]";
				else
					echo "['".$row['locality']."',".$row['rate']."],";
			}
		?>

        ]);

        var options = {
          title: 'Accident Rates of Kanjirapally(yearly)',
          is3D:true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="nav-item @@about">
              <a class="nav-link" href="userhomee.php">Home</a>
            </li>
            <li class="nav-item @@about">
              <a class="nav-link" href="profilecardview.php">View Profile</a>
            </li>
            <li class="nav-item @@courses">
              <a class="nav-link" href="chart1.php">Accident Rate</a>
            </li>
			 <li class="nav-item @@courses">
              <a class="nav-link" href="crimereporting.php">Report Crime</a>
            </li>
			<li class="nav-item @@courses">
              <a class="nav-link" href="crimereport.php">Get My CrimeReport</a>
            </li>
             <li class="nav-item @@about">
              <a class="nav-link" href="missinglistuser.php">Missing List</a>
            </li>
			 <li class="nav-item @@about">
              <a class="nav-link" href="userviewwanted.php">Wanted List</a>
            </li>
			<li class="nav-item @@about">
              <a class="nav-link" href="viewvdo1.php">Awareness Video</a>
            </li>
			
            <li class="nav-item @@blog">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
    </ul>
  </div>
</nav>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
