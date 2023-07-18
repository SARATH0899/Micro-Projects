<?php
include 'form_connect.php';
$result = $collection->find();
?>

<html>
<head>
<title> Registered Events Schedule </title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
<h1 style="background-color:Blue"><center> Registered Event Schedules </center></h1>
<table border="2" bgcolor="Gold">
<tr>
<th>Event Name</th>
<th>Event Date</th>
<th>Event Address</th>
<th>Groom Name</th>
<th>Groom Age</th>
<th>Groom Address</th>
<th>Groom Mobile</th>
<th>Bride Name</th>
<th>Bride Age</th>
<th>Bride Address</th>
<th>Bride Mobile</th>
<th>Catering</th>
<th>Food Type</th>
<th>Decorations</th>
<th>Decoration Type</th>
<th>Other Requirements</th>

</tr>

<?php
	foreach ($result as $res) {
?>
<tr>
<td><?php echo $res['EvtName'];?></td>
<td><?php echo $res['EvtDate'];?></td>
<td><?php echo $res['EvtAddress'];?></td>

<td><?php echo $res['GrmName'];?></td>
<td><?php echo $res['GrmAge'];?></td>
<td><?php echo $res['GrmAddress'];?></td>
<td><?php echo $res['GrmMobile'];?></td>

<td><?php echo $res['BrdName'];?></td>
<td><?php echo $res['BrdAge'];?></td>
<td><?php echo $res['BrdAddress'];?></td>
<td><?php echo $res['BrdMobile'];?></td>

<td><?php echo $res['catering'];?></td>
<td><?php echo $res['food_type'];?></td>

<td><?php echo $res['decoration'];?></td>
<td><?php echo $res['decoration_type'];?></td>

<td><?php echo $res['requirements'];?></td>
<td><a href="<?php echo "delete.php?id=$res[_id]";?>"onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>

<?php
	}
?>	

</table>
<a href="homepage.php"> <h3>Back to Dashboard</h3></a>
</body>
</html>