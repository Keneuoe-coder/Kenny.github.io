<!DOCTYPE.html>
<html>
	<head>
		<title>delivery</title>
			<link rel="stylesheet" href="client.css"/>
	</head>
	<body>
		<header>
			<center><h3>Cancel orders here</h3></center>
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
		<nav>
			<a href="ica-1818137.html">LOGOUT HERE</a>
		</nav>
		<section>
			<form action="" method="post">
			<input type="text" name="meal_name" placeholder="meal name to cancel">
			<input type="submit" value="cancel order">
		
			</form>	
					<?php
@$meal_name=$_POST['meal_name'];

include 'dbaConnection.php';

$sql = "DELETE FROM orders WHERE meal_name = '$meal_name'";

$result = $conn->query($sql);
if (!$result)
{
   echo "order cancelled";
}
else
{
	echo "";
}
?>
		</section>
		<footer>
			<center><strong>Ministry of Small Business Development, 
				        Cooperatives and Marketing</strong></center>
		</footer>
	</body>
</html>
