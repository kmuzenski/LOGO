<!DOCTYPE html>
<html>

<?php require_once('header.php'); ?>

<body>



<?php require_once('nav.php'); ?>
<br><br><br><br><br><br>



<div id="hideThis">

<div class="jumbotron" id="jumbotron">
	<center>
	<h1>LOGO</h1>
	<h3>Mission statement</h3>
	<p>Paragraph paragraph paragraph. </p>
	</center>
</div>



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
