<!DOCTYPE.html>
<html>
	<head>
		<title>delivery</title>
			<link rel="stylesheet" href="resturant.css"/>
	</head>
	<body>
		<header>
			<center><h3>My clients contacts</h3></center>
		</header>
		<nav>
			<ul>
				<a href="meals2.html">Meal Information</a>
				<a href="r_delivery.php">Delivery</a>
				<a href="communication.php">Communication with clients</a>
				<a href="suggestions.php">Suggestions</a>
			    <a href="r_concerns.html">Concerns</a>
				
			</ul>
		</nav>
		<nav>
			<a href="ica-1818137.html">LOGOUT HERE</a>
		</nav>
		<section> 
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
<table border="1">
			  <tr>
				CLIENTS
				<th>name</th>
				<th>email</th>
				<th>location</th>
				<th>District</th>
				<th>Phone_number</th>
				
			  </tr>
			  <?php
			  $conn = mysqli_connect("localhost", "root", "", "skhafthini");
			  if ($conn-> connect_error){
				  die ("connection failed:". $conn-> connect_error);
			  }
			  
			  $sql = "SELECT * from client_reg";
			  $result = $conn-> query($sql);
			  
			  if ($result-> num_rows > 0){
				  while ($row = $result-> fetch_assoc()){
					  echo "<tr><td>". $row["name"] ."</td><td>". $row["email"] ."</td><td>". $row["location"] ."</td><td>". $row["District"] ."</td><td>". $row["phone_number"] ."</td></tr>";
				  }
				  echo "</table>";
			  }
			  else {
				  echo "0 result";
			  }
			  $conn-> close();
			  ?>
			</table><br><br>


		</section>
				
		</section>
		<footer>
			<center><strong>Ministry of Small Business Development, 
				        Cooperatives and Marketing</strong></center>
		</footer>
	</body>
</html>
