<?php
    $dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="restaurant";
	$connect=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
?>
<?php
if(isset($_POST["create"])){
	
	$aduser=$_POST["Username"];
	$adpassword=base64_encode($_POST["Password"]);
		if($aduser==""||$adpassword==""){
			echo '<script>alert("Fill up correctly...")</script>';
		}
		else{
	$query2="INSERT INTO customer_information2(username,password)
	          VALUES('{$aduser}','{$adpassword}')";
	$result2=mysqli_query($connect,$query2);
	
	  echo '<script>alert("Registration Successful...")</script>';
	  header("Location:index.php");
		}
	
	}
?>
<!doctype html>
<link href='loc.css' rel='stylesheet'>
<html>
<head>
<meta charset="utf-8">
<title>Registrationform</title>
<link rel="stylesheet" type="text/css" href="registrationformdesign.css">
</head>

<body>
<div class="form">
<form action="register.php" method="post">
<div class="admin">
<h3>Customer registration</h3><br>
<b><label>User Name :</label></b>
<input type="text" name="Username" value="" placeholder="User Name"><br><br>
<b><label>Password    &nbsp;&nbsp;&nbsp;:</label></b>
<input type="password" name="Password" value=""  placeholder="Password"><br><br>
<b><label>Email    &nbsp;&nbsp;&nbsp;:</label></b>
<input type="email" name="Email" value=""  placeholder="Email"><br><br>
</div>
<button  class="btn"type="submit" name="create">create account</button>
</form>
</div>
</body>
</html>