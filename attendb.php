<?php

$conn=mysqli_connect("localhost","root","","attendance");

if($_POST['submit']=='1a'){
    $sql1=mysqli_query($conn,"select * from adsadb");
    $adbatt=mysqli_fetch_array($sql1);
    $cuur_att_adb=$adbatt['srno'];
    $tot_att=$adbatt['value'];
    $srno=$cuur_att_adb+1;
    $tot_att=$tot_att+1;
    $sql1=mysqli_query($conn,"update adsadb set srno='$srno', value='$tot_att'");
    if($sql1){
   echo" <script>window.open('hover.html')</script>"; }
}
else if($_POST['submit']=='1b'){
    $sql2=mysqli_query($conn,"select * from adsadb");
    $adbatt=mysqli_fetch_array($sql2);
    $cuur_att_adb=$adbatt['srno'];
    $tot_att=$adbatt['value'];
    $srno=$cuur_att_adb+0;
    $tot_att=$tot_att+1;
    $sql1=mysqli_query($conn,"update adsadb set srno='$srno', value='$tot_att'");
    if($sql1){
   echo" <script>window.open('hover.html')</script>"; }
}
else if($_POST['submit']=='2a'){
    $sql3=mysqli_query($conn,"select * from mepdb");
    $adbatt=mysqli_fetch_array($sql3);
    $cuur_att_adb=$adbatt['srno'];
    $tot_att=$adbatt['value'];
    $srno=$cuur_att_adb+1;
    $tot_att=$tot_att+1;
    $sql3=mysqli_query($conn,"update mepdb set srno='$srno', value='$tot_att'");
    if($sql3){
   echo" <script>window.open('hover.html')</script>"; }
    // $sql1=mysqli_query($conn,"INSERT INTO mepdb(value) VALUE (1);");
    // header("refresh:2;url=hover.html");
}
else if($_POST['submit']=='2b'){
    $sql4=mysqli_query($conn,"select * from mepdb");
    $adbatt=mysqli_fetch_array($sql4);
    $cuur_att_adb=$adbatt['srno'];
    $tot_att=$adbatt['value'];
    $srno=$cuur_att_adb+0;
    $tot_att=$tot_att+1;
    $sql3=mysqli_query($conn,"update mepdb set srno='$srno', value='$tot_att'");
    if($sql3){
   echo" <script>window.open('hover.html')</script>"; }
    // $sql1=mysqli_query($conn,"INSERT INTO mepdb(value) VALUE (0);");
    // header("url=hover.html");
}
else if($_POST['submit']=='3a'){
    $sql1=mysqli_query($conn,"select * from ipdb");
    $adbatt=mysqli_fetch_array($sql1);
    $cuur_att_adb=$adbatt['srno'];
    $tot_att=$adbatt['value'];
    $srno=$cuur_att_adb+1;
    $tot_att=$tot_att+1;
    $sql1=mysqli_query($conn,"update ipdb set srno='$srno', value='$tot_att'");
    if($sql1){
   echo" <script>window.open('hover.html')</script>"; }
    // $sql1=mysqli_query($conn,"INSERT INTO ipdb(value) VALUE (1);");
    // header("url=hover.html");
}
else if($_POST['submit']=='3b'){
    $sql2=mysqli_query($conn,"select * from ipdb");
    $adbatt=mysqli_fetch_array($sql2);
    $cuur_att_adb=$adbatt['srno'];
    $tot_att=$adbatt['value'];
    $srno=$cuur_att_adb+0;
    $tot_att=$tot_att+1;
    $sql1=mysqli_query($conn,"update ipdb set srno='$srno', value='$tot_att'");
    if($sql1){
   echo" <script>window.open('hover.html')</script>"; }
    // $sql1=mysqli_query($conn,"INSERT INTO ipdb(value) VALUE (0);");
    // header("url=hover.html");
}
else if($_POST['submit']=='4a'){
    $sql1=mysqli_query($conn,"select * from cnsdb");
    $adbatt=mysqli_fetch_array($sql1);
    $cuur_att_adb=$adbatt['srno'];
    $tot_att=$adbatt['value'];
    $srno=$cuur_att_adb+1;
    $tot_att=$tot_att+1;
    $sql1=mysqli_query($conn,"update cnsdb set srno='$srno', value='$tot_att'");
    if($sql1){
   echo" <script>window.open('hover.html')</script>"; }
    // $sql1=mysqli_query($conn,"INSERT INTO cnsdb(value) VALUE (1);");
    // header("url=hover.html");
}
else if($_POST['submit']=='4b'){
    $sql2=mysqli_query($conn,"select * from cnsdb");
    $adbatt=mysqli_fetch_array($sql2);
    $cuur_att_adb=$adbatt['srno'];
    $tot_att=$adbatt['value'];
    $srno=$cuur_att_adb+0;
    $tot_att=$tot_att+1;
    $sql1=mysqli_query($conn,"update cnsdb set srno='$srno', value='$tot_att'");
    if($sql1){
   echo" <script>window.open('hover.html')</script>"; }
    // $sql1=mysqli_query($conn,"INSERT INTO cnsdb(value) VALUE (0);");
    // header("url=hover.html");
}
else if($_POST['submit']=='5a'){
    $sql1=mysqli_query($conn,"select * from admtdb");
    $adbatt=mysqli_fetch_array($sql1);
    $cuur_att_adb=$adbatt['srno'];
    $tot_att=$adbatt['value'];
    $srno=$cuur_att_adb+1;
    $tot_att=$tot_att+1;
    $sql1=mysqli_query($conn,"update admtdb set srno='$srno', value='$tot_att'");
    if($sql1){
   echo" <script>window.open('hover.html')</script>"; }
    // $sql1=mysqli_query($conn,"INSERT INTO admtdb(value) VALUE (1);");
    // header("url=hover.html");
}
else if($_POST['submit']=='5b'){
    $sql2=mysqli_query($conn,"select * from admtdb");
    $adbatt=mysqli_fetch_array($sql2);
    $cuur_att_adb=$adbatt['srno'];
    $tot_att=$adbatt['value'];
    $srno=$cuur_att_adb+0;
    $tot_att=$tot_att+1;
    $sql1=mysqli_query($conn,"update admtdb set srno='$srno', value='$tot_att'");
    if($sql1){
   echo" <script>window.open('hover.html')</script>"; }
    // $sql1=mysqli_query($conn,"INSERT INTO admtdb(value) VALUE (0);");
    // header("url=hover.html");
}
else if($_POST['submit']=='6a'){
    $sql1=mysqli_query($conn,"select * from bcedb");
    $adbatt=mysqli_fetch_array($sql1);
    $cuur_att_adb=$adbatt['srno'];
    $tot_att=$adbatt['value'];
    $srno=$cuur_att_adb+1;
    $tot_att=$tot_att+1;
    $sql1=mysqli_query($conn,"update bcedb set srno='$srno', value='$tot_att'");
    if($sql1){
   echo" <script>window.open('hover.html')</script>"; }
    // $sql1=mysqli_query($conn,"INSERT INTO bcedb(value) VALUE (1);");
    // header("url=hover.html");
}
else if($_POST['submit']=='6b'){
    $sql2=mysqli_query($conn,"select * from bcedb");
    $adbatt=mysqli_fetch_array($sql2);
    $cuur_att_adb=$adbatt['srno'];
    $tot_att=$adbatt['value'];
    $srno=$cuur_att_adb+0;
    $tot_att=$tot_att+1;
    $sql1=mysqli_query($conn,"update bcedb set srno='$srno', value='$tot_att'");
    if($sql1){
   echo" <script>window.open('hover.html')</script>"; }
    // $sql1=mysqli_query($conn,"INSERT INTO bcedb(value) VALUE (0);");
    // header("url=hover.html");
}






?>