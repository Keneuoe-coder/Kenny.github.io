<!DOCTYPE.html>
<html>
	<head>
		<title>delivery</title>
			<link rel="stylesheet" href="resturant.css"/>
	</head>
	<body>
		<header>
			<center><h3>Clients delivery-mode</h3></center>
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
				<table>
			  <tr>
				<th>delivery mode</th>
			  </tr>
			  <?php
			  $conn = mysqli_connect("localhost", "root", "", "skhafthini");
			  if ($conn-> connect_error){
				  die ("connection failed:". $conn-> connect_error);
			  }
			  
			  $sql = "SELECT * from delivery";
			  $result = $conn-> query($sql);
			  
			  if ($result-> num_rows > 0){
				  while ($row = $result-> fetch_assoc()){
					  echo "<tr><td>". $row["delivery"] ."</td></tr>";
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
		<footer>
			<center><strong>Ministry of Small Business Development, 
				        Cooperatives and Marketing</strong></center>
		</footer>
	</body>
</html>
