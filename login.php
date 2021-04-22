
<?php

	$name = $_POST['name'];
	$password = $_POST['password'];
	
	$connection=mysqli_connect("localhost","root","","skhafthini")or die('Connection not Exstablished');
	if ($connection->connect_error)die($connection->connect_error);
	$query="select * from client_reg where name='$name' and password='$password'";
	$result =$connection->query($query);
	
	if (!$result)
	{
		header("location:meals.html");
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
			<link rel="stylesheet" href="client.css"/>
	</head>
	<body>
		<header>
			<center><h3>Meals Available</h3></center>
		</header>
		<nav>
			<ul>
				<a href="meals.php">Meal Information</a>
				<a href="search.html">Search for food</a>
				<a href="order.html">Ordering</a>
				<a href="c_delivery.html">Delivery Options</a>
				<a href="transactions.html">Transactions</a>
				<a href="cancellation.php">Cancellation</a>
				<a href="c_feedback.html">Feedback</a>
			</ul>
		</nav>
	<section> 		
		</section>
		<footer>
			<center><strong>Ministry of Small Business Development, 
				        Cooperatives and Marketing</strong></center>
		</footer>
	</body>
</html><?php
	}
	}
	?>