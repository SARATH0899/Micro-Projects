<?php
require '../vendor/autoload.php';

$con = new MongoDB\Client("mongodb://localhost:27017");

//echo $con;
$db = $con->MicroProject;
//echo "database selected!!!";

//$collection = $db -> createCollection("Login_Credendials");
//echo "Collection created successfully!!!";

$collection = $db->Login_Credendials;
//echo $collection;

?>