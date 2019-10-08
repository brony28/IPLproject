<?php

$conn=mysqli_connect("localhost","root","","attendance");

if($_POST['submit']=='1a'){
    $sql1=mysqli_query($conn,"INSERT INTO adsadb(value) VALUE (1);");
    header("url=hover.html");
}
else if($_POST['submit']=='1b'){
    $sql1=mysqli_query($conn,"INSERT INTO adsadb(value) VALUE (0);");
    header("url=hover.html");
}
else if($_POST['submit']=='2a'){
    $sql1=mysqli_query($conn,"INSERT INTO mepdb(value) VALUE (1);");
    header("refresh:2;url=hover.html");
}
else if($_POST['submit']=='2b'){
    $sql1=mysqli_query($conn,"INSERT INTO mepdb(value) VALUE (0);");
    header("url=hover.html");
}
else if($_POST['submit']=='3a'){
    $sql1=mysqli_query($conn,"INSERT INTO ipdb(value) VALUE (1);");
    header("url=hover.html");
}
else if($_POST['submit']=='3b'){
    $sql1=mysqli_query($conn,"INSERT INTO ipdb(value) VALUE (0);");
    header("url=hover.html");
}
else if($_POST['submit']=='4a'){
    $sql1=mysqli_query($conn,"INSERT INTO cnsdb(value) VALUE (1);");
    header("url=hover.html");
}
else if($_POST['submit']=='4b'){
    $sql1=mysqli_query($conn,"INSERT INTO cnsdb(value) VALUE (0);");
    header("url=hover.html");
}
else if($_POST['submit']=='5a'){
    $sql1=mysqli_query($conn,"INSERT INTO admtdb(value) VALUE (1);");
    header("url=hover.html");
}
else if($_POST['submit']=='5b'){
    $sql1=mysqli_query($conn,"INSERT INTO admtdb(value) VALUE (0);");
    header("url=hover.html");
}
else if($_POST['submit']=='6a'){
    $sql1=mysqli_query($conn,"INSERT INTO bcedb(value) VALUE (1);");
    header("url=hover.html");
}
else if($_POST['submit']=='6b'){
    $sql1=mysqli_query($conn,"INSERT INTO bcedb(value) VALUE (0);");
    header("url=hover.html");
}






?>