<?php include('like_dislike.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pet-Express</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/logo.jpeg" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
      .posts-wrapper {
  width: 50%;
  margin: 20px auto;
}
.post {
  width: 90%;
  margin: 20px auto;
  padding: 10px 5px 0px 5px;
}
.post-info {
  margin: 10px auto 0px;
  padding: 5px;
}
.fa {
  font-size: 1.2em;
}
.fa-thumbs-down, .fa-thumbs-o-down {
  transform:rotateY(180deg);
}
.logged_in_user {
  padding: 10px 30px 0px;
}
i {
  color: white;
}
    </style>
  </head>
  <body>
  <?php
// Start session to check user login status
session_start();

// Initialize username variable
$username = "Login";

// Check if user is logged in
if(isset($_SESSION['user_name'])) {
    // User is logged in, set username
    $username = $_SESSION['user_name'];
} elseif(isset($_SESSION['admin_name'])) {
    // Admin is logged in, set username
    $username = $_SESSION['admin_name'];
} else {
  header("Location: ../login.php");
    // Neither user nor admin is logged in
    // You can handle this case differently, such as displaying a different message or redirecting to a login page
}
// Check if id parameter is set in the URL
$id = isset($_GET['id']) ? $_GET['id'] : null;
?>


<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php">Pet-Express</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item active"><a href="blog.php" class="nav-link">Blogs</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                <?php if ($username == "Login"): ?>
                    <li class="nav-item"><a href="../login.php" class="nav-link">Login</a></li>
                <?php else: ?>
                  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $username; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>


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

$id = $_GET['id'];
$selectSql = "SELECT * FROM posts WHERE id = $id;";
$result = mysqli_query($conn, $selectSql);

if ($result && mysqli_num_rows($result) > 0) {
    // Fetch the post data
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="hero-wrap" style="background-image: url('.$row['image'].');">';
        echo '<div class="overlay"></div>';
        echo '<div class="container">';
        echo '<div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">';
        echo '<div class="col-md-9 text-center d-flex align-items-end justify-content-center">';
        echo '<div class="text">';
        echo '<p class="breadcrumbs mb-2" data-scrollax="properties: { translateY: "30%", opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span class="mr-2"><a href="blog.php">Blog</a></span> <span>Blog Single</span></p>';
        echo '<h1 class="mb-4 bread">'.$row['title'].'</h1>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

        echo '<section class="ftco-section ftco-degree-bg" style="background-color: rgb(92, 25, 5) !important; color:aliceblue !important;">';
        echo '<div class="container">';
        echo '<div class="row">';
        echo '<div class="col-lg-10 order-md-last">';
        echo '<div style="margin-left: 150px;">';
        echo '<p><strong>Author: </strong>'.$row['author'].'</p>';
        echo '<p><strong>Date: </strong>'.substr($row['date'], 0, 10).'</p>';
        echo '<p style="text-align: justify;">'.$row['content'].'</p><br>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

        echo '<div class="posts-wrapper">';
        echo '<div class="post">';
        echo '<div class="post-info">';
         //if user likes post, style button differently
         echo '<i ';
         if (userLiked($row['id'])):
             echo 'class="fa fa-thumbs-up like-btn"';
         else:
             echo 'class="fa fa-thumbs-o-up like-btn"';
         endif;
         echo ' data-id="'.$row['id'].'"></i>';
         echo '<span class="likes">'.getLikes($row['id']).'</span>';
         echo '&nbsp;&nbsp;&nbsp;&nbsp;';
         
         // Thumbs down button
         echo '<i ';
         if (userDisliked($row['id'])):
             echo 'class="fa fa-thumbs-down dislike-btn"';
         else:
             echo 'class="fa fa-thumbs-o-down dislike-btn"';
         endif;
         echo ' data-id="'.$row['id'].'"></i>';
         echo '<span class="dislikes">'.getDislikes($row['id']).'</span>';
         
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

} else {
    echo "<p class='error'>Blog not found.</p>";
}
            ?>

<?php


// Check if the user is logged in and get the username
$logged_in_user = "";
if (isset($_SESSION['user_name'])) {
    $logged_in_user = $_SESSION['user_name'];
} elseif (isset($_SESSION['admin_name'])) {
    $logged_in_user = $_SESSION['admin_name'];
} else {
    die("No user logged in. Please log in to view or leave comments.");
}

// Get the post ID from GET parameters
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Fetch comments for the given post ID
$sql = "SELECT * FROM comments WHERE post_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

// Display comments
echo '<div class="pt-5 mt-5">';
echo '<h3 class="mb-5" style="color: aliceblue;">Comments</h3>';

if ($result->num_rows > 0) {
    echo '<ul class="comment-list">';
    
    while ($row = $result->fetch_assoc()) {
        $name = $row['name'];
        $comment = $row['comment'];
        $timestamp = substr($row['date'], 0, 10);

        echo '<li class="comment">';
        echo '<div class="vcard bio">';
        echo '<img style="height: 40px; width: 40px;" src="images/profile.jpg" alt="Image placeholder">';
        echo '</div>';
        echo '<div class="comment-body">';
        echo '<h3 style="color: aliceblue;">' . $name . '</h3>';
        echo '<div class="meta" style="opacity: 0.6; color: rgb(233, 173, 23);">' . $timestamp . '</div>';
        echo '<p>' . $comment . '</p>';
        echo '</div>';
        echo '</li>';
    }

    echo '</ul>';
} else {
    echo '<p>No comments found</p>';
}

echo '</div>';

// Close the database connection and the prepared statement
$stmt->close();
$conn->close();
?>

              
              <div class="comment-form-wrap pt-5">
    <h3 class="mb-5" style="color: aliceblue;">Leave a comment</h3>
    <form action="comment.php" method="POST" class="p-5 bg-light" style="color: black; width: 800px; margin-left: 100px;">
        
        <div class="form-group">
            <label for="comment">Comment *</label>
            <textarea name="comment" id="comment" cols="10" rows="4" class="form-control" required></textarea>
        </div>
        <!-- You may also need to include a hidden input field for post_id if it's not already included -->
        <input type="hidden" name="post_id" value="<?php echo $id; ?>">
        <div class="form-group">
            <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
        </div>
    </form>
</div>

        </div>
        </section>
<script>
$(document).ready(function(){

// if the user clicks on the like button ...
$('.like-btn').on('click', function(){
  var post_id = $(this).data('id');
  $clicked_btn = $(this);
  if ($clicked_btn.hasClass('fa-thumbs-o-up')) {
        action = 'like';
  } else if($clicked_btn.hasClass('fa-thumbs-up')){
        action = 'unlike';
  }
  $.ajax({
        url: 'read.php',
        type: 'post',
        data: {
                'action': action,
                'post_id': post_id
        },
        success: function(data){
                res = JSON.parse(data);
                if (action == "like") {
                        $clicked_btn.removeClass('fa-thumbs-o-up');
                        $clicked_btn.addClass('fa-thumbs-up');
                } else if(action == "unlike") {
                        $clicked_btn.removeClass('fa-thumbs-up');
                        $clicked_btn.addClass('fa-thumbs-o-up');
                }
                // display the number of likes and dislikes
                $clicked_btn.siblings('span.likes').text(res.likes);
                $clicked_btn.siblings('span.dislikes').text(res.dislikes);

                // change button styling of the other button if user is reacting the second time to post
                $clicked_btn.siblings('i.fa-thumbs-down').removeClass('fa-thumbs-down').addClass('fa-thumbs-o-down');
        }
  });           

});

// if the user clicks on the dislike button ...
$('.dislike-btn').on('click', function(){
  var post_id = $(this).data('id');
  $clicked_btn = $(this);
  if ($clicked_btn.hasClass('fa-thumbs-o-down')) {
        action = 'dislike';
  } else if($clicked_btn.hasClass('fa-thumbs-down')){
        action = 'undislike';
  }
  $.ajax({
        url: 'read.php',
        type: 'post',
        data: {
                'action': action,
                'post_id': post_id
        },
        success: function(data){
                res = JSON.parse(data);
                if (action == "dislike") {
                        $clicked_btn.removeClass('fa-thumbs-o-down');
                        $clicked_btn.addClass('fa-thumbs-down');
                } else if(action == "undislike") {
                        $clicked_btn.removeClass('fa-thumbs-down');
                        $clicked_btn.addClass('fa-thumbs-o-down');
                }
                // display the number of likes and dislikes
                $clicked_btn.siblings('span.likes').text(res.likes);
                $clicked_btn.siblings('span.dislikes').text(res.dislikes);
                
                // change button styling of the other button if user is reacting the second time to post
                $clicked_btn.siblings('i.fa-thumbs-up').removeClass('fa-thumbs-up').addClass('fa-thumbs-o-up');
        }
  });   

});

});
</script>


  </body>
</html>
