
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<div class="w3-content w3-section" style="max-width:auto;">
  
  <img class="cyclerally_slider img-fluid" src="assets/updates/cycle1.jpeg" style="width:100%">
  <img class="cyclerally_slider img-fluid" src="assets/updates/cycle2.jpeg" style="width:100%">
  <img class="cyclerally_slider img-fluid" src="assets/updates/cycle3.jpeg" style="width:100%">
  <img class="cyclerally_slider img-fluid" src="assets/updates/cycle4.jpeg" style="width:100%">
</div>

<script>
var mycycle = 0;
cyclerally_slider();

function cyclerally_slider() {
  var i;
  var x = document.getElementsByClassName("cyclerally_slider");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  mycycle++;
  if (mycycle > x.length) {mycycle = 1}    
  x[mycycle-1].style.display = "block";  
  setTimeout(cyclerally_slider, 2000); // Change image every 2 seconds
}
</script>
