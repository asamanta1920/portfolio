<?php
include_once "header.php";

//GET http://portfolio.adrita/projects.php?id=3
$projectid = $_GET['id'];

include_once "connection.php";

$sql = "SELECT name, link, description FROM Projects WHERE id = $projectid;";

$row = $conn->query($sql);

$result = $row->fetch_array(MYSQLI_ASSOC);

if (!empty($result)) {
    ?>

    <div class="project">
        <h1><?php print $result['name']; ?></h1>
        <?php if (!empty($result['link'])):?>
            <h2>Link:</h2> <a href="<?php print $result['link']; ?>"><?php print $result['link']; ?></a>
        <?php
        endif;
        if (!empty($result['description'])):?>
            <h2>Description:</h2> <p><?php print $result['description']; ?></p>
        <?php
        endif;
        ?>
    </div>

    <?php
    // print "<pre>".print_r($result,1)."</pre>";
} else {
    echo "0 results";
}



//Form should have Name, Link, Desc
//When submit is clicked it should call:
//create_project('myproject [name]', 'mylink [link]', 'desc');


$conn->close();

function create_project($name, $link, $desc){
//Insert into database


}

include_once "footer.php";
?>
