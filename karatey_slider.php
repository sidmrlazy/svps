
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<div class="w3-content w3-section" style="max-width:auto;">
  <img class="karateySlides img-fluid" src="assets/updates/karatey.jpg" style="width:100%">
  <img class="karateySlides img-fluid" src="assets/updates/karatey_0.png" style="width:100%">
  <img class="karateySlides img-fluid" src="assets/updates/karatey_1.png" style="width:100%">
  <img class="karateySlides img-fluid" src="assets/updates/karatey_2.jpg" style="width:100%">
  <img class="karateySlides img-fluid" src="assets/updates/karatey_3.png" style="width:100%">
</div>

<script>
var mykaratey = 0;
karateySlides();

function karateySlides() {
  var i;
  var x = document.getElementsByClassName("karateySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  mykaratey++;
  if (mykaratey > x.length) {mykaratey = 1}    
  x[mykaratey-1].style.display = "block";  
  setTimeout(karateySlides, 2000); // Change image every 2 seconds
}
</script>
