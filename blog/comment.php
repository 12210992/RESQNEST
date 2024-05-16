<?php
// Start session to check user login status
session_start();

// Check if user or admin is logged in
if(isset($_SESSION['user_name']) || isset($_SESSION['admin_name'])) {
    // Check if the form is submitted
    if(isset($_SESSION['user_name'])) {
    // User is logged in, set username
    $name = $_SESSION['user_name'];
} elseif(isset($_SESSION['admin_name'])) {
    // Admin is logged in, set username
    $name = $_SESSION['admin_name'];
}
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

        
        $comment = $_POST['comment'];
        $post_id = $_POST['post_id'];

        // SQL to insert data into comments table
        $sql = "INSERT INTO comments (post_id, name, comment, date) VALUES ('$post_id', '$name', '$comment', NOW())";

        if (mysqli_query($conn, $sql)) {
            // Comment inserted successfully
            echo "Comment posted successfully.";
        } else {
            // Error in inserting comment
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        // Close the database connection
        mysqli_close($conn);
    } else {
        // If the form is not submitted, redirect to the homepage or display an error message
        header("Location: blog.php");
        exit;
    }
} else {
    // If no user or admin is logged in, prompt to login
    header("Location: read.php");
    exit;
}
?>
