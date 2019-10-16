<?php
$connect = mysqli_connect("localhost", "root", "", "attendance");
// $query = "SELECT COUNT(*) FROM test WHERE value = '1';";
$query = "SELECT value, count(*) as number FROM test GROUP BY value";
$result = mysqli_query($connect, $query);
// $count=mysqli_num_rows($result);
//echo $result;
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
<script type= "text/javascript" scr="https://www.gstatic.com/charts/loader.js"></script>
<script type= "text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart()
{
  var data = google.visualization.arryToDataTable([
    ['value'],
    <?php
    while($row = mysqli_fetch_array($count))
      {
        echo "['".$row["value"]."', ".$row["number"]."],";
      }
      ?>
    ]);
    var option = {
      title:'Attendance',
      pieHole: 0.4 
    };
    var chart = new google.visualization.Piechart(document.getElelmentById('piechart'));
    chart.draw(data, option);
}
</script>
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
<div style="width:900px;">  
                <h3 align="center">My Attendance</h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div> 
<!-- <script type= "text/javascript" scr="https://www.gstatic.com/charts/loader.js"></script> -->
<!--  -->
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