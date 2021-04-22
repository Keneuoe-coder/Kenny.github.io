<?php

INCLUDE 'dbaConnection.php';

$name = $_POST['name'];
$Gender = $_POST['Gender'];
$email = $_POST['email'];
$location = $_POST['location'];
$District = $_POST['District'];
$phone_number = $_POST['phone_number'];
$password = $_POST['password'];

		$sql = "INSERT INTO client_reg (name, Gender, email, location, District, phone_number, password)VALUES ('$name', '$Gender', '$email', '$location', '$District', '$phone_number', '$password')";
		$result = $conn->query($sql);
		
		if ($result === True) {
			echo "you have successfully registered";
		}else {
			echo "error: " .$result . "<br>" . $conn->error;
		
	}
$display=mysql_query(" select * from client_reg " );
    
	echo "<tr>
		   <td>$name</td>
		   <td>$Gender</td> 
		   <td>$email</td> 
		   <td>$location</td> 
		   <td>$District</td>
		   <td>$phone_number</td>
		   <td>$password</td>
		</tr>";   
 
?>

 