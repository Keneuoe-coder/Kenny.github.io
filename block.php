<?php
@$name=$_POST['name'];

include 'dbaConnection.php';

$sql = "DELETE FROM client_reg WHERE name = '$name'";

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
			<link rel="stylesheet" href="administrator.css"/>
	</head>
	<body>
		<header>
			<center><h3>Block user</h3></center>
		</header>
		<nav>
			<ul>
				<a href="users.html">users</a>
				<a href="concerns.php">concerns</a>
				
			</ul>
		</nav>
		<nav>
			<a href="ica-1818137.html">LOGOUT HERE</a>
		</nav>
		<aside 
			id="left">
		</aside>
		<section> 
				<form action="block.php" method="POST">
	
	<input type="text" name="name" placeholder="enter user (name) to block">
	<input type="submit" value="block user" >	
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