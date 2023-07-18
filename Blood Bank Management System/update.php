<?php
require '../vendor/autoload.php';

$client = new MongoDB\Client('mongodb://localhost:27017');
$db = $client->bloodbank;
$collection = $db->donor;

// Check if the form is submitted
if (isset($_POST['is_submit'])) {
    try {
        // Get the donor ID from the URL parameter
        $donorId = $_GET['id'];

        // Update the donor's information in the database
        $updateResult = $collection->updateOne(
            ['_id' => new MongoDB\BSON\ObjectID($donorId)],
            ['$set' => [
                'name' => $_POST['name'],
                'mobno' => $_POST['mobno'],
                'address' => $_POST['address'],
                'age' => $_POST['age'],
                'bgroup' => $_POST['bgroup']
            ]]
        );

        if ($updateResult->getModifiedCount() > 0) {
            echo '<script>alert("Donor information updated successfully!");</script>';
        } else {
            echo '<script>alert("No changes made to donor information.");</script>';
        }
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

// Retrieve the donor's information
$donorId = $_GET['id'];
$donor = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($donorId)]);
?>

<html>
<head>
<title>Update Donor</title>
<link rel="stylesheet" href="style.css">
</head>
<body><center>
<h2>Update Donor Information</h2>
<form method="post">
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" value="<?php echo $donor['name']; ?>"></td>
        </tr>
        <tr>
            <td>Mob No:</td>
            <td><input type="text" name="mobno" value="<?php echo $donor['mobno']; ?>"></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><input type="text" name="address" value="<?php echo $donor['address']; ?>"></td>
        </tr>
        <tr>
            <td>Age:</td>
            <td><input type="text" name="age" value="<?php echo $donor['age']; ?>"></td>
        </tr>
        <tr>
            <td>Blood Group:</td>
            <td><input type="text" name="bgroup" value="<?php echo $donor['bgroup']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Update" name="is_submit"></td>
        </tr>
    </table>
</form>
<a href="view.php">Back</a>
<center>
</body>
</html>
