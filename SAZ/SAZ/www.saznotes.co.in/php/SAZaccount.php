<!DOCTYPE html>
<html>
<head>
	<title>SAZ Account</title>
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
$r="SELECT * FROM SAZ_users";
$n=(mysqli_query($con,$r));
while($row=mysqli_fetch_array($n))
{
       if((strcmp($username,$row['username'])==0)&&(strcmp($password,$row['password'])==0))
       {
       	echo "<h2>Dear " . $row['name'] . ";</h2>";
        echo "<p>Your login is sucessfull, This page is in developing process. So it is not possible to access additional features. Your account will be soon available for working. Please give us time.";
        goto end;
       }
}
       	echo "<h2>Incorrect Login...!</h2>";
       	echo "<p>Make sure that you have entered correct SAZ ID & Password.<p>";
       	echo "<p>If you dont't have SAZ ID please create it.</p>";
       	end:
mysqli_close($con);
?>
  	</section>
</body>
</html>