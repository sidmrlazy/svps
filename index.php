<?php include "includes/db.php" ?>
<?php $a='home'; ?>
<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];
session_start();

// $_SESSION['start'] = time();
// $_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;


 ?>
<?php  $actual_link = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']; 
if($actual_link == "https://svps17huda.com/index.php")
{
	//header("location:https://svps17huda.com/");
}

else
{
	//header("location:https://svps17huda.com/");
}
?>	

<!-- HEADER
================================================== -->
<?php include "includes/header.php" ?>

<body id="index__page">

<!-- Back to top button
================================================== -->
<?php include "includes/back-to-top.php" ?>

<!-- PRELOADER
================================================== -->
<?php include "includes/loader.php" ?>

<!-- POP UP FORM
================================================== -->
<?php
@$msg=base64_decode($_REQUEST['msg']);
if($msg=='1')
{
	include "thankyou_popup.php";
		$_SESSION['user_agent']=$user_agent;
}
elseif($msg=='2')
{
	$_SESSION['user_agent']=$user_agent;
}

else
{
	if(isset($_SESSION['user_agent']))
	{
	include "popup_form1.php";
	}
		else {
			include "popup_form1.php"; //when need for pop-up for new admission uncomment this line
			$_SESSION['user_agent']=$user_agent;

		}
}
if(@$_REQUEST['source']==base64_encode(md5("babagooglebaba")))
{
  session_start();
   $_SESSION['facebook']=$_REQUEST['source'];
  
}

?>


<!-- Navbar
================================================== -->
<?php include "includes/navigation.php" ?>

<!-- SIGNIN MODAL
================================================== -->
<?php include "includes/sign-in.php" ?>
<!-- /////////////  pop up form -->

<!-- SIGNUP MODAL
================================================== -->
<?php include "includes/sign-up.php" ?>

<!-- HOME PAGE VIDEO
================================================== -->
<?php include "includes/home-page-video.php" ?>

<!-- HOME PAGE UPDATE
================================================== -->
<?php include "includes/index-update.php" ?>

<!--HOME PAGE ABOUT-->
<!--==================================================-->
<?php include "includes/index-about.php" ?>

  <!-- HOME PAGE FOUNDING FATHER
================================================== -->
<?php include "includes/index-founding-fathers.php" ?>

   <!-- HOME PAGE DIRECTORS
================================================== -->
<?php include "includes/index-directors.php" ?>

<!-- HOME PAGE TURNOVERS
================================================== -->
<?php include "includes/index-turnovers.php" ?>

<!-- HOME PAGE ABOUT
================================================== -->
<?php include "includes/index-early-years.php" ?>

<!-- TEACHING METHODOLOGY
================================================== -->
<?php include "includes/teaching-method.php" ?>

<!-- HOME PAGE VISION-MOTO
================================================== -->
<?php include "includes/vision-moto.php" ?>

<!-- HOME PAGE INFO-CONTACT
================================================== -->
<?php include "includes/info-contact.php" ?>

<!-- FOOTER
================================================== -->

<?php include "includes/footer.php"; ?> 
</body>
