<!DOCTYPE html>
<html>
<head>
	<title>SignUP Result</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/result.css">
</head>
<body>
	<div class="wrapper">
  <div class="logo">
    <a href="../index.html">
  	 <img src="../logo/saz_icon.png" height="100" width="220">
    </a>
  	</div>

  	<section class="info">
  		<?php
  		$con=mysqli_connect("localhost","root","","SAZ");
  		//cheack connection
if(mysqli_connect_errno()){
	echo "Failed to connect to MYSQL : ".mysql_connect_error();
}
  		$username=$_POST['email'];
  		$password=$_POST['password'];
  		$cpassword=$_POST['cpassword'];
  		$name=$_POST['name'];
  		$mobile=$_POST['mobile'];
  		$college=$_POST['college'];
  		$dept=$_POST['dept'];
  		$year=$_POST['year'];
  		$city=$_POST['city'];
  		$state=$_POST['state'];
  		$r="SELECT username FROM SAZ_users";
  		$n=(mysqli_query($con,$r));
        while($row=mysqli_fetch_array($n))
        {
        	if(strcmp($username,$row['username'])==0){
        		echo "<h2>Username Already Exists</h2>";
        		goto end;
        	}
        }
  		if(strcmp($password,$cpassword)==0)
  		{
  		$sql="INSERT INTO SAZ_users (username,password,name,mobile,college,department,year,city,state) VALUES ('$username','$password','$name','$mobile','$college','$dept','$year','$city','$state') ";
  		if(!mysqli_query($con,$sql)){
  			die('Error : '.mysqli_error($con));
  		}
  		echo "<h2>Sucess.</h2>";
  		echo "<p>Go back to login</p>";
  	    }
  	else
  		{echo "<h2>Go Back, Try Again.</h2>";}
  	end:
  		mysqli_close($con);
  		?>
  	</section>
</div>
</body>
</html>