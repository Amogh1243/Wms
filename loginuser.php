<?php
if(isset($_POST['submit'])){
$email = $_POST['email'];
$password = $_POST['password'];


$servername = "localhost:3309"; // Update with your correct server name
$username = "root"; // Update with your correct username
$password_admin= ""; // Update with your correct password
$dbname = "budget"; // Update with your correct database name

$conn = mysqli_connect($servername, $username, $password_admin, $dbname);

// $password = mysqli_real_escape_string($conn, $password);



$sql="select * from register where email='$email' and password='$password'";
$result= mysqli_query ($conn,$sql);

// if ($result && mysqli_num_rows($result) > 0) {
//     // User authenticated successfully
//     // Set session variables or perform other actions as needed
//     $_SESSION['user_email'] = $email;

//     // Redirect to the user dashboard
//     header("Location: user_dashboard.html");
// } else {
//     // Invalid credentials
//     echo "Invalid email or password. Please try again.";
// }
if ($result) {
    // Check if any matching record is found
    if (mysqli_num_rows($result) > 0) {
        // Valid login, navigate to userdashboard
        header("Location: user_dashboard.html");
        exit();
    } else {
        // Invalid login, redirect back to the login page with an error message
        header("Location: frontpage.html");
        exit();
    }
} else {
    // Handle database query error
    die("Database query failed: " . mysqli_error($your_db_connection));
}



}
?>