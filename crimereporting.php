<?php
include 'connection.php';
include 'dbconnection.php';
$db= new DbConnection;
session_start();
$lid=$_SESSION['lid'];
/*if(!(isset($_SESSION['lid']))){
	header('location:index.php');
}
/*if(isset($_POST['submit']))
    {
		 $location=$_POST['location'];
        $area=$_POST['area'];
		$policestation=$_POST['policestation'];
		 $mobilenumber=$_POST['mobilenumber'];
        $referencenumber=$_POST['referencenumber'];
        
	//$sql1="INSERT INTO `crime`(`location`,`area`,`policestation`,`mobilenumber`,`referencenumber`,`status`,`lid`) VALUES ('$location','$area','$policestation','$mobilenumber','$referencenumber',1,'$lid')";
$result1=mysqli_query($con,$sql1);
 header("location:crimereporting1.php");
	}*/


	
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>E-POLICE</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <!--validation -->
  <!--validation-->
   <link rel="stylesheet" type="text/css" href="css/oh-autoVal-style.css">
   <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/oh-autoVal-script.js"></script>

</head>

<body>
  

<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <a class="text-color mr-3" href="callto:+443003030266"><strong>CALL</strong> +44 300 303 0266</a>
          <ul class="list-inline d-inline">
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-linkedin"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-instagram"></i></a></li>
          </ul>
        </div>
       <div class="col-lg-8 text-center text-lg-right">
	 <!--  <form action="missingsearch1.php" method="post">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#">Search</a></li>
            <input type="date" name="dateofapplication" >
			 <button type="submit" name="submit" >Search</button>
           <!-- <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="scholarship.html">SCHOLARSHIP</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#loginModal">login</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#signupModal">register</a></li>
          </ul>
		  </form>-->
        </div>
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
       
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
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
          <!--  <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Pages
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="teacher.html">Teacher</a>
                <a class="dropdown-item" href="teacher-single.html">Teacher Single</a>
                <a class="dropdown-item" href="notice.html">Notice</a>
                <a class="dropdown-item" href="notice-single.html">Notice Details</a>
                <a class="dropdown-item" href="research.html">Research</a>
                <a class="dropdown-item" href="scholarship.html">Scholarship</a>
                <a class="dropdown-item" href="course-single.html">Course Details</a>
                <a class="dropdown-item" href="event-single.html">Event Details</a>
                <a class="dropdown-item" href="blog-single.html">Blog Details</a>
              </div>
            </li>
         <!--   <li class="nav-item @@contact">
              <a class="nav-link" href="contact.html">CONTACT</a>
            </li>-->
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Name">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- page title -->
<br><br><br>
<section class="page-title-section" data-background="images/crime.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
         
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
       
      </div>
    </div>
  </div>
</section>
<form action="crimereporting_action.php" method="post" enctype="multipart/form-data">

<br><br>
<section>
             <table align="center">
			   <tr>
					  <td>Location </td>
					 <td> <input type="text"   class="form-control mb-3 " id="location" 
							name="location" value="Kanjirappally" placeholder="Location" av-message="invalid" readonly /></td>
							
							<td padding-left:5m>Select Your CrimeArea  </td>
					  <td>
					   <select name="area">
    <option value="	Cheruvally">Cheruvally</option>
    <option value="Chirakkadavu">Chirakkadavu</option>
    <option value="Edakkunnam">Edakkunnam</option>
    <option value="Elamgulam">Elamgulam</option>
	 <option value="Elikkulam">Elikkulam</option>
    <option value="Erumeli North">Erumeli North</option>
    <option value="Erumeli South">Erumeli South</option>
    <option value="Kanjirappally">Kanjirappally</option>
	<option value="Koottickal">Koottickal</option>
    <option value="Koovappally">Koovappally</option>
	 <option value="Manimala">Manimala</option>
    <option value="Mundakayam">Mundakayam</option></td>
   </select>
							</tr>
							
							 <tr>
					  <td>Police Station </td>
					 <td> <input type="text"   class="form-control mb-3 " id="policestation" 
							name="policestation" value="Kanjirappally" placeholder="Police Station" av-message="invalid" readonly /></td>
							 <td>Enter Your MobileNumber </td>
					 <td> <input type="text"   class="form-control mb-3 " id="mobilenumber" 
							name="mobilenumber" placeholder="MobileNumber" av-message="invalid"/></td>
							</tr>
							 
							
						
			   <tr>
					  <td>Enter Your Name </td>
					 <td> <input type="text"   class="form-control mb-3 " id="name" 
							name="name" placeholder="Name" av-message="invalid"/></td>
							
					  <td>Mail Id</td>
					 <td padding:5px> <input type="text"   class="form-control mb-3" id="mailid" 
							name="mailid" placeholder="Mail" av-message="invalid"/></td>
							
							</tr>
							
				<tr>			 
							
					  <td>Select Your Complaint Type </td>
					  <td>
					   <select name="complainttype">
    <option value="Theft">Theft</option>
    <option value="Chain Snatching">Chain Snatching</option>
    <option value="Robbery">Robbery</option>
    <option value="Eve Teasing">Eve Teasing</option>
	 <option value="Dowry">Dowry</option>
    <option value="Domestic Violence">Domestic Violence</option>
    <option value="Drug Abuse">Drug Abuse</option>
    <option value="Kidnapping">Kidnapping</option>
	
   </select>
							
					<td>Complaint Description </td>
					 <td> <input type="text"   class="form-control mb-3 " id="complaintdescription" 
							name="complaintdescription" placeholder="Describe your complaint" av-message="invalid"/></td>		
							</tr>
							 
							 <tr>
							 <td>Time of Crime  </td>
					 <td> <input type="time"   class="form-control mb-3 " id="time" 
							name="time" placeholder="Time of Crime" av-message="invalid"/></td>
					  <td>Date of Crime  </td>
					 <td> <input type="date"   class="form-control mb-3 " id="date" 
							name="date" placeholder="Date of Crime" av-message="invalid"/></td>
							
							</tr>
							 
							 
							 <tr>
							 <td>Address of Pettisioner  </td>
					 <td> <input type="text"   class="form-control mb-3 " id="crimelocation" 
							name="crimelocation" placeholder="Address" av-message="invalid"/></td>
							 
					  <td>Your Complaint ReferenceNumber  </td>
					 <td> <input type="text"   class="form-control mb-3 " id="referencenumber" 
							name="referencenumber" placeholder="ReferenceNumber" value="<?php echo generatekey($con);?>" av-message="invalid"/></td>
							<?php

                      function checkKeys($con,$randstr)

