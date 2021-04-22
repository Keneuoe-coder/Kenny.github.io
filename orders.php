<?php
 include 'dbaConnection.php';
 
@$phone_number=$_POST['phone_number'];
@$location=$_POST['location'];
@$resturant_name=$_POST['resturant_name'];
@$meal_name=$_POST['meal_name'];
@$delivery_option=$_POST['delivery_option'];
@$Date_of_delivery=$_POST['Date_of_delivery'];
 

	
	
//$query = "INSERT INTO orders VALUES ('".$phone_number."','".$location."','".$resturant_name."','".$delivery_option."','".$Date_of_delivery."')";
	
 //mysql_query($query) or die ('unable to order');
 
 //echo "ordered successfully";
 
 $sql = "INSERT INTO orders (phone_number, location, resturant_name, meal_name, delivery_option, Date_of_delivery)VALUES ('$phone_number', '$location', '$resturant_name', '$meal_name', '$delivery_option', '$Date_of_delivery')";
	$result = $conn->query($sql);
		
		if ($result === True) {
			echo "your order was placed successfully";
		}else {
			echo "error: " .$result . "<br>" . $conn->error;
		
	}
 ?>