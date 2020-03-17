<?php
$folder = "";
$folder =  $_GET['dept'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<style>
.mySlides {display:none;}
</style>
</head>
<body>
<div>
<form method="get" action="SLideshow-home.html">
   <button style="position: absolute; width: 7vw;font-size: 1.3vw; background-color:#66e0ff;">&#10094; Back</button>
</form>

<h2 class="w3-center" style = "font-size: 3.5vw;">

Doctor's Profile</h2>


<div class="w3-content w3-display-container">
  <img class="mySlides" src="<?php echo $folder;?>/img_snowtops.jpg" style="width:100%">
  <img class="mySlides" src="<?php echo $folder;?>/img_lights.jpg" style="width:100%">
  <img class="mySlides" src="<?php echo $folder;?>/img_mountains.jpg" style="width:100%">
  <img class="mySlides" src="<?php echo $folder;?>/img_forest.jpg" style="width:100%">
  

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
  
</div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

var slideIndex1 = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex1++;
  if (slideIndex1 > x.length) {slideIndex1 = 1}
  x[slideIndex1-1].style.display = "block";
  setTimeout(carousel, 20000); // Change image every 2 seconds
}
</script>

</body>
</html>