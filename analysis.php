<?php
session_start();
if(isset($_SESSION['log']))
{

?>

<!DOCTYPE html>
<html>
<head>
<title>Analysis</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Alef' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="anlys.css">

</head>
<body>

<div class="header">
  <h1>Attendance Manager</h1>
  <p>Don't go Below 75%.</p>
</div>

<div class="navbar">
  <a href="dashboard.php">Dashboard</a>
  <a href="hover.html">Subjects</a>
  <a href="analysis.html">Analysis</a>
  <a href="homepage.html" class="right">Logout</a>
</div>

<div class="footer">
    <h2>Contact</h2>
    <a href="http://www.facebook.com"><i class="fa fa-facebook-official"></i></a>
    <a href="#"><i class="fa fa-pinterest-p"></i></a>
    <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a>
    <a href="https://in.linkedin.com/"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-instagram"></i></a>
    <p>
    Powered by <a href="https://www.fcrit.ac.in" target="_blank">F.C.R.I.T</a>
    </p>
  </div>
  </body>
  </html>
  <?php
  } 
  else
  {
      echo "Give proper details";
      header("refresh:2;url=loginpage.php");
  }
  
  ?>
  