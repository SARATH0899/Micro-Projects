<?php
include 'form_connect.php';

if(isset($_POST['submit'])){
	$user = array(
	'EvtName' => $_POST['event_name'],
	'EvtDate' => $_POST['event_date'],
	'EvtAddress' => $_POST['event_address'],
	
	'GrmName' => $_POST['groom_name'],
	'GrmAge' => $_POST['groom_age'],
	'GrmAddress' => $_POST['groom_address'],
	'GrmMobile' => $_POST['groom_mobile'],
	
	'BrdName' => $_POST['bride_name'],
	'BrdAge' => $_POST['bride_age'],
	'BrdAddress' => $_POST['bride_address'],
	'BrdMobile' => $_POST['bride_mobile'],
	
	'catering' => $_POST['catering_required'],
	'food_type' => $_POST['food_type'],
	
	'decoration' => $_POST['decorations_required'],
	'decoration_type' => $_POST['decoration_type'],
	
	'requirements' => $_POST['other_requirements']
	);
	$collection->insertOne($user);
	
	echo "Data Inserted!!!";
}
header("Location:homepage.php");

?>