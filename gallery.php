
<!DOCTYPE html>
<html>

<?php require_once('header.php'); ?>

<body>
<?php require_once('nav.php'); ?>
<br><br><br><br>

<div class="container" id="hideThis">
  <div class="row" id="hideThis">
		<div class="col-xs-12 col-md-12 col-lg-12" id="hideThis">
		<center>
		<h2> Gallery</h2><br>
    <p>Paragraph Here</p>
		</center>
		</div>
	</div>
</div>

<br>

<div class="container" id="hideThis">
	<div class="row" id="hideThis">
		<div class="col-xs-12 col-md-12 col-lg-12" id="hideThis">


<div class="slideshow-container" id="hideThis">

<div class="mySlides">
  <center>
  <img src="assets/img/one.jpg">
  </center>
  <div class="numbertext"><center>1 / 4</center></div>

</div>

<div class="mySlides">
  <center>
  <img src="assets/img/two.jpg" style="width:35%">
  </center>
  <div class="numbertext"><center>2 / 4</center></div>
</div>

<div class="mySlides">
  <center>
  <img src="assets/img/three.jpg" style="width:35%">
  </center>
  <div class="numbertext"><center>3 / 4</center></div>
</div>

<div class="mySlides">
  <center>
  <img src="assets/img/four.jpg" style="width:35%">
  </center>
  <div class="numbertext"><center>4 / 4</center></div>
</div>

<center>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</center>



<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  
</div>

		</div><!-- col row container -->
	</div>
</div>
</div>

<br><br><br><br>
<br><br><br><br>



<?php require_once('footer.php'); ?>
<script>
function navHide() {
  var x = document.getElementById("hideThis");
  if (x.style.display ==="none") {
    x.style.display = "block";
  }
  else {
    x.style.display = "none";
  }
}
</script>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>
