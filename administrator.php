<?php

INCLUDE 'dbaConnection.php';

@$name = $_POST['name'];
@$Gender = $_POST['Gender'];
@$email = $_POST['email'];
@$Address = $_POST['Address'];
@$District = $_POST['District'];
@$phone_number = $_POST['phone_number'];
@$password = $_POST['password'];

		$sql = "INSERT INTO admin_reg (name, Gender, email, Address, District, phone_number, password)VALUES ('$name', '$Gender', '$email', '$Address', '$District', '$phone_number', '$password')";
		$result = $conn->query($sql);
		
		if ($result === True) {
			echo "you have successfully registered";
		}else {
			echo "error: " .$result . "<br>" . $conn->error;
		
	}
$display=mysql_query(" select * from admin_reg " );
    
	echo "<tr>
		   <td>$name</td>
		   <td>$Gender</td> 
		   <td>$email</td> 
		   <td>$Address</td> 
		   <td>$District</td>
		   <td>$phone_number</td>
		   <td>$password</td>
		</tr>";   
 
?>

 