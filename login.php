<?php
session_start();
if(isset($_POST['user_name'])){
    $servername = "localhost:3308";
    $username = "root";
    $password = "";
    $dbname = "CP";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get the entered username and password from the HTML form
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];

    // Query the database to fetch the hashed password for the entered username
    $sql_user = "SELECT user_id, password FROM users WHERE user_name = '$user_name';";
    $sql_admin = "SELECT user_id, password FROM admin WHERE user_name = '$user_name';";

    $result_user = mysqli_query($conn, $sql_user);
    $result_admin = mysqli_query($conn, $sql_admin);

    if ($result_user->num_rows > 0) {
        // Username exists in users table, check the password
        $row = $result_user->fetch_assoc();
        $hashedPasswordFromDB = $row["password"];
    
        if ($password == $hashedPasswordFromDB) {
            // Set session variables for regular user
            $_SESSION['user_id'] = $row['user_id']; // Set the user_id in the session
            $_SESSION['user_name'] = $user_name;
            $_SESSION['user_type'] = 'user'; // Set user type
            // Redirect regular user to their dashboard or desired page
            header("Location: index.php");
            exit();
        } else {
            // Incorrect password
            echo "Incorrect password. Please try again.";
        }
    } elseif ($result_admin->num_rows > 0) {
        // Username exists in admin table, check the password
        $row = $result_admin->fetch_assoc();
        $hashedPasswordFromDB = $row["password"];
    
        if ($password == $hashedPasswordFromDB) {
            // Set session variables for admin
            $_SESSION['user_id'] = $row['user_id']; // Set the user_id in the session
            $_SESSION['user_name'] = $user_name;
            $_SESSION['user_type'] = 'admin'; // Set user type
            // Redirect admin to their dashboard or desired page
            header("Location: index.php");
            exit();
        } else {
            // Incorrect password
            echo "Incorrect password. Please try again.";
        }
    } else {
        // Username does not exist in either users or admin table
        echo "Username not found. Please try again.";
    }
    
    // Close the database connection
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <form style="padding: 20px;" action="login.php" method="post">
                <h2>Login</h2>
                <label for="username">Username:</label><br><br>
                <input type="text" name="user_name" id="user_name" placeholder="Username" required><br><br>

                <label for="password">Password:</label><br><br>
                <input type="password" name="password" id="password" placeholder="Password" required><br><br><br>
                <button style="margin-left: 40px; width: 100px;" type="submit">Login</button>
                <a style="margin-left: 60px; width: 120px;  background-color: #ffffff; color: #8b5a2b; cursor: pointer; margin-bottom: 10px; padding: 10px; border-radius: 5px; border: none; font-size: 15px;" href="register.php">New user?</a>
            </form>
            
        </div>
    </div>
</body>

</html>
