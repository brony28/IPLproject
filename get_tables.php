<?php
$mysqli = new mysqli("localhost", "root", "", "attendance");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT lec1, lec2, lec3, lec4, lec5, lec6, lec7
FROM ttdb WHERE day = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($lec1, $lec2, $lec3, $lec4, $lec5, $lec6, $lec7);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>Lecture</th>";
echo "<th>Timing</th>";
echo "<th>Subject</th>";
echo "</tr>";
echo "<tr>";
echo "<th>Lecture 1</th>";
echo "<th>8:45-9:45</th>";
echo "<td>" . $lec1 . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Lecture 2</th>";
echo "<th>9:45-10:45 </th>";
echo "<td>" . $lec2 . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Lecture 3</th>";
echo "<th>10:45-11:45</th>";
echo "<td>" . $lec3 . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Lecture 4</th>";
echo "<th>11:45-12:30</th>";
echo "<td>" . $lec4 . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Lecture 5</th>";
echo "<th>12:30-1:30</th>";
echo "<td>" . $lec5 . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Lecture 6</th>";
echo "<th>1:30-2:30</th>";
echo "<td>" . $lec6 . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Lecture 7</th>";
echo "<th>2:30-3:30</th>";
echo "<td>" . $lec7 . "</td>";
echo "</tr>";
echo "</table>";



?>