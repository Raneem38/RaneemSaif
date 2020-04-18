<!DOCTYPE html>
<html>
<title>Contact Us</title>

<head>
<style>
body.cont{
height:100%;
padding: 4px 35px 4px 4px;
background-image: url('img/back13.jpg');
background-repeat: no-repeat;
background-attachment: scroll;
background-size: cover; 
}

a.size{
color:black;
font-weight: 500px;
padding-right:40px;
text-decoration: none;
}

a:hover{
  color:white;
}

body.bord{
background-color:gray;
height:800px;
}

fieldset{
width: 250px;  
border-color:white;
border-width: 6px;
height: 400px;
margin-left:10px;
}

div.div1{
float: right;
height:600px;
width: 50%;
margin-right: 6px;
}

div.div2{
float: left;
height:400px;
width: 25%;
margin-left: 10px;
margin-top: 0px;
}

div.list1{
  border: 5px solid black;
      background-color:#f3e7b3;
      widows: 90%;
      height:5%;
      margin-top: auto;
      font-weight:20px;
    } 
    
.button {
border: none;
color: white;
padding: 9px 22px;
text-align: center;
font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 4px 1px;
transition-duration: 0.4s;
cursor: pointer;       
}
     
.button5 {
background-color: rgba(255, 192, 203, 0);
color: rgb(34, 33, 33);
border: 2px solid #dfdfdf;
float: inherit;
}
     
.button5:hover {
background-color: #ffbb00e0;
color: rgb(0, 0, 0);
transform: translateY(-0.25em);
}
     
</style>
</head>

<link rel="stylesheet" href="style.css">


<body class="bord cont">
<!--Navbar -->
<center>
<div class="list1" ><p><a class="hov size" href="home2.html">HOME</a>
  <a class="hov size" href="login.php">REGISTER-LOGIN</a>
  <a class="hov size" href="About.html"> ABOUT US</a>
  <a class="hov size" href="Schedule.html">SCHEDULE</a>
  <a class="hov size" href="trainer.html">TRAINERS</a>
  <a class="hov size" href="Articls.html">ARTICLES</a>
  <a class="hov size" href="form.php">CONTACT US</a>
  <a class="hov size" href="logout.php">LOGOUT</a></p></div>

<br>
<!--Posting user messege to the database using PHP -->
<form method="post" action="process.php">
  <div class="div2" > 
  <!--Contact Us Form -->  
  <fieldset>
    <h1 calss="r">Contact Us</h1>

    <input  type="text" name="fname" placeholder="First Name" required >
    <br>
    <br>

    <input  type="text" name="lname" placeholder="Last Name" required>
    <br>
    <br>
    <input  type="text" name="subject" placeholder="Subject" required>
    <br>
    <br>

    <input type="email" name="email" placeholder="Email" required >
    <br>
    <br>

    <textarea type="message" name="message" placeholder="Message" style="width:200px" required></textarea>
    <br>
    <br>

    <input class="button button5" type="submit" value="Submit"  >
    <br></br>
  </fieldset>
  </div>
</form>

<!--Google Map "GYM" -->
<div class="div1">
  <p float="right"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3632.5577420774325!2d39.65351494686713!3d24.431427472769442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15bd95e1f93aa465%3A0xdd170a6c87c0011b!2sReflection%20Fitness%20Lounge!5e0!3m2!1sen!2ssa!4v1586794699781!5m2!1sen!2ssa" 
  width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>

  <img src="img/media.png" alt="media" width="100%" height="40%" align="left">
</div>

</center>

</body>
</html>



