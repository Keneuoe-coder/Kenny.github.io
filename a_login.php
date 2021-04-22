
<?php

	$name = $_POST['name'];
	$password = $_POST['password'];
	
	$connection=mysqli_connect("localhost","root","","skhafthini")or die('Connection not Exstablished');
	if ($connection->connect_error)die($connection->connect_error);
	$query="select * from admin_reg where name='$name' and password='$password'";
	$result =$connection->query($query);
	
	if (!$result)
	{
		header("location:concerns.html");
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
		<title>end assesment 1818137</title>
			<link rel="stylesheet" href="administrator.css"/>
	</head>
	<body>
		<header>
			<center><h3> Sk’hafthini</h3></center>
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
		<br><br>
		  <center>please select the button to act upon users of the website
		  <form action="users.php" method="post">
		  
				<input type="submit" name="client" value="view users"><a href="users.php"></a>
				</form>
			<form action="block.php" method="post">
		  
				<input type="submit" name="client" value="block users"><a href="block.php"></a>
				</form>
				</center>
		</section>
		<aside
			id="right">
		</aside>
		<footer>
	
		
		<footer>
			<center>
		        <strong>Ministry of Small Business Development, 
				        Cooperatives and Marketing</strong>
			</center>
		</footer>
	</body>

	<?php
	}
	}
	?>