<?php

INCLUDE 'dbaConnection.php';

@$suggest = $_POST['suggest'];
@$concern= $_POST['concern'];


		$sql = "INSERT INTO feedback (suggest, concern)VALUES ('$suggest', '$concern')";
		$result = $conn->query($sql);
		
		if ($result === True) {
			echo "thanks for your participation";
		}else {
			echo "error: " .$result . "<br>" . $conn->error;
		
	}
$display=mysql_query(" select * from feedback " );
    
	echo "<tr>
		   <td>$suggest</td>
		   <td>$concern</td> 
		</tr>";   
 
?>

 