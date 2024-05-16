<?php
$insert = false;
if(isset($_POST['user_name'])){
$servername = "localhost:3308";
$db_username = "root";
$db_password = "";
$db_name = 'CP';

$conn = mysqli_connect($servername, $db_username, $db_password,$db_name);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "sucess connecting to the db";

$user_name=$_POST['user_name'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql= "INSERT INTO `users` (`user_name`, `email`, `password`) VALUES ('$user_name', '$email', '$password');";

     if($conn->query($sql)== true){
       // echo "Successfully registered";
       $insert= true;
     }
     else{
        echo "ERROR: $sql <br> $conn->error";
     }

     $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        body {
            background-color: #f5f5f5;
        }
        
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .form-container {
            background-color: #00bd56;
            border-radius: 10px;
            width: 400px;
            padding: 20px;
            margin: 10px;
            color: white;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="password"],
        button {
            width: 350px;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            border: none;
        }
        
        button {
            background-color: #ffffff;
            color: #8b5a2b;
            cursor: pointer;
        }
        
        .btn-container {
            display: flex;
            justify-content: space-between;
        }
        
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
        <?php
    if($insert==true){
    echo "<p class='submit-msg'>Successfully registered!</p>";
    }
    ?>
            <form action="" method="post">
                <h2 style="text-align: center">Register</h2><br>
                <label for="username">Enter Username:</label><br><br>
                <input type="text" name="user_name" id="user_name" placeholder="Username" required><br><br>
                <label for="email">Enter Email:</label><br><br>
                <input type="email" name="email" id="email" placeholder="Email" required><br><br>
                <label for="password">Enter Password:</label><br><br>
                <input type="password" name="password" id="password" placeholder="Password" required><br><br><br>
                <div class="btn-container">
                    <button style="width: 100px;" type="submit">Register</button>
                    <a style="width: 80px; background-color: #ffffff; color: #8b5a2b; cursor: pointer; margin-bottom: 10px; padding: 10px; border-radius: 5px; border: none;" href="login.php">Back</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>


