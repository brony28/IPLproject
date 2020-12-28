<?php
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "attendance";

$usr=$_POST['username'];
$passd=$_POST['password'];
$rpassd=$_POST['rpassword'];
$email=$_POST['email'];

// Create connection
$conn = new mysqli($servername, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$checkdb=mysqli_query($conn,"SELECT * FROM signupDB WHERE username='$usr'");
$count=mysqli_num_rows($checkdb);

if($count>0)
{
    echo "USername Already Exists";
    header("refresh:2;url=Signup.html");
}
elseif($passd!=$rpassd){
        echo "Password doesnt match";
        header("refresh:2;url=Signup.html");
    
}
else
{
$sql = "INSERT INTO signupDB (username, password, rpassword,email)
VALUES ('$usr','$passd','$rpassd','$email')";




if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("refresh:2;url=loginpage.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>