
<?php

include 'form_connect.php';

if (isset($_GET['id'])) {
   $resu = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
}

if(isset($_POST['update'])){

   $collection->updateOne(
       ['_id' => new MongoDB\BSON\ObjectID($_GET['id'])],
       ['$set' => ['EvtDate' => $_POST['event_date'],
		'EvtAddress' => $_POST['event_address'],
		
		'GrmName' => $_POST['groom_name'],
		'GrmAge' => $_POST['groom_age'],
		'GrmAddress' => $_POST['groom_address'],
		'GrmMobile' => $_POST['groom_mobile'],
		
		'BrdName' => $_POST['bride_name'],
		'BrdAge' => $_POST['bride_age'],
		'BrdAddress' => $_POST['bride_address'],
		'BrdMobile' => $_POST['bride_mobile']]]
		
		
	   );
	echo "!!Data Updated";


   header("Location: view.php");
}


?>

<html>
<head>
<title> Update an Event </title>
<style>
        header {
            background-color: Gray;
            padding: 20px;
            color: #fff;
        }
		h1 {
            margin: 0;
        }
		body {
            font-family: Arial, sans-serif;
            background-color: lightblue;
            margin: 0;
            padding: 0;
        }
        
        .container {
			max-width: 500px;
			margin: 0 auto;
			padding: 20px;
			background-color: #f9f9f9;
			border: 1px solid #ddd;
			border-radius: 5px;
			background-color: lightgreen;
			box-shadow: 0 0 10px rgba(0, 0, 255, 0.5); 
		}
		
        .no-underline {
        text-decoration: none;
    }
	
    </style>
</head>
<body>
<header>
        <h1><center> UPDATE AN EVENT </center></h1>
        <a href="edit2.php"  class="no-underline"><h3>Back to previous page </h3></a>
    </header>
	<div class="container">
<form  method="POST">
<center>

<label for="event_date">Event Date:</label>
<input type="date" name="event_date"    value="<?php echo $resu->EvtDate;?>"><br><br>
<label for="event_address">Event Address:</label>
<input type="text" name="event_address"   value="<?php echo $resu->EvtAddress;?>"><br><br>
<label for="groom_name">Groom Name:</label>
<input type="text" name="groom_name"   value="<?php echo $resu->GrmName;?>"><br><br>
<label for="groom_age">Groom Age:</label>
<input type="text" name="groom_age"   value="<?php echo $resu->GrmAge;?>"><br><br>
<label for="groom_address">Groom Address:</label>
<input type="text" name="groom_address"   value="<?php echo $resu->GrmAddress;?>"><br><br>
<label for="groom_mobile">Groom Mobile:</label>
<input type="text" name="groom_mobile"   value="<?php echo $resu->GrmMobile;?>"><br><br>
<label for="bride_name">Bride Name:</label>
<input type="text" name="bride_name"   value="<?php echo $resu->BrdName;?>"><br><br>
<label for="bride_age">Bride Age:</label>
<input type="text" name="bride_age"   value="<?php echo $resu->BrdAge;?>"><br><br>
<label for="bride_address">Bride Address:</label>
<input type="text" name="bride_address"   value="<?php echo $resu->BrdAddress;?>"><br><br>
<label for="bride_mobile">Bride Mobile:</label>
<input type="text" name="bride_mobile"   value="<?php echo $resu->BrdMobile;?>"><br><br>

<input type="submit" name="update" value="Update">
</center>
</div>

</form>
</body>
</html>