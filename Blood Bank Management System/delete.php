<?php
require '../vendor/autoload.php';

$client = new MongoDB\Client('mongodb://localhost:27017');
$db = $client->bloodbank;
$collection = $db->donor;

// Check if the donor ID is provided in the URL
if (isset($_GET['id'])) {
    try {
        // Get the donor ID from the URL parameter
        $donorId = $_GET['id'];

        // Delete the donor's information from the database
        $deleteResult = $collection->deleteOne(['_id' => new MongoDB\BSON\ObjectID($donorId)]);

        if ($deleteResult->getDeletedCount() > 0) {
            echo '<script>alert("donor information deleted successfully!");</script>';
        } else {
            echo '<script>alert("donor not found.");</script>';
        }
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

// Redirect back to the view page after deletion
header('Location: view.php');
exit;
?>
