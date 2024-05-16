<?php
session_start();

// Check if user or admin is logged in
if(isset($_SESSION['user_name']) || isset($_SESSION['admin_name'])) {
    // Check if form is submitted
    if (isset($_POST['submit'])) {
        // Database connection parameters
        $servername = "localhost:3308";
        $db_username = "root";
        $password = "";
        $dbname = "CP";

        // Create connection
        $conn = new mysqli($servername, $db_username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get form data
        $title = $_POST['title'];
        $author = $_POST['author'];
        $content = $_POST['content'];
        $image = $_POST['image'];

        // Prepare and execute SQL statement
        $sql = "INSERT INTO `posts` (`title`, `author`, `content`, `date`, `image`) VALUES (?, ?, ?, CURRENT_TIMESTAMP, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $title, $author, $content, $image);
        $stmt->execute();

        if ($stmt->affected_rows > 0) { // Check if insertion was successful
            header("Location: blog.php"); // Redirect to index.php on success
            exit();
        } else {
            echo "ERROR: " . $stmt->error;
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
} else {
    // If no user or admin is logged in, prompt to login
    header("Location: ../login.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="images/logo.jpeg" />
<title>Your Blog</title>
<style>
        /* Style for the button */
        .custom-button {
            background-color: #8B4513; /* Brown */
            color: #ffffff; /* White */
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        /* Hover effect for the button */
        .custom-button:hover {
            background-color: #7c3514; /* Darker brown on hover */
        }
        /* Style for the "Back" link */
        .back-link {
            color: #8B4513;
            background-color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            position: absolute;
            top: 20px;
            left: 20px;
        }
    </style>
</head>

<body  style="background-color: #8B4513" >
<header style="height: 100px; padding-top: 6px; text-align: center; font-size: 20px;">
<a href="blog.php" class="back-link">Back</a>
<h1 style="color: white;">Blogs</h1>
</header>
<div style="background-color: white; color:#8B4513; width: 900px; padding: 50px; margin-left: 180px; text-align: center;"  class="container">
    <h2>Submit your blog</h2>
    <form action="submit_post.php" method="POST" enctype="multipart/form-data">
        <label for="title">Title:</label><br>
        <input style="height: 25px; width: 400px;" type="text" id="title" name="title" required><br><br>

        <label for="author">Author Name:</label><br>
        <input style="height: 25px; width: 400px;" type="text" id="author" name="author" required><br><br>
        
        <label for="content">Content:</label><br>
        <textarea style="height: 300px; width: 800px" id="content" name="content" rows="20" required></textarea><br><br>
        
        <label for="image">Image:</label><br>
        <input style="height: 25px; width: 400px;" type="text" id="image" name="image" required><br><br>
        
        <button class="custom-button" type="submit" name="submit">Submit</button>
    </form>
</div>

</body>
</html>
