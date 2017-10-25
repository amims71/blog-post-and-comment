<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $id = mysqli_real_escape_string($con,$_POST['id']);
      $pass = mysqli_real_escape_string($con,$_POST['pass']); 
      
      $sql = "SELECT id FROM user WHERE id = '$id' and pass = '$pass'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("id");
         $_SESSION['id'] = $id;
         
         header("location: blog.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>           
               <form action = "login.php" method = "post">
                  <label>UserName  :</label><input type = "text" name = "id" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "pass" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
