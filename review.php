<?php
    $dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="restaurant";
	$connect=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
?>


<?php
if(isset($_POST["submit1"])){
	$restaurant_name=$_POST["restaurantname"];
	$rate1=$_POST["value1"];
	$rate2=$_POST["value2"];
	$rate3=$_POST["value3"];
	$rate4=$_POST["value4"];
	$rate5=$_POST["value5"];
	if($rate1==""){$rate1='NULL';}
	if($rate2==""){$rate2='NULL';}
	if($rate3==""){$rate3='NULL';}
	if($rate4==""){$rate4='NULL';}
	if($rate5==""){$rate5='NULL';}
    $sql="INSERT INTO `review` (`Restaurant_name`, `grill`, `burger`, `friedrice`, `soup`, `hydrabadi`) VALUES ('{$restaurant_name}',$rate1,$rate2,$rate3,$rate4,$rate5)";
	$consql=mysqli_query($connect,$sql);
	header("Location:reviewcompleted.html");
}
?>




<!doctype html>
<link href='loc.css' rel='stylesheet'>
<html>
<head>
<meta charset="utf-8">
<title>Review</title>
<link rel="stylesheet" type="text/css" href="registrationformdesign.css">
</head>

<body>
<div class="form">
<form action="review.php" method="post">
<div class="admin">
<h3 align="center">Customer Review</h3><br>
<b><label>Restaurant Name :</label></b>
<input type="text" name="restaurantname" value="" placeholder="Name"><br><br>
<label class="heading">Item &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            Ratings</label><br><br>
<input type="checkbox" name="grill"><I>Grill</I>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="number" name="value1"><br>
<input type="checkbox" name="burger"><I>Burger</I>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="number" name="value2"><br>
<input type="checkbox" name="fried"><I>Friedrice</I>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="number" name="value3"><br>
<input type="checkbox" name="soup"><I>Soup</I>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="number" name="value4"><br>
<input type="checkbox" name="hydrabadi"><I>Hydrabadi</I>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="number" name="value5"><br><br><br>
</div>
<button  class="btn"type="submit" name="submit1">Submit</button>
</form>
</div>
</body>

</html>