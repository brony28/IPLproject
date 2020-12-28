<?php
@session_start();
$conn=mysqli_connect("localhost","root","","attendance");
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
<link rel="stylesheet" type="text/css" href="hover.css">
<!-- <link rel="stylesheet" type="text/css" href="hover.css"> -->
</head>
<body>

<div class="header">
  <h1>Attendance Manager</h1>
  <p>Don't go Below 75%.</p>
</div>

<div class="navbar">
  <a href="dashboard.php">Home</a>
  <a href="hover.html">Subjects</a>
  <a href="analysis.php">Analysis</a>
  <a href="logout.php" class="right">Logout</a>
</div>


<div class="card" style="width:500px;">
<div class="title">
<h1 style="text-align: center">
Advaned Data Structures</h1>
</div>
<div class="des">
 <p><b>
Mrs. Lakshmi Gadhikar<br><br></b></p>
    <div id="piechart"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
// Draw the chart and set the chart values
<?php
$sel_adsa=mysqli_query($conn,"select * from adsadb");
$row_adsa=mysqli_fetch_array($sel_adsa);
$a=$row_adsa['srno'];
$b=$row_adsa['value'];
$p=($b-$a);
echo "function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Category', ' Attendance'],
  ['Absent', $p],
  ['Present', $a],
  
]);
  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Attendance', 'width':410, 'height':320};
  // Display the chart inside the <div> element with id='piechart'
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>";
?>
</div>
</div>



<!--cards -->
<div class="card" style="width:500px;">
<div class="title">
<h1 style="text-align: center">
Microprossessor and Embedded Programs</h1>
</div>
<div class="des">
<p><b>
Mr. Suraj Khandare<br><br></b></p>
<div id="piechart2"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
// Draw the chart and set the chart values
<?php
$sel_mep=mysqli_query($conn,"select * from mepdb");
$row_mep=mysqli_fetch_array($sel_mep);
$c=$row_mep['srno'];
$d=$row_mep['value'];
$q=($d-$c);
echo "function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Category', ' Attendance'],
  ['Absent', $q],
  ['Present', $c],
  
]);
  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Attendance', 'width':410, 'height':320};
  // Display the chart inside the <div> element with id='piechart'
  var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
  chart.draw(data, options);
}
</script>";
?>
</div>
</div>
<!--cards -->



<div class="card" style="width:500px;">
<div class="title">
<h1 style="text-align: center">
Internet Programming</h1>
</div>
<div class="des">
<p><b>
Mrs. Kalpana Wani<br><br><br></b></p>
<div id="piechart3"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
// Draw the chart and set the chart values
<?php
$sel_ip=mysqli_query($conn,"select * from ipdb");
$row_ip=mysqli_fetch_array($sel_ip);
$e=$row_ip['srno'];
$f=$row_ip['value'];
$r=($f-$e);
echo "function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Category', ' Attendance'],
  ['Absent', $r],
  ['Present', $e],
  
]);
  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Attendance', 'width':410, 'height':320};
  // Display the chart inside the <div> element with id='piechart'
  var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
  chart.draw(data, options);
}
</script>";
?>
</div>
</div>
<!--cards -->


<div class="card" style="width:500px;">
<div class="title">
<h1 style="text-align: center">Cryptography And Network Security</h1>
</div>
<div class="des">
<p><b>Mr. Imran Jamadar<br><br></b></p>
<div id="piechart4"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
// Draw the chart and set the chart values
<?php
$sel_cns=mysqli_query($conn,"select * from cnsdb");
$row_cns=mysqli_fetch_array($sel_cns);
$g=$row_cns['srno'];
$h=$row_cns['value'];
$s=($h-$g);
echo "function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Category', ' Attendance'],
  ['Absent', $s],
  ['Present', $h],
  
]);
  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Attendance', 'width':410, 'height':320};
  // Display the chart inside the <div> element with id='piechart'
  var chart = new google.visualization.PieChart(document.getElementById('piechart4'));
  chart.draw(data, options);
}
</script>";
?>
</div>
</div>



<!--cards -->
<div class="card" style="width:500px;">
<div class="title">
 <h1><h1 style="text-align: center">Advaned Database Management Technique</h1>
</div>
<div class="des">
    <p><b>
Mrs. Poonam Bari<br><br></b></p>
<div id="piechart5"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
// Draw the chart and set the chart values
<?php
$sel_admt=mysqli_query($conn,"select * from admtdb");
$row_admt=mysqli_fetch_array($sel_admt);
$i=$row_admt['srno'];
$j=$row_admt['value'];
$t=($j-$i);
echo "function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Category', ' Attendance'],
  ['Absent', $t],
  ['Present', $i],
  
]);
  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Attendance', 'width':410, 'height':320};
  // Display the chart inside the <div> element with id='piechart'
  var chart = new google.visualization.PieChart(document.getElementById('piechart5'));
  chart.draw(data, options);
}
</script>";
?>
</div>
</div>



<div class="card" style="width:500px;">
  <div class="title">
  <h1 style="text-align: center">
  Business Communication and Ethics</h1>
  </div>
  <div class="des">
  <p><b>
  Mrs. Audrey Correia<br><br></b></p>
  <div id="piechart6"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
// Draw the chart and set the chart values
<?php
$sel_bce=mysqli_query($conn,"select * from bcedb");
$row_bce=mysqli_fetch_array($sel_bce);
$k=$row_bce['srno'];
$l=$row_bce['value'];
$u=($l-$k);
echo "function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Category', ' Attendance'],
  ['Absent', $u],
  ['Present', $k],
  
]);
  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Attendance', 'width':410, 'height':320};
  // Display the chart inside the <div> element with id='piechart'
  var chart = new google.visualization.PieChart(document.getElementById('piechart6'));
  chart.draw(data, options);
}
</script>";
?>
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
  <?php
  } 
  else
  {
      echo "Give proper details";
      header("refresh:2;url=loginpage.php");
  }
  
  ?>