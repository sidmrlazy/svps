<?php ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<div class="w3-content w3-section" style="max-width:auto;">
  <img class="tennisSlides" src="assets/updates/Tennis_Tournament.jpg" style="width:100%">
   <!-- <img class="tennisSlides" src="assets/updates/table_tennis.jpg" style="width:100%"> -->
  
  
</div>

<script>
var mytennis = 0;
tennisSlides();

function tennisSlides() {
  var i;
  var x = document.getElementsByClassName("tennisSlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  mytennis++;
  if (mytennis > x.length) {mytennis = 1}    
  x[mytennis-1].style.display = "block";  
  setTimeout(tennisSlides, 2000); // Change image every 2 seconds
}
</script>

 