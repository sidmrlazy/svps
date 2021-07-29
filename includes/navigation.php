<style>
  .blinking{
    animation:blinkingText 1s infinite;
}
@keyframes blinkingText{
    0%{     color: white;    }
    49%{    color: white; }
    50%{    background-color: #292E9D; }
    99%{    color:white;  }
    100%{   color: white;    }
}
@media (max-width: 1000px) {
   #brandlogoimg{
      display: none;
   }
}

</style>
<?php
if(@$a=='home')
{
  $home='active';
}
if(@$about=='about')
{
  $about_li='active';
}
if(@$academic=='academic')
{
  $academic_li='active';
}
if(@$beyond_academic=='beyond_academic')
{
  $beyond_academic_li='active';
}
if(@$sports_ach=='sports_ach')
{
  $sports_ach_li='active';
}
if(@$alumini=='alumini')
{
  $alumini_li='active';
}
if(@$download=='download')
{
  $download_li="style='color:red'";
}
?>
<?php
$session = session_id() ;
$time = time();
$time_out_in_seconds = 30;
$time_out = $time - $time_out_in_seconds;

$query = "SELECT * FROM users_online WHERE session = '$session' ";
$send_query = mysqli_query($connection, $query);
$count = mysqli_num_rows($send_query);
if ($count == NULL) {
mysqli_query($connection, "INSERT INTO users_online(session, time) VALUES('$session','$time')");
} else {
mysqli_query($connection, "UPDATE users_online SET time = '$time' WHERE session = '$session'");
}
$users_online_query = mysqli_query($connection, "SELECT * FROM users_online WHERE time > '$time_out' ");
$_SESSION['users_online'] = $count_users = mysqli_num_rows($users_online_query);
?>

