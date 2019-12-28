<?php
include_once "header.php";
$total = 0
?>
<h5>One pack of 2 pictures costs $2 per pack.</h5>

<form action="purchase2.php" method="post">
	<p>How many packs of pictures do you want?</p>
	<select name="packs">
	  <option value="1">1</option>
	  <option value="2">2</option>
	  <option value="3">3</option>
	  <option value="4">4</option>
	  <option value="5">5</option>
	  <option value="6">6</option>
	  <option value="7">7</option>
	  <option value="8">8</option>
	  <option value="9">9</option>
	  <option value="10">10</option>
	</select>
	<input type="submit" value="Submit">
	<h1></h1>
</form>

<h2>You want</h2>

<h1></h1>

<?php
for($i=0; $i < $_POST["packs"]; $i++){
?>
	<img src="img1.jpg" class="img1">
	<img src="img2.jpg" class="img2">

<?php
}
?>
<h2>packs of pictures</h2>
<?php
$total = $_POST["packs"] * 2
?>

<h2>Your total cost is</h2>

<?php
echo $total;
include_once "footer.php";
?>
