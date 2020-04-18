<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css">

<!--Background Style -->
<style>
body.login{
height:100%;
padding: 4px 35px 4px 4px;
background-image: url('img/back9.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
height:650px;
}

#paragraph{
text-indent: 30px;
}
</style>


</head>


<!-- 
<body class="login">
<?php
/*
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
            // Redirect user to index.php
     header("Location: index.php");
         }else{
 echo "<h3>Username/password is incorrect.</h3>
<br/><h3>Click here to <a class='color' href='login.php'>Login again</a></h3>";
 }
    }else{\
    */
?>

<!--Navbar -->
<center>
       <div class="list" ><p><a class="hov" href="home.html">HOME</a>
       <a class="hov"  href="login.php">REGISTER-LOGIN</a>
       <a class="hov" title="You have to login first" href=""> ABOUT US</a>
       <a title="You have to login first" class="hov" class="hov" href="">SCHEDULE</a>
       <a title="You have to login first" class="hov"  href="">TRAINERS</a>
       <a title="You have to login first" class="hov" href="">ARTICLES</a> 
       <a title="You have to login first" class="hov" href="">CONTACT US</a></p></div>
       <br>
</center>
<br>
<br>
<br>

<!--HTML Form for Login -->
<center>
<div class="form">
       <h1 class="r">LOGIN </h1>
       <form action="" method="post" name="login">
       <div>
       <input type="text" name="username" placeholder="Username" required /><br><br>
       <input type="password" name="password" placeholder="Password" required /><br><br>
        <input name="submit" type="submit" value="Login" />
       </form>
       <p id = paragraph>Not registered yet? <a href='registration.php'>Register Here</a></p>
       </div>
</div>
</center>

<?php } ?>


</body>
</html>
