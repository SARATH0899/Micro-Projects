<?php
require '../vendor/autoload.php';

$con = new MongoDB\Client("mongodb://localhost:27017");

//echo $con;
$db = $con->MicroProject;
//echo "database selected!!!";

//$collection = $db -> createCollection("Events");
//echo "Collection created successfully!!!";

$collection = $db->Events;
//echo $collection;



?>