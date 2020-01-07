<?php
include_once "header.php";
require_once __DIR__ . '/vendor/autoload.php';

use Phpml\Classification\KNearestNeighbors;

$number = 1;
for($i=0; $i < $number; $i++){
?>
	<img src="img1.jpg" class="img1">
	<img src="img2.jpg" class="img2">
<?php
}
include_once "footer.php";
?>
