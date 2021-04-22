<!DOCTYPE.html>
<html>
	<head>
		<title>meals</title>
			<link rel="stylesheet" href="resturant.css"/>
	</head>
	<body>
		<header>
			<center><h3>Suggestions by clients</h3></center>
		</header>
		<div>
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
		<aside 
			id="left">
		</aside>
		<section> 
			<table>
			  <tr>
				<th></th>
				<th></th>
			  </tr>
<?php
			  $conn = mysqli_connect("localhost", "root", "", "skhafthini");
			  if ($conn-> connect_error){
				  die ("connection failed:". $conn-> connect_error);
			  }
			  
			  $sql = "SELECT * from feedback";
			  $result = $conn-> query($sql);
			  
			  if ($result-> num_rows > 0){
				  while ($row = $result-> fetch_assoc()){
					  echo "<tr><td>". $row["suggest"] ."</td></tr>";
				  }
				  echo "</table>";
			  }
			  else {
				  echo "0 result";
			  }
			  $conn-> close();
			  ?>
		</section>
		<footer>
			<center><strong>Ministry of Small Business Development, 
				        Cooperatives and Marketing</strong></center>
		</footer>
	</body>
</html>