<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <title>Web page</title>

<!-- slideshow picture CSS -->
<style type="text/css">

* {box-sizing: border-box}
/*body {font-family: Verdana, sans-serif; margin:0}*/
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 500px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}


</style>

<body>
 <div class="menu">
        <?php include 'navBar.php';?>
</div>
</body>
</head>


<body>
<div class="col-5 col-s-5">
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
    <img src="c.png" style="width:100%">

</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
    <img src="a.jpg" style="width:100%">

</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
    <img src="b.png" style="width:100%">

</div>



</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>

</body>


</div>
        <div class="col-7 col-s-7">
                 <div class="aside">
            <p>
            <h3>Tuition.com is an online platform where parents, students and home tutors can easily connect with
                each other. If you have a passion for teaching, we can help you find your next big tuition job that fits
                your skills, favorable location, class and subjects..</h3>
            </p>
            <p>
            Tuition.com is a platform where parents, students and home tutors can easily connect with each other.
                We provide qualified private home tutors to help your child with studies and helping them perform better
                in exams. We are a group of 80,000+ home tutors and 30,000+ satisfied parents/students in Dhaka
                ,Chattagram,Rajshahi,Sylhet,khulna,Barishal,Rangpur,Mymensingh cities for different academic and
                professional subjects.
            </p>
        </div></div>

    <br><br><br>



    <div class="Ffooter">
        <?php include 'Footer.php';
?></div>


</body>

</html>