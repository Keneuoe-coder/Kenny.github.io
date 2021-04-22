
<?php

	$name = $_POST['name'];
	$password = $_POST['password'];
	
	$connection=mysqli_connect("localhost","root","","skhafthini")or die('Connection not Exstablished');
	if ($connection->connect_error)die($connection->connect_error);
	$query="select * from resturant_reg where name='$name' and password='$password'";
	$result =$connection->query($query);
	
	if (!$result)
	{
		header("location:meals2.html");
	}
	else{ 
		$rows = $result->num_rows;
		$row = $result->fetch_array(MYSQLI_ASSOC);
		if ($rows == 0)
		{
			echo "invalid username/password: Logon denied";	
		}	
	else
	{
	
		session_start();
		$_SESSION['name'] = $name;
		$_SESSION['password'] = $password;	
    		
?>




<!DOCTYPE.html>
<html>
	<head>
		<title>meals</title>
			<link rel="stylesheet" href="resturant.css"/>
	</head>
	<body>
		<header>
			<center><h3>Select your meal</h3></center>
		</header>
		<div>
		<nav>
			<ul>
				<a href="meals2.html">Meal Information</a>
				<a href="r_delivery.php">Delivery</a>
				<a href="communication.html">Communication with clients</a>
				<a href="suggestions.php">Suggestions</a>
			    <a href="r_concerns.html">Concerns</a>
			</ul>
		</nav>
		</div>
		<section> 
		</section>
		<footer>
			<center><strong>Ministry of Small Business Development, 
				        Cooperatives and Marketing</strong></center>
		</footer>
	</body>
</html>


<?php
}
}			  
?>