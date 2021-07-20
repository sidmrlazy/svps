<?php  ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.color
{
 color:white;
}
.op{
/*background-color:black;*/
opacity:0.8;
z-index:10;
}
.campus_slider_css {
  position: relative;
  text-align: center;
}
.top-left {
  position: absolute;
  top: 90px;
  left: 80px;
}

.bottom-right {
  position: absolute;
  bottom: 144px;
  right: 51px;
  left: 51px;
}
@media screen and (max-width: 600px) {
.ourstudent {
 display: none;
  }
}
@media screen and (max-width: 600px) {
.top-left {
    position: absolute;
    top: 24px;
    left: -15px;
}
}
@media screen and (max-width: 600px) {
.mobileviewcontent1 {
 display: none;
  }
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>

<div class="campus_slider_css op">
  <img class="campusSlides op" src="assets/updates/campus.jpeg" alt="Snow" style="width:100%;">
  <img class="campusSlides op" src="assets/updates/campus1.jpeg" style="width:100%">
  <img class="campusSlides op" src="assets/updates/campus3.jpeg" style="width:100%">
  <img class="campusSlides op" src="assets/svps-college/svps-about-bg.png" style="width:100%">
  <img class="campusSlides op" src="assets/updates/campus2.jpeg" style="width:100%">
  <div class="top-left mobileviewourstudent">
      <div class="col-sm-12">
                <div class="section__subtitle light__subtitle ourstudent">Our students about <span>lctrs.</span></div>
                <h2 class="section__title light__title color ourschool">Our School Campus</h2>
            </div>
      </div>
  
  <div class="bottom-right mobileviewcontent1">
        <div class="testimonials__item">
          <div class="testimonials_item__title"><span style="color:#fa6e4f">LCTRS</span><span class="color"> is the best choice for learning!</span></div>
                <div class="testimonials_item__text color">The school campus is spread over 5 acres in the heart of twin cities of Yamunanagar- Jagadhri. The school campus is adorned with huge trees on all the four sides. Thus acting as a source of fresh air for the school as well as the surrounding areas. The school building is grand, airy, brightly lit up, well ventilated and has been architecturally designed considering all the safety measures. </div>
                </div>
  </div>
 
</div>
</div>

<script>
var mycampus = 0;
campusSlides();

function campusSlides() {
  var i;
  var x = document.getElementsByClassName("campusSlides");
  for (i = 0; i < x.length; i++) {
   x[i].style.display = "none"; 
  }
  mycampus++;
 if (mycampus > x.length) {mycampus = 1}   
 x[mycampus-1].style.display = "block"; 
  setTimeout(campusSlides, 2000); // Change image every 2 seconds
}
</script>
