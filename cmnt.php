<?php
include("config.php");
if(isset($_POST['submit'])){
if(!empty($_POST['cmnt'])) { 
		$cmnt = $_POST['cmnt']; 
		$uid=$_POST['uid'];
		$pid=$_POST['pid'];
		$query = "INSERT INTO cmnt (uid,pid,cmnt) VALUES ('$uid','$pid','$cmnt')"; 
		$data = mysql_query ($query)or die(mysql_error()); 
		if($data) { 
			header("location: blog.php");
		}
	 }
}
?>
