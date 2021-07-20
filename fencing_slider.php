<?php ?>
<?php ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<div class="w3-content w3-section" style="max-width:auto;">
  <img class="fencingSlides" src="assets/updates/fencing.jpg" style="width:100%">
   <img class="fencingSlides" src="assets/updates/fencing2.jpg" style="width:100%">


</div>

<script>
var myfencing = 0;
fencingSlides();

function fencingSlides() {
    
  var i;
  var x = document.getElementsByClassName("fencingSlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myfencing++;
  if (myfencing > x.length) {myfencing = 1}
  x[myfencing-1].style.display = "block";
  setTimeout(fencingSlides, 2000); // Change image every 2 seconds
}
</script>
