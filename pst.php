<?php
include("config.php");
if(isset($_POST['submit'])){
if(!empty($_POST['pst'])) { 
		$pst = $_POST['pst']; 
		$uid=$_POST['uid'];
		$query = "INSERT INTO post (uid,post) VALUES ('$uid','$pst')"; 
		$data = mysql_query ($query)or die(mysql_error()); 
		if($data) { 
			header("location: blog.php");
		}
	 } 
	 else { 
	 	echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; 
	 } 
}
?>