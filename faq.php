<!DOCTYPE html>
<html>

<?php require_once('header.php'); ?>

<body>



<?php require_once('nav.php'); ?>
<br><br><br><br><br><br>

<div class="container" id="hideThis">

<h1>Frequently Asked Questions</h1>
<br>
<h3>Q: Questions are shown here</h3>
<p>A: Answer is shown here</p>
<br><br>
<h3>Q: Questions are shown here</h3>
<p>A: Answer is shown here</p>
<br><br>
<h3>Q: Questions are shown here</h3>
<p>A: Answer is shown here</p>
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