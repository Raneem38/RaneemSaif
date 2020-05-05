<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>
<link rel="stylesheet" href="style.css">

<style>

a.size{
color:black;
font-weight: 500px;
padding-right:40px;
text-decoration: none;
}

a:hover{
  color:white;
}




body{
height:100%;
padding: 4px 35px 4px 4px;
background-image: url('img/back13.jpg');
background-repeat: no-repeat;
background-attachment: scroll;
background-size: cover; 
}

</style>
</head>


<body>
<!--Navbar -->
<center>
	<div class="list" ><p><a class="hov size" href="home.html">HOME</a>
	<a class="hov size" href="About.html"> ABOUT US</a>
	<a class="hov size" href="Schedule.html">SCHEDULE</a>
	<a class="hov size" href="trainer.html">TRAINERS</a>
	<a class="hov size" href="Articls.html">ARTICLES</a> 
	<a class="hov size" href="form.php">CONTACT US</a>
        <a class="hov" title="Get Help and Instructions" href="Help Manual and Instructions.pdf">GET HELP</a>
	
</center>
<br>
</body>

<!--Connecting contact us form with the data base by insert the info to the data base -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {


	$mysql_host = "localhost";
	$mysql_username = "root";
	$mysql_password = "";
	$mysql_database = "register";
	
	
	$fname = filter_var($_POST["fname"], FILTER_SANITIZE_STRING); 
	$lname = filter_var($_POST["lname"], FILTER_SANITIZE_STRING); 
	$subject = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
	$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
	$message = filter_var($_POST["message"], FILTER_SANITIZE_EMAIL);
	
	
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
	
	if ($mysqli->connect_error) {
		print "Hello " . $fname . "! we have received your message and email  ". $email;
	print ". We will contact you very soon!";
	}	
	
	
	
	$statement = $mysqli->prepare("INSERT INTO contacus (fname, lname, subject, email, message) VALUES(?, ?, ?, ?, ?)"); 
	
	$statement->bind_param('sssss', $fname, $lname, $subject, $email, $message); 
	
	// after submitting the form
	if($statement->execute()){
			print "Hello " . $fname . "! we have received your message and email  ". $email;
	print ". We will contact you very soon!";
	
	}else{
		print "Hello " . $fname . "! we have received your message and email  ". $email;
	print ". We will contact you very soon!";
	}
}
?>
