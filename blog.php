<?php
   include('session.php');
?>
<h1>Welcome <?php echo $login_session; ?></h1> 
<h2><a href = "logout.php">Sign Out</a></h2>

<form action="pst.php" method="post">
	<input type="hidden" name="uid" value="<?php echo $_SESSION['id']; ?>">
	<textarea name="pst" cols="40" rows="5"></textarea>
	<input type="submit" name="submit" value="Post">
</form>

<?php  
$query = "SELECT * FROM post order by uvote+dvote desc";
$result = mysql_query($query);
//iterate over all the rows
while($row = mysql_fetch_assoc($result)){
	echo "<h3>".$row['uid']."</h3><p>".$row['post']."</p>";
    echo $row['uvote'];
          ?>
          <form action="vote.php" method="post">
          	<input type="hidden" name="vtype" value="1">
          	<input type="hidden" name="uid" value="<?php echo $_SESSION['id']; ?>">
        	<input type="hidden" name="pid" value="<?php echo $row['pid']; ?>">
          	<input type="submit" name="submit" value="UpVote">
          </form>
          <?php
          echo $row['dvote'];
          ?>
		  <form action="vote.php" method="post">
          	<input type="hidden" name="vtype" value="0">
          	<input type="hidden" name="uid" value="<?php echo $_SESSION['id']; ?>">
        	<input type="hidden" name="pid" value="<?php echo $row['pid']; ?>">
          	<input type="submit" name="submit" value="DownVote">
          </form>
          <ul><li>
  <form action="up.php" method="post" enctype="multipart/form-data">
  <input type="file" name="image">

        	<input type="hidden" name="uid" value="<?php echo $_SESSION['id']; ?>">
        	<input type="hidden" name="pid" value="<?php echo $row['pid']; ?>">
  <input type="submit" name="submit" value="upload">
  </form>
        <form action="cmnt.php" method="post">
        	<input type="hidden" name="uid" value="<?php echo $_SESSION['id']; ?>">
        	<input type="hidden" name="pid" value="<?php echo $row['pid']; ?>">
        	<input type="text" name="cmnt">
        	<input type="submit" name="submit" value="Comment">
        	</li>
<?php
$query1 = "SELECT * FROM cmnt where pid = ".$row['pid'];
$result1 = mysql_query($query1);
while($row1 = mysql_fetch_assoc($result1)){
	if(!empty($row1['image_name'])){
		echo"<li><strong>".$row1['uid']."</strong>: <img src='cmnt/".$row1['image_name']."'width='175' height='200' /></li>";
	} else{
	echo "<li><strong>".$row1['uid']."</strong>:".$row1['cmnt']."</li>";
}
}

?>

        	</ul>
        </form>

        <?php
}




?>