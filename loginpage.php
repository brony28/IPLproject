<?php
@session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <title>page</title>
     <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="loginpagecss.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">

    <!-- <script>
        function check(){
            var user,password,x,y;
            user=document.f1.usr.value;
            password=document.f1.pswrd.value;
            x=user.length;
            y=password.length;
            if(x<10){
                alert("Username should be atleast 10 & atmost 20 char long");
                document.f1.usr.value="";
                document.focus();
            }
            if(y <= 8){
                alert("Password should be atleast 8 char long");
                document.f1.pswrd.value="";
                document.focus();
            }
        }

        function test(e){
            var x,y;
            x=e.keyCode;
            if(x>=65&&x<=90){
                e.keyCode=e.keyCode+32;
            }
            else if(!((x>=97&&x<=122)||(x>=48)&&(x<=57)))
                e.keyCode=0;
        }
    </script> -->
</head>
<body>



<div class="container">
    <img class="logo" src="login.png"><br>
    <!-- <div class="title">Attendance Manager</div><br> -->


    <form action="login.php" name=f1 method="POST">
    <input id="input" placeholder="Username" class="email" type="text" name="usr" maxlength="50"><br>
    <input id="input" placeholder="Password" class="password" type="password" name="pswd" onkeypress="test(event)" maxlength="10"><br>
    <!-- <button href="dash.html" class="button">Submit</button><br> -->
    <input class="button" type="submit" value="Submit" onclick="check()">
    <input id="box1" class="checkbox" placeholder="Remember me" type="checkbox">
    <label for="box1">Remember me</label>
    <br>
    <a class="forgot" href="">Forgot password?</a>
    <br>
    <a class="forgot" href="Signup.html">Sign Up</a>

</form>
</div>
</body>
</html>

<?php
session_destroy();
?>

