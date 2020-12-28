<?php
@session_start();
$conn=mysqli_connect("localhost","root","","attendance");
if(isset($_SESSION['log']))
{
// echo $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Alef' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="dash.css">
<style type="text/css">
  table {
            width: 80%;
            margin: auto;
        }

        table, th, td {
            border: 1px solid #fff;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
        }
  

</style>

</head>
<body>

<div class="header">
  <h1>Attendance Manager</h1>
  <h2>Welcome <?php echo $_SESSION['user']; ?></h2>
  <p>Don't go Below 75%.</p>
</div>

<div class="navbar">
  <a href="dashboard.php">DashBoard</a>
  <a href="hover.html">Subjects</a>
  <a href="analysis.php">Analysis</a>
  <!-- <h2>Welcome <?php echo $_SESSION['user']; ?></h2> -->

  <a href="index.html" class="right">Logout</a>
</div>

<div class="row">
  <div class="side">
    <h2>Today's TimeTable:-</h2>
    <h5></h5>
<<<<<<< HEAD
    <div class="fakeimg" style="height:auto;">

      <form action=""> 
      <select name="customers" onchange="showCustomer(this.value)">
      <option value="">Select a day:</option>
      <option value="Mon">Monday</option>
      <option value="Tue">Tuesday</option>
      <option value="Wed">Wednesday</option>
      <option value="Thur">Thursday</option>
      <option value="Fri">Friday</option>
      <option value="Sat">Saturday</option>
      </select>
      </form>
      <br>
      <div id="txtHint">Timetabler info will be listed here...</div>

      <script>
      function showCustomer(str) {
        var xhttp;    
        if (str == "") {
          document.getElementById("txtHint").innerHTML = "";
          return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "get_tables.php?q="+str, true);
        xhttp.send();
      }
      </script>

=======
    <div class="fakeimg" style="height:200px;">
    <b>8:45-9:45 ADMT<br>
    9:45-10:45 CNS<br>
    10:45-11:45 MEP<br>
    11:45-12:30 BREAK/LUNCH TIME<br>
    12:30-1:30 IP<br>
    1:30-2:30 ADSAOA<br>
    2:30-3:30 PLACEMENTS</b>
>>>>>>> c772acda143a9aefb6f995eef8f3ce9df3416c05
    </div>

    


    
    <h3>Submissions</h3>
   
<<<<<<< HEAD
    <div class="fakeimg" style="height:60px;">MEP Assignment 2<br>CNS Assignment test 2</div><br>
    
=======
    <div class="fakeimg" style="height:60px;"><b>MEP Assignment 2<br>CNS Assignment test 2</b></div><br>
    <!-- <div class="fakeimg" style="height:60px;"></div><br>
    <div class="fakeimg" style="height:60px;"></div> -->
>>>>>>> c772acda143a9aefb6f995eef8f3ce9df3416c05
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
<?php
$sel_adsa=mysqli_query($conn,"select * from adsadb");
$row_adsa=mysqli_fetch_array($sel_adsa);
$a=$row_adsa['srno'];
$b=$row_adsa['value'];
$p=($a/$b)*100;
$sel_ads=mysqli_query($conn,"select * from admtdb");
$row_ads=mysqli_fetch_array($sel_ads);
$c=$row_ads['srno'];
$d=$row_ads['value'];
$q=($c/$d)*100;
$sel_ad=mysqli_query($conn,"select * from mepdb");
$row_ad=mysqli_fetch_array($sel_ad);
$e=$row_ad['srno'];
$f=$row_ad['value'];
$r=($e/$f)*100;
$sel_a=mysqli_query($conn,"select * from ipdb");
$row_a=mysqli_fetch_array($sel_a);
$g=$row_a['srno'];
$h=$row_a['value'];
$s=($g/$h)*100;
$sel_adsaw=mysqli_query($conn,"select * from cnsdb");
$row_adsaw=mysqli_fetch_array($sel_adsaw);
$i=$row_adsaw['srno'];
$j=$row_adsaw['value'];
$t=($i/$j)*100;
echo "function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Subjects', 'Individual Attendance'],
  ['ADMT', $q],
  ['IP', $s],
  ['CNS', $t],
  ['ADSA', $p],
  ['MEP', $r]
]);
  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Attendance', 'width':410, 'height':320};
  // Display the chart inside the <div> element with id='piechart'
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>";
?>
<br>
<<<<<<< HEAD
    <h2>OVERALL ATTENDANCE</h2>
    <h5>Analysis, Sep 12, 2019</h5>
    <div id="piechart2" style="height:auto;">
    </div>
    <p></p>
    <p></p>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
      // Load google charts
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart2);
      // Draw the chart and set the chart values
      <?php
        $sel_adsa=mysqli_query($conn,"select * from adsadb");
$row_adsa=mysqli_fetch_array($sel_adsa);
$a=$row_adsa['srno'];
$b=$row_adsa['value'];

$sel_ads=mysqli_query($conn,"select * from admtdb");
$row_ads=mysqli_fetch_array($sel_ads);
$c=$row_ads['srno'];
$d=$row_ads['value'];

$sel_ad=mysqli_query($conn,"select * from mepdb");
$row_ad=mysqli_fetch_array($sel_ad);
$e=$row_ad['srno'];
$f=$row_ad['value'];

$sel_a=mysqli_query($conn,"select * from ipdb");
$row_a=mysqli_fetch_array($sel_a);
$g=$row_a['srno'];
$h=$row_a['value'];

$sel_adsaw=mysqli_query($conn,"select * from cnsdb");
$row_adsaw=mysqli_fetch_array($sel_adsaw);
$i=$row_adsaw['srno'];
$j=$row_adsaw['value'];

      $ta=$b+$d+$f+$h+$j;
      $tm=$a+$c+$e+$g+$i;
      $tmp=($tm/$ta)*100;
      $tmap=100-$tmp;
      echo "function drawChart2() {
        var data = google.visualization.arrayToDataTable([
        ['Category', ' Attendance'],
        ['',$tmap ],
        ['Present', $tmp],
        
      ]);
        // Optional; add a title and set the width and height of the chart
        var options = {'title':'My Attendance', 'width':410, 'height':320};
        // Display the chart inside the <div> element with id='piechart'
        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
        chart.draw(data, options);
      }
      </script>";
      ?>
=======
>>>>>>> c772acda143a9aefb6f995eef8f3ce9df3416c05
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