<!DOCTYPE html>
<html>
<title>Registration</title>
<head>
<!--Background Style -->
<style>

body.reg{
height:100%;
padding: 4px 35px 4px 4px;
background-image: url('img/back9.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
height:650px;
}

</style>

<link rel="stylesheet" href="style.css">
</head>


<!--Adding user info to the data base -->

<body class="reg">
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username); 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 $trn_date = date("Y-m-d H:i:s");
 $query = "INSERT into `users` (username, password, email, trn_date)
 VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        
        if($result){
            echo "<h3>You are registered successfully.</h3>
 <br/><h3>Click here to <a class='color' href='login.php'>Login</a></h3>";
        }
        else{
         echo "<h3> Error Registration <br><br>Click here to <a class='color' href='registration.php'>Register again</a></h3>";
         
        }
        }else{
            
?>

<!--Navbar -->
<center>
  <div class="list" ><p><a class="hov" href="home.html">HOME</a>
  <a class="hov" href="login.php">REGISTER-LOGIN</a>
  <a  title="You have to login first" class="hov" href=""> ABOUT US</a>
  <a class="hov" title="You have to login first" href="">SCHEDULE</a>
  <a title="You have to login first" class="hov" href="">TRAINERS</a>
  <a title="You have to login first" class="hov" href="">ARTICLES</a> 
  <a title="You have to login first" class="hov" href="">CONTACT US</a></p></div>
</center>

<br>
<br>
<br>
<!--HTML Registration Form -->

<center>
<div class="form">
  <h1 calss="r">REGISTRATION</h1>
  <form name="registration" action="" method="post">
    <input type="text" name="username" placeholder="Username" required /><br><br>
    <input type="email" name="email" placeholder="Email" required /><br><br>
    <input type="password" name="password" placeholder="Password" required /><br><br>
    <input type="submit" name="submit" value="Register" />
  </form>
</div>
<?php } ?>
</center>

</body>
</html>