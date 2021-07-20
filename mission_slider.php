<?php  ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<div class="w3-content w3-section" style="max-width:100%;">
   <img class="missionSlides" src="assets/updates/mission.jpg" style="width:100%;">
  <img class="missionSlides" src="assets/updates/cricket-2.jpg" style="width:100%;">
  <img class="missionSlides" src="assets/updates/cricket-3.jpg" style="width:100%;">
  <img class="missionSlides" src="assets/updates/cricket-4.jpg" style="width:100%;">
</div>

<script>
var mymission = 0;
missionSlides();

function missionSlides() {
  var i;
  var x = document.getElementsByClassName("missionSlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  mymission++;
  if (mymission > x.length) {mymission = 1}    
  x[mymission-1].style.display = "block";  
  setTimeout(missionSlides, 2000); // Change image every 2 seconds
}
</script>

 