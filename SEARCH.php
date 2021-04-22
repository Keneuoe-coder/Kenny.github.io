<?php

$conn = mysqli_connect("localhost","root","","skhafthini");
if (!$conn) {
	  die("Connection failed: ".mysqli_connect());
} 
$output = '';
//collect 
if ( isset($POST['Search']))
	$searchq = $_POST['search'];
	@$searchq = preg_replace ("#[^0-9a-z]#","",$searchq);
	
	$query = mysql_query ("SELECT * FROM meals where meal_name is LIKE '%$searchq%'") or die("could not search");
	$count = mysql_num_rows($query);
if (count ==0 ){
	$output = 'there was no search result';
}else{
		while ($row = mysql_fetch_array($query)){
			$meal_code = $row['meal_code'];
			$meal_name = $row['meal_code'];
			$meal_price = $row['meal_price'];
			
			$output .= '<div>'.$meal_name.' '.$meal_price.'</div>';
		}
	
};
?>
