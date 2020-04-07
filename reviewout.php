<!doctype html>
<link href='loc.css' rel='stylesheet'>
<label>Restaurant Name    Grill             Burger            Friedrice            Soup           Hydrabadi</label><br>
<?php 
	$sql2="SELECT * FROM `review`";
	$consql2=mysqli_query($connect,$sql2);
	while($result=mysqli_fetch_assoc($consql2)){
		echo $result["restaurantname"].$result["grill"].$result["burger"].$result["friedrice"].$result["soup"].$result["hydrabadi"].'<br';
		
	}

?>
