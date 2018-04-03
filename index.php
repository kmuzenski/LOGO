<!DOCTYPE html>
<html>

<?php require_once('header.php'); ?>

<body>



<?php require_once('nav.php'); ?>
<br><br><br><br><br><br>



<div id="hideThis">
<h1>LOGO</h1>

<br><br><br><br>
<p>Mission statement</p>
<br><br>

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
