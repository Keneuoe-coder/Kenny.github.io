<!DOCTYPE.html>
<html>
	<head>
		<title>end assesment 1818137</title>
			<link rel="stylesheet" href="administrator.css"/>
	</head>
	<body>
		<header>
			<center><h3>Clients Suggestions & Restaurants Concerns</h3></center>
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
			<table>
			  <tr>
				<th><h4>SUGGESTIONS</h4></th>
				<th><h4>CONCERNS</h4></th>
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
					  echo "<tr><td>". $row["suggest"] ."</td><td>". $row["concern"] ."</td></tr>";
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
</html>