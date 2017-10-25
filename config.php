<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'blog');

   $con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   $con1 = mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD);
   $db=mysql_select_db(DB_DATABASE,$con1) or die("Failed to connect to MySQL: " . mysql_error());
?>