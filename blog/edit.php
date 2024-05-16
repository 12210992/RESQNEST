<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog</title>
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
<h1 style="color: white;">Edit Blog</h1>
</header>

    <main>
        <section style="background-color: white; color:#8B4513; width: 900px; padding: 50px; margin-left: 180px; text-align: center;"  class="container">
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_GET['id'];

    // Prepare and bind parameters
    $stmt = $conn->prepare("UPDATE posts SET title=?, author=?, content=?, date=NOW(), image=? WHERE id=?");
    $stmt->bind_param("ssssi", $title, $author, $content, $image, $id);

    // Set parameters and execute
    $title = $_POST["title"];
    $author = $_POST["author"];
    $content = $_POST["content"];
    $image = $_POST["image"];
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "<p class='success' style='font-size: 30px'>Blog updated successfully.</p>";
    } else {
        echo "<p class='error'>Error updating blog: " . $conn->error . "</p>";
    }

    // Close statement
    $stmt->close();
}

$id = $_GET['id'];
$selectSql = "SELECT * FROM posts WHERE id = $id;";
$result = mysqli_query($conn, $selectSql);

echo "<form method='post'>";
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<label for='title'>Title:</label><br>";
    echo "<input style='height: 25px; width: 400px;' type='text' name='title' value='{$row['title']}'><br><br>";
    echo "<label for='author'>Author Name:</label><br>";
    echo "<input style='height: 25px; width: 400px;' type='text' name='author' value='{$row['author']}'><br><br>";
    echo "<label for='content'>Content:</label><br>";
    echo "<textarea style='height: 300px; width: 800px;' name='content'>{$row['content']}</textarea><br><br>";
    echo "<label for='image'>Image:</label><br>";
    echo "<input style='height: 25px; width: 400px;' type='text' name='image' value='{$row['image']}'><br><br>";
    echo "<button class='custom-button' type='submit' name='submit'>Submit</button>";
    echo "</form>";
} else {
    echo "<p class='error'>Blog not found.</p>";
}

// Close the database connection
$conn->close();
?>

        </section>
    </main>

</body>
</html>