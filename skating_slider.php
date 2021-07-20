<?php  ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<div class="w3-content w3-section" style="max-width:auto;">
  <img class="skatingSlides" src="assets/updates/skating-2.jpg" style="width:100%">
  <img class="skatingSlides" src="assets/updates/skating.jpg" style="width:100%">
</div>

<script>
var myskating = 0;
skatingSlides();

function skatingSlides() {
  var i;
  var x = document.getElementsByClassName("skatingSlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myskating++;
  if (myskating > x.length) {myskating = 1}    
  x[myskating-1].style.display = "block";  
  setTimeout(skatingSlides, 2000); // Change image every 2 seconds
}
</script>
