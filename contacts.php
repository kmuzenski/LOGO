<!DOCTYPE html>
<html>

<?php require_once('header.php'); ?>

<body>



<?php require_once('nav.php'); ?>
<br><br><br><br><br><br>

<div class="container" id="hideThis">
	<div class="row divBorder">
		<div class="col-xs-12 col-md-12 col-lg-12">
			<center>
			<h1>Phone &amp; Email</h1>
			<h3>555-555-555<br> email000@here.com</h3>
		</center>
		</div>
	</div>
	<div class="row divBorder">
		<div class="col-xs-12 col-md-12 col-lg-12">
			<center>
			<h1>Social Media</h1>
			<h3>Instagram <br> Facebook </h3>
		</center>
		</div>
	</div>

</div> <!-- container -- >

<br><br><br><br><br>
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


</body>
</html>