{
$sql="SELECT * FROM uniqueid  ";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($res)){
    if($row['keystring']==$randstr){
        $keyExists=true;
        break;
    }
    else{
        $keyExists=false;
    }
}
return $keyExists;
}


function generatekey($con){
        $keylength=8;
        $str ="1234567890abcdefghijklmnopqrstuvwxyz";
        $randstr= substr(str_shuffle($str),0,$keylength);
        $checkKey=checkKeys($con,$randstr);
        while($checkKey==true){
            $randstr=substr(str_shuffle($str),0,$keylength);
            $checkKey=checkKeys($con,$randstr);
        }
        return $randstr;
    }
	?> 
							</tr>
							<tr>
							 <td>Evidence of Crime  </td>
					 <td> <input type="file"   class="form-control mb-3 " id="tphoto" 
							name="tphoto" placeholder="Location of Crime" av-message="invalid"/></td></tr>
							<tr>
					 <td> <button type="submit" name="encrypt"   class="btn btn-primary">Verify and Register Complaint</button></td>
					  <td> <button type="submit" name="reset"   class="btn btn-primary">Reset</button></td>
							
					 </tr>
							
							
</table>			 
							
</section>
							
							
							

<br><br>
<!-- /page title -->

<!-- research -->
<!--<section class="section">
  <div class="container">
    <div class="row">
      <!-- recharch item 
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
          <img class="card-img-top rounded-0" src="images/research/research-1.jpg" alt="research thumb">
          <div class="card-body">
            <h4 class="card-title">Geography</h4>
            <p class="card-text">
              Some quick example text to build on the card title
              and make up the bulk of the card's content.
            </p>
          </div>
        </div>
      </div>
      <!-- recharch item 
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
          <img class="card-img-top rounded-0" src="images/research/research-2.jpg" alt="research thumb">
          <div class="card-body">
            <h4 class="card-title">Mathematical</h4>
            <p class="card-text">
              Some quick example text to build on the card title
              and make up the bulk of the card's content.
            </p>
          </div>
        </div>
      </div>
      <!-- recharch item 
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
          <img class="card-img-top rounded-0" src="images/research/research-3.jpg" alt="research thumb">
          <div class="card-body">
            <h4 class="card-title">Humanities</h4>
            <p class="card-text">
              Some quick example text to build on the card title
              and make up the bulk of the card's content.
            </p>
          </div>
        </div>
      </div>
      <!-- recharch item 
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
          <img class="card-img-top rounded-0" src="images/research/research-4.jpg" alt="research thumb">
          <div class="card-body">
            <h4 class="card-title">Physical & Sciences</h4>
            <p class="card-text">
              Some quick example text to build on the card title
              and make up the bulk of the card's content.
            </p>
          </div>
        </div>
      </div>
      <!-- recharch item 
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
          <img class="card-img-top rounded-0" src="images/research/research-5.jpg" alt="research thumb">
          <div class="card-body">
            <h4 class="card-title">Biological Sciences</h4>
            <p class="card-text">
              Some quick example text to build on the card title
              and make up the bulk of the card's content.
            </p>
          </div>
        </div>
      </div>
      <!-- recharch item 
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
          <img class="card-img-top rounded-0" src="images/research/research-6.jpg" alt="research thumb">
          <div class="card-body">
            <h4 class="card-title">Archaeology</h4>
            <p class="card-text">
              Some quick example text to build on the card title
              and make up the bulk of the card's content.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /research -->

<!-- footer -->

  <!-- newsletter -->
 <!-- <div class="newsletter">
    <div class="container">
      <div class="row">
      <!--  <div class="col-md-9 ml-auto bg-primary py-5 newsletter-block">
          <h3 class="text-white">Subscribe Now</h3>
          <form action="#">
            <div class="input-wrapper">
              <input type="email" class="form-control border-0" id="newsletter" name="newsletter" placeholder="Enter Your Email...">
              <button type="submit" value="send" class="btn btn-primary">Join</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>-->
  <!-- footer content -->
  
  <!-- copyright -->
  <div class="copyright py-4 bg-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 text-sm-left text-center">
          <p class="mb-0">Copyright
            <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script> 
            © Theme By <a href="https://themefisher.com">themefisher.com</a></p> . All Rights Reserved.
        </div>
        <div class="col-sm-5 text-sm-right text-center">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://www.facebook.com/themefisher"><i class="ti-facebook text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://www.twitter.com/themefisher"><i class="ti-twitter-alt text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-instagram text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://dribbble.com/themefisher"><i class="ti-dribbble text-primary"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- mixitup filter -->
<script src="plugins/mixitup/mixitup.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>