<?php
INCLUDE 'dbaConnection.php';

$delivery = $_POST['delivery'];



		$sql = "INSERT INTO delivery (delivery)VALUES ('$delivery')";
		$result = $conn->query($sql);
		
		if ($result === True) {
			echo "your chosen mode is ";
		}else {
			echo "error: " .$result . "<br>" . $conn->error;
		
	}
$display=mysql_query(" select * from delivery " );
    
	echo "<tr>
		   <td>$delivery</td>
		</tr>";   
 
?>

 