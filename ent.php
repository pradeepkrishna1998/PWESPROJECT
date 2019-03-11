<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: auto;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
h2 {
background-image:url(logo.jpg);
border: 1px solid #ccc;
border-left-radius :50px;
	border-right-radius :50px;
    color: blue;
    font-family: Arial;
    font-size: 300%;
}


button {
    background-color: blue;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border-left-radius :5px;
	border-right-radius :5px;
    cursor: pointer;
    width: auto;
}
.register{
width:auto;
padding: 10px 18px;
background-color:green
}
button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}


.container {
height:auto;
    padding: 25px;
	padding-top:25px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
}
</style>
</head>
<body bgcolor="black" style="background-repeat:no-repeat; background-size:cover">

<h2><marquee behavior="alternate">People Welfare System</marquee></h2>	 


<form name="myForm" action="admin1.php" autocomplete="on"autofocus="on"
onsubmit="return Validate()" method="post">

 

 <center> <div class="container">
 <img src="admin2.jpg" align="left" height="180" width="750">
    <label for="uname" style="color:white"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required></br>

    <label for="psw" style="color:white"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pin" required></br>
        
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

    <label style="color:white">
    </label>
	 <input type="submit" name="submit" class="register" id="btnSubmit" value="LOGIN" />
  </div></center>

</form>




</body>
 </html>
 <?php
 $con=mysqli_connect("localhost","root","","welfare");
 if($con)
 {
	 
 }
 if(isset($_POST['submit']))
 {
	
 $name=$_POST['uname'];
 $pass=$_POST['pin'];
    $query=mysqli_query($con,"select * from login where username='$name'and password='$pass';");
	$row=mysqli_num_rows($query);
	if($row>0)
	{
	    header('Location: det.html');
	}
	else{
	   
	}
 
 }
 else{
	echo"not button";  
 }
 ?>