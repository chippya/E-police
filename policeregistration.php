<?php
include 'connection.php';
include 'dbconnection.php';
$db= new DbConnection;
session_start();
if(!(isset($_SESSION['lid']))){
	header('location:index.php');
}
$lid=$_SESSION['lid'];

if(isset($_POST["submit"])) 

{
    
    $name = $_POST['name']; 
	$phone = $_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $qs=mysqli_query($con,"insert into login values(NULL, '$email','$password','1','1','1')");
  // $re=mysqli_insert_id($con);
    //$sql1="INSERT INTO `login`(`email`, `password`,`role`,`status`) VALUES ('$signupEmail','$signupPassword',2,1)";
$result1=mysqli_query($con,$qs);
 //   $yq="INSERT INTO `policereg`(`name`,`phone`, `email`,`password`,`status`) VALUES ('$name','$phone','$email','$password','1')";
   // $ad = mysqli_query($con,$yq);
   $lid="SELECT `lid` FROM `login` WHERE `email`='$email'";
$result1=mysqli_query($con,$lid);
   while($row=mysqli_fetch_array($result1))
{

  $l=$row["lid"];
  
   echo $sql2="INSERT INTO `policereg`(`name`,`phone`,`email`,`password`,`status`,`lid`) VALUES ('$name','$phone','$email','$password',1,'$l')";

      $result2 = mysqli_query($con, $sql2);
    //header("location:../login/indexin.php");
echo $result2;

}

  
   
	 require 'PHPMailerAutoload.php';
    require 'credential.php';
$mail = new PHPMailer;
    
    $mail->SMTPDebug = 0;                               // Enable verbose debug output
    
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = EMAIL;                 // SMTP username
    $mail->Password = PASS;                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    
    $mail->setFrom(EMAIL, 'Admin');
    $mail->addAddress($_POST['email']);     // Add a recipient
                   // Name is optional
    $mail->addReplyTo(EMAIL);
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');
    
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML
    
    $mail->Subject = 'This is mail from admin for password..use this and login';
    $mail->Body    ="<i>This is your password:</i>  $password";
   
    $mail->AltBody ="";
     
    if(!$mail->send()) {
        //echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
		
    }
	header("location:adminhome.php");


  }
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
  <style>
.text-lighten{
 
  font-weight: bold;
  }
  </style>
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
       <!-- <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="notice.html">notice</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="research.html">research</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="scholarship.html">SCHOLARSHIP</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#loginModal">login</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#signupModal">register</a></li>
          </ul>
        </div>-->
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
       <!-- <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo"></a>-->
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
             <li class="nav-item @@home">
              <a class="nav-link" href="adminhome.php">HOME</a>
            </li>
            <li class="nav-item @@home">
              <a class="nav-link" href="adminblock1.php">View Users</a>
            </li>
            <li class="nav-item @@about">
              <a class="nav-link" href="policeregistration.php">Add POLICE</a>
            </li>
           <li class="nav-item @@events">
              <a class="nav-link" href="changepassword1.php">Change Password </a>
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
<section class="page-title-section" data-background="images/12.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <!--<li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Research</a></li>-->
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
       <!-- <p class="text-lighten">Kerala State Police is the law enforcement agency for the state of Kerala. Kerala Police has its headquarters in Thiruvananthapuram, the state capital.

Kerala Police has a reputation for being one of the best managed police forces in the country, and one of the top-ranking states in terms of law and order, in various social security rankings. Kerala police is also the first police department in South Asia to undertake community policing.</p>-->
      </div>
    </div>
  </div>
</section>
<form action="#" method="post" class="oh-autoval-form">
<section>
<br><br>

<!-- POLICE REGISTRATION-->
<div class="col-12">
                 <style>
				.oh-autoval-error{display: list-item;position: absolute;background: rgba(228, 0, 0, 1);z-index:8;
padding: 0.3em;color: #FFF;border-radius: 0.25em;pointer-events: none;-webkit-transition: opacity 0.2s 0, visibility 0 0;
-moz-transition: opacity 0.2s 0, visibility 0 0;transition: opacity 0.2s 0, visibility 0 0;}
.oh-autoval-error::after {content: '';position: absolute;left: 10px;bottom: 100%;z-index:8;
height: 0;width: 0;border-bottom: 8px solid rgba(228, 0, 0, 1);border-left: 8px solid transparent;border-right: 8px solid transparent;} 
</style>				 
						<div class="col-12">
                            <input type="text" class="form-control mb-3 mb-3 av-name " id="name" name="name" placeholder="Name" av-message="invalid" />
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3 av-mobile"  id="phone" name="phone" placeholder="Phone" av-message="invalid"/>
                        </div>
                       
                        <div class="col-12">
                            <input type="email" class="form-control mb-3 av-email" id="email" name="email" placeholder="Email" av-message="invalid" />
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3 " id="password" name="password" value="<?php echo generatekey($con);?>" placeholder="Password"/>
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
        $str ="1234567890abcdefghijklmnopqrstuvwxyz()@#!%&/$";
        $randstr= substr(str_shuffle($str),0,$keylength);
        $checkKey=checkKeys($con,$randstr);
        while($checkKey==true){
            $randstr=substr(str_shuffle($str),0,$keylength);
            $checkKey=checkKeys($con,$randstr);
        }
        return $randstr;
    }
	?> 
                        </div>
						 
                        <div class="col-12">
                            <button type="submit" name="submit" value="Submit" class="btn btn-primary">SIGN UP</button>
                        </div>
						<br><br>
						</section>
						</form>
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