<?php include("config.php");

echo $id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM aboutus WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: aboutUs.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
