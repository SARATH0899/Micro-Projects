<?php

include 'form_connect.php';

$id=$_GET['id'];

$collection->deleteOne(['_id' => new MongoDB\BSON\OBJECTID($id)]);

header("Location:view.php");

?>