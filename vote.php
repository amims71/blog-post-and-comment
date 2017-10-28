<?php
include("config.php");
if(isset($_POST['submit'])){
	$vtype=$_POST['vtype'];
	$uid=$_POST['uid'];
	$pid=$_POST['pid'];
	$query1 = "SELECT * FROM vote where pid = '$pid' AND uid='$uid' AND vtype='$vtype'";
	$result1 = mysql_query($query1)or die(mysql_error());
	$row=mysql_num_rows($result1);
	if($row<1){
	$query = "INSERT INTO vote (uid,pid,vtype) VALUES ('$uid','$pid','$vtype')";
	if ($vtype==1) {
		$query2= "UPDATE post SET uvote = uvote + 1 WHERE pid = ".$pid;	
	} else{
		$query2= "UPDATE post SET dvote = dvote - 1 WHERE pid = ".$pid;
	}
	$data = mysql_query ($query)or die(mysql_error()); 
	$data2= mysql_query ($query2)or die(mysql_error()); 
		if($data&&$data2) { 
			header("location: blog.php");
		}
	} else{
		echo "you already voted";
		echo "<a href='blog.php'>Go Back</a>";
	}
}
?>