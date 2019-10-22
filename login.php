<?php
$uname=$_POST['usr'];
$pword=$_POST['pswd'];

@session_start();

$conn=mysqli_connect("localhost","root","","attendance");
$result=mysqli_query($conn,"SELECT * FROM signupDB WHERE username='$uname' && password='$pword'");

$count=mysqli_num_rows($result);

if($count==1)
{
    echo "Login Success";
    $_SESSION['log']=1;
    $_SESSION['user']=$uname;
    header("refresh:2;url=dashboard.php");
    
}
else
{
    echo "Give proper details";
    header("refresh:2;url=loginpage.php");
}

?>