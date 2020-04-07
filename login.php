<?php
    ob_start();
	session_start();
    $dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="restaurant";
	$connect=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
?>
<?php
if(isset($_POST["login"])){
	$aduser=$_POST["Username"];
	$adpassword=$_POST["Password"];
	
	$test=0;
	
		if($aduser=="" || $adpassword=="")
		{
			echo '<script>alert("Fill up correctly...")</script>';
			
			}
		else{
			
	$query="SELECT *
	        FROM customer_information2";
	$result=mysqli_query($connect,$query);
	while($search=mysqli_fetch_assoc($result)){
		$addbuser=$search["username"];
		$addbpassword=base64_decode($search["password"]);
		if($aduser==$addbuser && $adpassword==$addbpassword){
			$test=1;
			header("Location:index.php");
			$_SESSION["Username"]=$addbuser;
			$_SESSION["Password"]=$addbpassword;
			
			}
		}
					if($test==0){
				
				echo '<script>alert("You are not registered.Please register first...")</script>';
				
				}
		
		}
	}

?>
<!doctype html>
<link href='loc.css' rel='stylesheet'>
<html>
<head>
<meta charset="utf-8">
<title>Loginform</title>
<link rel="stylesheet" type="text/css" href="registrationformdesign.css">
</head>

<body>
<div class="form">
<form action="login.php" method="post">
<div class="admin">
<h3>For Customer</h3><br>
<legend>Login Form</legend><br>
<!--<b><label>Post &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label></b>
<input type="text" name="post" value="" placeholder="Post"><br><br>-->
<b><label>User Name :</label></b>
<input type="text" name="Username" value="" placeholder="User Name"><br><br>
<b><label>Password    &nbsp;&nbsp;&nbsp;:</label></b>
<input type="password" name="Password" value=""  placeholder="Password"><br><br>
<!--<b><label>PIN    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label></b>
<input type="password" name="pin" value=""  placeholder="PIN"><br><br-->
</div>
<button  class="btn"type="submit" name="login">Login</button>
</form>
</div>
</body>

</html>