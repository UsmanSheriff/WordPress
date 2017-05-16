<?php
$servername = "localhost";
$username = "wordpressuser";
$password = "bond007";
$dbname = "wordpress";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE wp_options SET option_value='My own WordPress' WHERE option_id=4";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
