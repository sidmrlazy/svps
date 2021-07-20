<?php ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<div class="w3-content w3-section" style="max-width:auto;">
  <img class="footballSlides" src="assets/updates/football_1.jpeg" style="width:100%">
   <img class="footballSlides" src="assets/updates/football_2.jpg" style="width:100%">
  
  
</div>

<script>
var myfootball = 0;
footballSlides();

function footballSlides() {
  var i;
  var x = document.getElementsByClassName("footballSlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myfootball++;
  if (myfootball > x.length) {myfootball = 1}    
  x[myfootball-1].style.display = "block";  
  setTimeout(footballSlides, 2000); // Change image every 2 seconds
}
</script>

 