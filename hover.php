  
<!-- <?php
session_start();
if(isset($_SESSION['log']))
{

?> -->

<!DOCTYPE html>
<html>
<head>
<title>Subjects</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Alef' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="hover.css">

</head>
<body>

<div class="header">
  <h1>Attendance Manager</h1>
  <p>Don't go Below 75%.</p>
</div>

<div class="navbar">
  <a href="dashboard.php">Dashboard</a>
  <a href="hover.html">Subjects</a>
  <a href="analysis.php">Analysis</a>
  <a href="homepage.html" class="right">Logout</a>
</div>
 <!--cards -->

<div class="card">

<!-- <div class="image">
 <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Gfp-missouri-st-louis-clubhouse-pond-and-scenery.jpg/1199px-Gfp-missouri-st-louis-clubhouse-pond-and-scenery.jpg">
   <img class="prodimage" src="images/a_pic-1.jpg" width=300 height=200 alt="Ae gayab">
</div> -->
<div class="title">
 <h1>
Advaned Data Structures</h1>
</div>
<div class="des">
 <p><b>
Mrs. Lakshmi Gadhikar<br><br></b></p>
<form action="attendb.php" method="POST">
<button name='submit' value="1a">Lecture Attended</button>
<button name="submit" value="1b">Lecture Missed</button>
</form>
</div>
</div>
<!--cards -->


<div class="card">

<!-- <div class="image">
   <img src="https://cdn.pixabay.com/photo/2018/01/09/03/49/the-natural-scenery-3070808_1280.jpg">
   <img class="prodimage" src="images/a_pic-2.jpg" width=300 height=200 alt="Ae gayab">
</div> -->
<div class="title">
 <h1>
Microprossessor and Embedded Programs</h1>
</div>
<div class="des">
<p><b>
Mr. Suraj Khandare<br><br></b></p>
<form action="attendb.php" method="POST">
<button name="submit" value="2a">Lecture Attended</button>
<button name="submit" value="2b">Lecture Missed</button>
</form>
</div>
</div>
<!--cards -->


<div class="card">

<!-- <div class="image">
   <img src="/crit/images/a_pic-4.jpg" width=300 height=200 alt="Ae gayab">
</div> -->
<div class="title">
 <h1>
Internet Programming</h1>
</div>
<div class="des">
<p><b>
Mrs. Kalpana Wani<br><br><br></b></p>
<form action="attendb.php" method="POST">
<button name="submit" value="3a">Lecture Attended</button>
<button name="submit" value="3b">Lecture Missed</button>
</form>
</div>
</div>
<!--cards -->


<div class="card">

<!-- <div class="image">
 <img src="https://cdn.pixabay.com/photo/2018/01/09/03/49/the-natural-scenery-3070808_1280.jpg">
  <img src="images/a_pic-4.jpg" width=300 height=200 alt="Ae gayab">
</div> -->
<div class="title">
 <h1>Cryptography And Network Security</h1>
</div>
<div class="des">
<p><b>Mr. Imran Jamadar<br><br></b></p>
<form action="attendb.php" method="POST">
<button name="submit" value="4a">Lecture Attended</button>
<button name="submit" value="4b">Lecture Missed</button>
</form>
</div>
</div>
<!--cards -->


<div class="card">

<!-- <div class="image">
<img src="https://cdn.pixabay.com/photo/2018/01/09/03/49/the-natural-scenery-3070808_1280.jpg">
   <img src="images/newfoot4.jpg" width=300 height=200 alt="Ae gayab">
</div> -->
<div class="title">
 <h1>
Advaned Database Management Technique</h1>
</div>
<div class="des">
    <p><b>
Mrs. Poonam Bari<br><br></b></p>
<form action="attendb.php" method="POST">
<button name="submit" value="5a">Lecture Attended</button>
<button name="submit" value="5b">Lecture Missed</button>
</form>
</div>
</div>

<div class="card">
  <div class="title">
   <h1>
  Business Communication and Ethics</h1>
  </div>
  <div class="des">
  <p><b>
  Mrs. Audrey Correia<br><br></b></p>
  <form action="attendb.php" method="POST">
  <button name="submit" value="6a">Lecture Attended</button>
  <button name="submit" value="6b">Lecture Missed</button>
  </form>
  </div>
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
<!-- <?php
} 
else
{
    echo "Give proper details";
    header("refresh:2;url=loginpage.php");
}

?> -->