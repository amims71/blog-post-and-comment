<form action="index.php" method="POST">
	id<input type="text" name="id"><br>
	name<input type="text" name="name"><br>
	pass<input type="password" name="pass"><br>
	<input type="submit" name="submit" value="signup">
</form><br>
<a href="login.php">login</a>

<?php
include("config.php");
if(isset($_POST['submit'])){
if(!empty($_POST['id'])) { 
	$query = mysql_query("SELECT * FROM user WHERE id = '$_POST[id]' AND pass = '$_POST[pass]'") or die(mysql_error()); 
	if(!$row = mysql_fetch_array($query) or die(mysql_error())) { 
		$name = $_POST['name']; 
		$id = $_POST['id'];  
		$pass = $_POST['pass']; 
		$query = "INSERT INTO user (id,name,pass) VALUES ('$id','$name','$pass')"; 
		$data = mysql_query ($query)or die(mysql_error()); 
		if($data) { 
			echo "YOUR REGISTRATION IS COMPLETED..."; 
		}
	 } 
	 else { 
	 	echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; 
	 } 
	}
}


?>