
<!DOCTYPE html>
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
			<nav>
			<a href="ica-1818137.html">LOGOUT HERE</a>
		</nav>
	<section> 
			<table>
			<th>meal code</th>
			<th>meal name</th>
			<th>meal image</th>
			<th>meal price</th>
			
			  <?php
	
	include ('dbaConnection.php');
	$query=(" SELECT * FROM meals ");
			
	$result=mysqli_query($conn,$query);
	
		while( $row=(mysqli_fetch_array($result)))
	{
		
		$meal_code=$row[0];
		$meal_name=$row[1];
		$meal_image=$row[2];
		$meal_price=$row[3];
		
		
		echo "<tr>
		
				<td>$meal_code</td>
		        <td>$meal_name</td>
				<td><img src = 'images/$meal_image' 'width = 50%'></td>
				<td>$meal_price</td>
				
			</tr>";
	}
				
	
	?>	
			</table><br><br>		
		</section>
		<footer>
			<center><strong>Ministry of Small Business Development, 
				        Cooperatives and Marketing</strong></center>
		</footer>
	</body>
</html>