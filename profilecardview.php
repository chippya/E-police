<?php
include 'connection.php';
include 'dbconnection.php';
$db= new DbConnection;
session_start();
if(!(isset($_SESSION['lid']))){
	header('location:index.php');
}
else

$lid=$_SESSION['lid'];

//echo $lid;
 $sql    = "SELECT * FROM tbl_userreg WHERE lid='$lid'";
            $result = mysqli_query($con,$sql) or die(mysqli_error());
            while ($row = mysqli_fetch_array($result))
            {

                $name= $row['firstname'];
				$lastname=$row['lastname'];
				$phone=$row['phone'];
				$gender=$row['gender'];
			    $dob = $row['dob'];
				$housenumber=$row['housenumber'];
				$wardnumber=$row['wardnumber'];
				$locality=$row['locality'];
				$district=$row['district'];
				$email=$row['email'];
				$profilepic=$row['profilepic'];
				
                //$Password = $row['User_password'];
            }
		?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
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
			<li class="nav-item @@about">
              <a class="nav-link" href="viewpetty.php">Petty Case</a>
            </li>
            <li class="nav-item @@blog">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
    </ul>
  </div>
</nav>
<h2 style="text-align:center">User Profile Card</h2>

<div class="card">
<table>
<tr>
 <img src="uploads/<?php echo $profilepic;?>" alt="<?php echo $profilepic;?>"/>
  <tr>
  <th>First Name: </th>
  <th><?php echo $name;?></th>
  </tr>
  <tr>
  <th>Last Name: </th>
  <th><?php echo $lastname;?></th>
  </tr>
  <tr>
  <th>Phone: </th>
  <th><?php echo $phone;?></th>
  </tr>
  <tr>
  <th>House Number: </th>
  <th><?php echo $housenumber;?></th>
  </tr>
  <tr>
  <th>Ward Number: </th>
  <th><?php echo $wardnumber;?></th>
  </tr>
  
  <tr>
  <th>Email: </th>
  <th><?php echo $email;?></th>
  </tr>
  
  </table>
 
  <!--<p class="title">CEO & Founder, Example</p>
  <p>Harvard University</p>-->
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button></button></p>
</div>

</body>
</html>