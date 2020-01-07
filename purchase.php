<?php
include_once "header.php";
$total = 0
?>
<h5>One pack of 2 pictures costs $2 per pack.</h5>

<form action="purchase.php" method="post">
	<p>How many packs of pictures do you want?</p>
	<input type="number" name="packs">
	<input type="submit" value="Submit">
	<h1></h1>
</form>

<?php
if (!empty($_POST["packs"])) {
	for($i=0; $i < $_POST["packs"]; $i++){
	?>
		<img src="img1.jpg" class="img1">
		<img src="img2.jpg" class="img2">

	<?php
	}
	$total = $_POST["packs"] * 2;
}
?>

<h2>Your total cost is</h2>

<?php
echo $total;
include_once "footer.php";
?>
