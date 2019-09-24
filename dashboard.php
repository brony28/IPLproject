<?php
session_start();
if(isset($_SESSION['log']))
{

?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Alef' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="dash.css">

</head>
<body>

<div class="header">
  <h1>Attendance Manager</h1>
  <p>Don't go Below 75%.</p>
</div>

<div class="navbar">
  <a href="homepage.html">Home</a>
  <a href="hover.html">Subjects</a>
  <a href="#">Analysis</a>
  <a href="homepage.html" class="right">Logout</a>
</div>

<div class="row">
  <div class="side">
    <h2>About Me</h2>
    <h5>Photo of me:</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    <h3>More Text</h3>
    <p>Lorem ipsum dolor sit ame.</p>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div>
  </div>
  <div class="main">
    <h2>Overall Attendance</h2>
    <h5>Analysis, Sept 12, 2019</h5>
    <div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['ADMT', 10],
  ['IP', 2],
  ['CNS', 4],
  ['ADSA', 2],
  ['MEP', 8]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Attendance', 'width':410, 'height':320};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
<br>
    <h2>OVERALL ATTENDANCE</h2>
    <h5>Analysis, Sep 12, 2019</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
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

