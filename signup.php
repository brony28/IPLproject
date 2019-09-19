<?php
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "attendance";

// Create connection
$conn = new mysqli($servername, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$usr=$_POST['username'];
$passd=$_POST['password'];
$rpassd=$_POST['rpassword'];
$email=$_POST['email'];



$sql = "INSERT INTO signupDB (username, password, rpassword,email)
VALUES ('$usr','$passd','$rpassd','$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>