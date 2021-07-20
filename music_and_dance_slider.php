
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<div class="w3-content w3-section" style="max-width:100%;">
  <img class="musicSlides img-fluid" src="assets/updates/AMH_5676.jpg"   style="width:100%">
  <img class="musicSlides img-fluid" src="assets/updates/AMH_6147.jpg" style="width:100%">
  <img class="musicSlides img-fluid" src="assets/updates/AMH_6250.jpg" style="width:100%">
  <img class="musicSlides img-fluid" src="assets/updates/AMH_7406.jpg" style="width:100%">
  <!-- <img class="musicSlides img-fluid" src="assets/updates/karatey_3.png" style="width:100%"> -->
</div>

<script>
var mymusic = 0;
musicSlides();

function musicSlides() {
  var i;
  var x = document.getElementsByClassName("musicSlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  mymusic++;
  if (mymusic > x.length) {mymusic = 1}    
  x[mymusic-1].style.display = "block";  
  setTimeout(musicSlides, 2000); // Change image every 2 seconds
}
</script>

