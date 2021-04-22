<!DOCTYPE.html>
<html>
	<head>
		<title>end assesment 1818137</title>
			<link rel="stylesheet" href="administrator.css"/>
	</head>
	<body>
		<header>
			<center><h3>Website Users</h3></center>
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
			<table border="1">
			  <tr>
				CLIENTS
				<th>id</th>
				<th>name</th>
				<th>email</th>
				<th>location</th>
				<th>District</th>
				<th>Phone_number</th>
				<th>Gender</th>
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
					  echo "<tr><td>". $row["id"] ."</td><td>". $row["name"] ."</td><td>". $row["email"] ."</td><td>". $row["location"] ."</td><td>". $row["District"] ."</td><td>". $row["phone_number"] ."</td><td>". $row["Gender"] ."</td></tr>";
				  }
				  echo "</table>";
			  }
			  else {
				  echo "0 result";
			  }
			  $conn-> close();
			  ?>
			</table><br><br>
			<table border="1">
			  <tr>
					<h4>RESTURANTS</h4>
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
			  
			  $ken = "SELECT * from resturant_reg";
			  $true = $conn-> query($ken);
			  
			  if ($true-> num_rows > 0){
				  while ($row = $true-> fetch_assoc()){
					  echo "<tr><td>". $row["name"] ."</td><td>". $row["Email"] ."</td><td>". $row["location"] ."</td><td>". $row["District"]   ."</td><td>". $row["phonenumber"]  ."</td></tr>";
				  }
				  echo "</table>";
			  }
			  else {
				  echo "0 result";
			  }
			  $conn-> close();
			  ?>
			</table>
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