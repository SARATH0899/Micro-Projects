<?php
require '../vendor/autoload.php';

$client = new MongoDB\Client('mongodb://localhost:27017');
$db = $client->bloodbank;
$collection = $db->donor;
?>


<?php
$donors = $collection->find();
?>

<html>
<head>
<title>View Donors</title>
<link rel="stylesheet" href="style.css">
<style>
    table {
        border: 1px solid black;
        border-collapse: collapse;
        margin: auto;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }
</style>
</head>
<body>
<div style="text-align: center;">
    <h2>Donor Details</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Mob No</th>
            <th>Address</th>
            <th>Age</th>
            <th>Blood Group</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php foreach ($donors as $donor) : ?>
            <tr>
                <td><?php echo $donor['name']; ?></td>
                <td><?php echo $donor['mobno']; ?></td>
                <td><?php echo $donor['address']; ?></td>
                <td><?php echo $donor['age']; ?></td>
                <td><?php echo $donor['bgroup']; ?></td>
                <td><a href="update.php?id=<?php echo $donor['_id']; ?>">Update</a></td>
                <td><a href="delete.php?id=<?php echo $donor['_id']; ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>
