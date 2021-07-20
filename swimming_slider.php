
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<div class="w3-content w3-section" style="max-width:auto;">
   <img class="swimmingSlides" src="assets/updates/swimming_2.png" style="width:100%">
  <img class="swimmingSlides"  src="assets/updates/swimming_1.jpg" style="width:100%">
  
</div>

<script>
var myswimming = 0;
swimmingSlides();

function swimmingSlides() {
  var i;
  var x = document.getElementsByClassName("swimmingSlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myswimming++;
  if (myswimming > x.length) {myswimming = 1}    
  x[myswimming-1].style.display = "block";  
  setTimeout(swimmingSlides, 2000); // Change image every 2 seconds
}
</script>

 