<nav class="navbar navbar-default navbar-fixed-top">
<!-- <a href="#"><img class="navbar-logo" src="assets/svps-logo/SVPS-original-white.png"></a> -->

  <!-- Logo -->
    



      <div class="container-fluid">
      <!-- Header -->
            <span id="brandlogoimg" class="">
              <a class="navbar-brand" href="index">
                  <img class="navbar-logo-svps" src="assets/svps-logo/SVPS-original-white.png">
                </a>
            </span>

      <div class="navbar-header">

        <!-- Collapse toggle -->


        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar__collapse" aria-expanded="false" >
              <span class="sr-only">Menu</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbar__collapse" >

          <ul class="nav navbar-nav navbar-left" >
            <li class="<?php echo $home; ?>" ><a href="index">Homes <span class="sr-only">(current)</span></a></li>

            <li class="dropdown <?php echo $about_li; ?>">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >About <i class="ion-android-arrow-down"></i>
              </a>
              <ul class="dropdown-menu">
              <li><a href="about" style="color:#052682;">About us</a></li>
                <li><a href="about#vision" style="color:#052682;">Vision</a></li>
                <li><a href="about#Directors" style="color:#052682;">Principals</a></li>
                <li><a href="about#FoundingFather" style="color:#052682;">Founding Father</a></li>
                <li><a href="about#Directors" style="color:#052682;">Directors</a></li>
                <li><a href="about#campus" style="color:#052682;">Campus</a></li>
                <li><a href="about#infra" style="color:#052682;">Infrastructure</a></li>
                <li><a href="index#teaching-methodology" style="color:#052682;">Teaching Methodology</a></li>
            </ul>
          </li>

          <li class="dropdown <?php echo $academic_li;?>">
            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Academics <i class="ion-android-arrow-down"></i></a>
            <ul class="dropdown-menu">
                <li><a href="academics" style="color:#052682;">Academics</a></li>
                <li><a href="academics#academic" style="color:#052682;">Academic Infrastructure</a></li>
                <li><a href="academics#curriculum" style="color:#052682;">Our Curriculum</a></li>
                <li><a href="early-years/index" target="_blank" style="color:#052682;">The Vivekian's EARLY YEARS</a></li>
                <!-- <li><a href="#">Classes (1st to 12th)</a></li> -->
                <li><a href="our-achievements" style="color:#052682;">Our Achievements</a></li>
                <li><a href="results" style="color:#052682;">Results (10th & 12th)</a></li>
                <li><a href="annual-report" style="color:#052682;">Annual Reports</a></li>    
                <li class="<?php echo $alumini_li; ?>"><a href="alumini" style="color:#052682;">Alumni</a></li>            
                <!--<li><a href="hw-download" class="blinking">Homework/Assignments (Downloads)</a></li>-->
            </ul>
        </li>


        <li class="dropdown <?php echo $beyond_academic_li; ?>">
          <a href="beyond-academics" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Beyond Academics <i class="ion-android-arrow-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="beyond-academics" style="color:#052682;">Beyond Academics</a></li>
                <li><a href="beyond-academics#yagna" style="color:#052682;">Yagnashala</a></li>
                <li><a href="beyond-academics#music" style="color:#052682;">Music & Dance</a></li>
                <li><a href="beyond-academics#education" style="color:#052682;">Educational Camps & Tours</a></li>
                <li><a href="beyond-academics#clubs" style="color:#052682;">SVPS Clubs</a></li>
                <li><a href="special-awards" style="color:#052682;">Special Awards</a></li>
                <!-- <li><a href="#">Green School Curriculum</a></li> -->
                <!-- <li><a href="#">Fests and Special Assemblies</a></li> -->
            </ul>
        </li>

        <li class="dropdown <?php echo $sports_ach_li; ?>">
          <a href="beyond-academics" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Sports & Achievements <i class="ion-android-arrow-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="sports-ach" style="color:#052682;">Sports & Achievements</a></li>
                <li><a href="skating" style="color:#052682;">Skating Records</a></li>
            </ul>
        </li>        
        <li><a href="updates" >Updates</a></li>
        <!-- <li><a type=submit target="_blank" href="includes/n5bb1caea2997e.pdf">Apply now</a></li> -->
        <!-- <button type=submit class="btn btn-danger" onclick=" window.open('file:////C:\Users\data'); return true;"> PDF </button> -->
        
        <!--<li><a href="hw-download" class="blinking">Downloads</a></li>-->
          <li class="dropdown">
          <a href="hw-download" class="dropdown-toggle blinking" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Downloads <i class="ion-android-arrow-down"></i></a>
          <ul class="dropdown-menu">
               <li><a href="hw-download.php" style="color:#052682;">Home Work</a></li>
               <li><a href="certificates" style="color:#052682;">Certificates</a></li>
               <li><a href="notice" style="color:#052682;">Notices</a></li>
                <li><a type=submit target="_blank" href="includes/SVPS Magazine.pdf" style="color:#052682;">E-Book</a></li>
         </ul>
        </li>
        
        <li><a href="early-years/index" target="_blank" class="font-weight-bold text-secondary"> Early Years</a></li>

        <li class="dropdown">
          <a href="beyond-academics" class="dropdown-toggle blinking" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admissions <i class="ion-android-arrow-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="early-years/admission-list">Vivekian's Early Years</a></li>
                <li><a type=submit target="_blank" href="includes/n5bb1caea2997e.pdf">Registration Form</a></li>
                <li><a type=submit target="_blank" href="includes/the_vivekian_arly_years.pdf">Registration Form TVEY</a></li>
                <li><a type=submit target="_blank" href="includes/admission_form_svps.pdf">Admission Form</a></li>
                
                <!--<li><a type=submit target="_blank" href="includes/vivekin's_fee_slip.pdf">Fee Slip (Vivekian's Early Years)</a></li>-->
                <!--<li><a type=submit target="_blank" href="includes/svps_fee_slip.pdf">Fee Slip (SVPS)</a></li>-->
                <!--<li><a type=submit target="_blank" href="includes/FEE STRUCTURE.pdf">Fee Structure</a></li>-->
                
                <!-- <li><a href="#">Music & Dance</a></li>
                <li><a href="#">Educational Camps & Tours</a></li>
                <li><a href="#">SVPS Clubs</a></li>
                <li><a href="special-awards">Special Awards</a></li> -->
                <!-- <li><a href="#">Green School Curriculum</a></li> -->
                <!-- <li><a href="#">Fests and Special Assemblies</a></li> -->
            </ul>
        </li>
        <!-- <li><a class="blinking" style="font-size: 14px; font-weight: bold;" href="early-years/admission-list">Admissions</a></li> -->

    </ul>

  </div>
</div>
</div>

</nav>
