<?php
session_start();
// database connection information
$servername = "localhost";
$username = "root"; // replace with your MySQL username
$password = ""; // replace with your MySQL password
$dbname = "sample";

// create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check for connection errors
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// check if the login form has been submitted
if (isset($_POST['submit'])) {
  // retrieve the user's login credentials
  $username = $_POST['username'];
  $password = $_POST['password'];

  // prepare a SQL statement to select the user's record from the database
  $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

  // execute the SQL statement and retrieve the result
  $result = $conn->query($sql);

  // check if the result contains a single row
  if ($result->num_rows == 1) {
    // fetch the row from the result set
    $row = $result->fetch_assoc();
    
    // the user is authenticated, redirect them to the home page
    $_SESSION["username"] = $row['username'];
    header("Location: index.php");
    exit();
  } else {
    // the user is not authenticated, display an error message
    echo "Invalid login credentials";
  }
}

// close the database connection
$conn->close();
?>
