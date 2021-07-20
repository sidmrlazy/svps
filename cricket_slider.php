
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<div class="w3-content w3-section" style="max-width:auto;">
  <img class="cricketSlides" src="assets/updates/cricket_0.jpg" style="width:100%">
  <img class="cricketSlides" src="assets/updates/cricket_1.jpg" style="width:100%">
</div>

<script>
var mycricket = 0;
cricketSlides();

function cricketSlides() {
  var i;
  var x = document.getElementsByClassName("cricketSlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  mycricket++;
  if (mycricket > x.length) {mycricket = 1}    
  x[mycricket-1].style.display = "block";  
  setTimeout(cricketSlides, 2000); // Change image every 2 seconds
}
</script>
