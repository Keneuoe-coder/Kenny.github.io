<?php
INCLUDE 'dbaConnection.php';

$name = $_POST['name'];
$Email = $_POST['Email'];
$location = $_POST['location'];
$District = $_POST['District'];
$phonenumber = $_POST['phonenumber'];
$password = $_POST['password'];


		$sql = "INSERT INTO resturant_reg (name, Email, location, District, phonenumber, password)VALUES ('$name', '$Email', '$location', '$District', '$phonenumber', '$password')";
		$result = $conn->query($sql);
		
		if ($result === True) {
			echo "you have successfully registered";
		}else {
			echo "error: " .$result . "<br>" . $conn->error;
		
	}
$display=mysql_query(" select * from resturant_reg " );
    
	echo "<tr>
		   <td>$name</td>
		   <td>$$Email</td> 
		   <td>$location</td> 
		   <td>$District</td> 
		   <td>$phonenumber</td>
		   <td>$password</td>
		</tr>";   
 
?>

 