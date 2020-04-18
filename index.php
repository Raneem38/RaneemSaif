<?php
//include auth.php file on all secure pages
include("auth.php");
?>

<!DOCTYPE html>
<html>
<title>Welcome Home</title>
<head>
<style>
a.size{
color:black;
font-weight: 500px;
padding-right:40px;
text-decoration: none;
}

#label1{
font-size: 150%;
}

.bord1{
font-size:1.25vw;
text-align: center;
}

div.list1{
border: 5px solid black;
background-color:#f3e7b3;
widows: 90%;
height:10%;
margin-top: auto;
font-weight:20px;
}

body.index{
height:100%;
padding: 4px 35px 4px 4px;
background-image: url('img/back6.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
}
table.bord{
border: 6px solid white;
border-color: white;
margin-left:7%;
}
#project{
width: 400px;  
border-color:white;
border-width: 6px;
height: 350px;
margin-top: 0px;
display:inline-block;
margin-left: 4%;
}

</style>

<link rel="stylesheet" href="style.css">
</head>

<!--Navbar -->
<body class="index">
<center>
  <div class="list1" ><p><a class="hov size" href="home2.html">HOME</a>
    <a class="hov size" href="login.php">REGISTER-LOGIN</a>
    <a class="hov size" href="About.html"> ABOUT US</a>
    <a class="hov size" href="Schedule.html">SCHEDULE</a>
    <a class="hov size" href="trainer.html">TRAINERS</a>
    <a class="hov size" href="Articls.html">ARTICLES</a>
    <a class="hov size" href="form.php">CONTACT US</a>
    <a class="hov size" href="logout.php">LOGOUT</a></p></div><br>
</center>
<!-- Welcome message after login  -->
<center>
<p class="shape"><b>     Welcome <?php echo $_SESSION['username']; ?> to our site!  </b></p>
<img src="img/pwrlogo.png" alt="logo" width="34%" height="35%" align="left" >
</center>



<div id="project">
<b>
<label id = label1>We will take these information from you when you visit our gym!</label>
<br>
<br>

<table class="bord">
<tr>
  <td class="bord1">First Name</td>
  <td class="bord1">Last Name</td>
</tr>

<tr>
  <td class="bord1">Weight</td>
  <td class="bord1">Height</td>
</tr>

<tr>
  <td class="bord1">Age</td>
  <td class="bord1">Sex</td>
</tr>

<tr>
  <td class="bord1">Chest</td>
  <td class="bord1">Waist</td>
</tr>

<tr>
  <td class="bord1">Hips</td>
  <td class="bord1">Inseam</td>
</tr>

<tr>
  <td class="bord1">Class Name</td>
  <td class="bord1">Class Time</td>
</tr>

<tr>
  <td class="bord1">Trainers Name</td>
  <td class="bord1">Diet Type</td>
</tr>

<tr>
  <td class="bord1">Phone</td>
  <td class="bord1">Email</td>
</tr>

<tr>
  <td class="bord1">City</td>
  <td class="bord1">Nationality</td>
</tr>

<tr>
  <td class="bord1">Locker Number</td>
  <td class="bord1">Class Duration</td>
</tr>

<tr>
  <td class="bord1">Money Paid</td>
  <td class="bord1">Discount</td>
</tr>
</table>

<br>
<br>
<br>
<br>
</div>

</body>
</html>