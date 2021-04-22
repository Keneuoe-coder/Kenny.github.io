<?php

INCLUDE 'dbaConnection.php';

@$meal_code= $_POST['meal_code'];
@$meal_name= $_POST['meal_name'];
@$meal_price= $_POST['meal_price'];

@$meal_image=$_FILES['meal_image']['name'];
@$temp_name=$_FILES['meal_image']['temp_name'];
$dir="images\\";

if($meal_image!=""){
	if (file_exists($dir.$meal_image)){
			$meal_image=time().'_'.$meal_image;
	}
	$fdir = $dir.$meal_image;
	move_uploaded_file($temp_name,$fdir);
}

if(isset($_POST["submit"]))
		{
		$file = addslashes(file_get_contents($_FILES["meal_image"]["temp_name"]));
		$sql = "INSERT INTO meals ($meal_image) VALUES ( '$file')";
		if(mysqli_query($conn,$sql))
		{
			echo '<script>alert("inserted succesfully")</script>';
		}
		}
		$query = "INSERT INTO meals (meal_code,meal_name,meal_image,meal_price)VALUES('$meal_code' ,'$meal_name' ,'$meal_image' ,'$meal_price')";
		$result = $conn->query($query);
		
 
?>