<?php

$user_id = 1;
    if(isset($_SESSION['user_id'])) {
        // User is logged in, set user_id
        $user_id = $_SESSION['user_id'];
    } elseif(isset($_SESSION['admin_id'])) {
        // Admin is logged in, set user_id
        $user_id = $_SESSION['admin_id'];
    }
// Database connection configuration
$servername = "localhost:3308"; // Update with your server details
$username = "root"; // Update with your database username
$password = ""; // Update with your database password
$dbname = "CP"; // Update with your database name

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the post ID and reaction from the AJAX request
if (isset($_POST['action'])) {
    $post_id = $_POST['post_id'];
    $action = $_POST['action'];
    
    switch ($action) {
        case 'like':
            $sql = "INSERT INTO rating_info (user_id, post_id, rating_action) 
                    VALUES ($user_id, $post_id, 'like') 
                    ON DUPLICATE KEY UPDATE rating_action='like'";
            break;
        case 'dislike':
            $sql = "INSERT INTO rating_info (user_id, post_id, rating_action) 
                    VALUES ($user_id, $post_id, 'dislike') 
                    ON DUPLICATE KEY UPDATE rating_action='dislike'";
            break;
        case 'unlike':
            $sql = "DELETE FROM rating_info WHERE user_id=$user_id AND post_id=$post_id";
            break;
        case 'undislike':
            $sql = "DELETE FROM rating_info WHERE user_id=$user_id AND post_id=$post_id";
            break;
        default:
            exit("Invalid action");
    }

    // execute query to effect changes in the database ...
    mysqli_query($conn, $sql);
    echo getRating($post_id);
    exit(0);
}

  

// Get total number of likes for a particular post
function getLikes($id)
{
  global $conn;
  $sql = "SELECT COUNT(*) FROM rating_info 
                  WHERE post_id = $id AND rating_action='like'";
  $rs = mysqli_query($conn, $sql);
  $result = mysqli_fetch_array($rs);
  return $result[0];
}

// Get total number of dislikes for a particular post
function getDislikes($id)
{
  global $conn;
  $sql = "SELECT COUNT(*) FROM rating_info 
                  WHERE post_id = $id AND rating_action='dislike'";
  $rs = mysqli_query($conn, $sql);
  $result = mysqli_fetch_array($rs);
  return $result[0];
}
// Get total number of likes and dislikes for a particular post
function getRating($id)
{
    global $conn;
    $rating = array();
    $likes_query = "SELECT COUNT(*) FROM rating_info WHERE post_id = $id AND rating_action='like'";
    $dislikes_query = "SELECT COUNT(*) FROM rating_info WHERE post_id = $id AND rating_action='dislike'";
    $likes_rs = mysqli_query($conn, $likes_query);
    $dislikes_rs = mysqli_query($conn, $dislikes_query);
    $likes = mysqli_fetch_array($likes_rs);
    $dislikes = mysqli_fetch_array($dislikes_rs);
    $rating = [
          'likes' => $likes[0],
          'dislikes' => $dislikes[0]
    ];
    return json_encode($rating);
}

// Check if user already likes post or not
function userLiked($post_id)
{
    global $conn, $user_id;
    $sql = "SELECT * FROM rating_info WHERE user_id=$user_id AND post_id=$post_id AND rating_action='like'";
    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
}

// Check if user already dislikes post or not
function userDisliked($post_id)
{
    global $conn, $user_id;
    $sql = "SELECT * FROM rating_info WHERE user_id=$user_id AND post_id=$post_id AND rating_action='dislike'";
    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
}


// Close the database connection
mysqli_close($conn);
?>
