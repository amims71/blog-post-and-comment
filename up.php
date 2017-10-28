<?php
include("config.php");
if(isset($_POST['submit'])){
// if(!empty($_POST['image'])) { 
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name = addslashes($_FILES['image']['name']);
		$uid=$_POST['uid'];
		$pid=$_POST['pid'];
		$target_file='cmnt/'.$image_name;
		$query = "INSERT INTO cmnt (uid,pid,image_name) VALUES ('$uid','$pid','$image_name')";
		move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    	$data = mysql_query ($query)or die(mysql_error()); 
		if($data) { 
			header("location: blog.php");
		}
}
?>
