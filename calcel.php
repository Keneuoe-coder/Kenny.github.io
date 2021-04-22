<?php
@$name=$_POST['name'];

include 'dbaConnection.php';

$sql = "DELETE FROM meals WHERE meal_name = '$name'";

$result = $conn->query($sql);
if (!$result)
{
   echo "unavailable client";
}
else
{
	echo "";
}
?>
<!DOCTYPE.html>
<html>
	<head>
		<title>end assesment 1818137</title>
			<link rel="stylesheet" href="client.css"/>
	</head>
	<body>
		<header>
			<center><h3>delete meal</h3></center>
		</header>
		<nav>
			<a href="ica-1818137.html">LOGOUT HERE</a>
		</nav>
		<aside 
			id="left">
		</aside>
		<section> 
				<form action="calcel.php" method="POST">
	
	<input type="text" name="name" placeholder="enter meal">
	<input type="submit" value="remove meal" >	
</form>
		
		</section>
		<aside>
		
				 
		</aside>
		<footer>
	
		
		<footer>
			<center>
		        <strong>Ministry of Small Business Development, 
				        Cooperatives and Marketing</strong>
			</center>
		</footer>
	</body>
</html>