<?php
// Database connection configuration
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "CP";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // SQL query to delete the flight record
    $deleteSql = "DELETE FROM posts WHERE id = $id;";

    if (mysqli_query($conn, $deleteSql)) {
        // deleted successfully
        echo "Successfully deleted";
    } else {
        // Error deleting flight
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Invalid flight ID
    echo "Invalid post ID";
}

// Close the database connection
mysqli_close($conn);
?>
