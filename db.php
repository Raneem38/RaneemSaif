<style>
body.cont{
height:100%;
padding: 4px 35px 4px 4px;
background-image: url('img/back13.jpg');
background-repeat: no-repeat;
background-attachment: scroll;
background-size: cover; 
}
</style>

<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("localhost","root","","register");
// Check connection
if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>