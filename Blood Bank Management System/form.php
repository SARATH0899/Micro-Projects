  
  <html>
  <head>
  <title>SignIn</title>
  <link rel="stylesheet" href="style.css">
  </head>

	<body>
		<center><b><h1>Blood Bank Management System</h1></b></center>

	<?php
    require '../vendor/autoload.php';



$client = new MongoDB\Client('mongodb://localhost:27017');
//echo $client;
$db = $client ->bloodbank;
//$collection=$db->createCollection("donor");
$collection=$db->donor;

if (isset($_POST['is_submit'])) {
    try {
        $insertOneResult = $collection->insertOne([
            'name' => $_POST['name'],
            'mobno' => $_POST['mobno'],
            'address' => $_POST['address'],
            'age' => $_POST['age'],
            'bgroup' => $_POST['bgroup']
        ]);

        if ($insertOneResult->getInsertedCount() > 0) {
            echo '<script>alert("Inserted Successfully!");</script>';
			header('Location:view.php');

        }
		
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>


<form method="post" action="#">
	<div id="main" style="  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; margin-left:500px; width:300px;padding-left:5px;padding-right:5px;padding-bottom:5px;border-radius:3px" >
	<div class="h-tag">
        <center><b><h2 style="margin-top:150px;color:red;padding-top:10px">DONOR DETAILS</h2></b></center>
	
	</div>
	
	<div class="login">
	<table cellspacing="2" align="center" cellpadding="8" border="0">
	<tr>
	<td align="right">Name :</td>
	<td><input type="text" placeholder="Full Name" class="tb" name="name"/></td>
	</tr>
	<tr>
	<td align="right">Mob No :</td>
	<td><input type="text" placeholder="+91 0000000000" class="tb" name="mobno"/></td>
	</tr>
	<tr>
	<td align="right">Address :</td>
	<td><input type="text" placeholder="Address" class="tb" name="address"/></td>
	</tr>
	<tr>
	<td align="right">Age :</td>
	<td><input type="text" placeholder="Age" class="tb" name="age"/></td>
	</tr>
	<tr>
	<td align="right">B Group :</td>
	<td><input type="text" placeholder="Blood Group" class="tb" name="bgroup"/></td>
	</tr>
	<tr>
	<td></td>
	<td>

	<input type="submit" value="Submit" class="btn" name="is_submit" /></td>
	</tr>
	</table>
	</div>

	</div>
	<a href="view.php">Donor Details</Details></a>
</form>
	</body>
	</html>


  