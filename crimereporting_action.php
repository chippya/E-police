<?php
include 'connection.php';
//include 'dbconnection.php';
//$db= new DbConnection;
session_start();
$lid=$_SESSION['lid'];
		 $location=$_POST['location'];
        $area=$_POST['area'];
		$policestation=$_POST['policestation'];
		 $mobilenumber=$_POST['mobilenumber'];
		  $name=$_POST['name'];
        $mailid=$_POST['mailid'];
        $complainttype=$_POST['complainttype'];
        $complaintdescription= $_POST['complaintdescription'];
		$time=$_POST['time'];
		$date=$_POST['date'];
		$crimelocation=$_POST['crimelocation'];
       $file_name2 = $_FILES['tphoto']['name'];

       $file_tmp2 = $_FILES['tphoto']['tmp_name'];
        $referencenumber=$_POST['referencenumber'];
        
	$query="INSERT INTO `crime`(`location`,`area`,`policestation`,`mobilenumber`,`name`,`mailid`,`complainttype`,`complaintdescription`,`time`,`date`,`crimelocation`,`evidence`,`referencenumber`,`status`,`lid`) VALUES ('$location','$area','$policestation','$mobilenumber','$name','$mailid','$complainttype','$complaintdescription','$time','$date','$crimelocation','$file_name2','$referencenumber',1,'$lid')";
	$result=mysqli_query($con,$query);
 header("location:otp_process.php?result:sucess");
	?>