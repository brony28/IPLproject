<?php 
session_start(); 
session_destroy(); 
echo "<script>window.open('homepage.html','_self')</script>";
?>