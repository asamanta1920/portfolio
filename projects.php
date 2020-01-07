<?php
include_once "header.php";

include_once "connection.php";

$sql = "SELECT id, name, link, description FROM Projects;";

$result = $conn->query($sql);
?>

<?php

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<a href='/project.php?id=".$row['id']."'>". $row['name']."</a>". "<br>";
    }
} else {
    echo "0 results";
}

//Form should have Name, Link, Desc
//When submit is clicked it should call:
//create_project('myproject [name]', 'mylink [link]', 'desc');

?>
<form action="projects.php" method="post">
	<p>Id:</p>
	<input type="text" name="my_id">
	<p>Name:</p>
	<input type="text" name="my_name">
	<p>Link:</p>
	<input type="text" name="my_link">
	<p>Description:</p>
	<input type="text" name="my_description">
	<input type="submit" value="Submit">
<?php
	create_project($_POST["my_id"], $_POST["my_name"], $_POST["my_link"], $_POST["my_description"]);
?>
</form>

<?php

function create_project($id, $name, $link, $description) {
	$sql1 = "INSERT INTO Projects (id, name, link, description) VALUES ($id, $name, $link, $description);";

	$result1 = $conn->query($sql1);
}

$conn->close();
include_once "footer.php";
?>
