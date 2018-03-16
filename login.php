

<?php
session_start();
include "con.php";
if(isset($_POST['sub']))
    $email=$_POST['email'];
    $password=$_POST['pass'];
$sql="SELECT * FROM info WHERE email='$email' and password='$pass'";
$result=$mysqli->query($sql) or die("Error occured ".$sql);
if($result->num_rows>0) {
    
    $_SESSION['uname']=$uname;
    header('Location:home.php');
    
}
else{
    echo "<p>INVALID Details</p>";
}
$mysqli->close();
?>  
<!DOCTYPE html>
<html>
  <head>
     
  </head>
  <style>
  	body{
  		text-align:center;
  		padding-top:9%;
  	}
  	#login-box{
  		background-image:url(news.jpg);	
  	}
  </style>
<body>
  <div class id=login-box>
   
    <h1>login </h1>
        <form name="log" action="logg.php" method="post" >
          <label for="email">Email</label><br>
          <input type="text" name="email" placeholder="email id">
          <br><br>
            <label for="pass">Password:</label>
          <br>
          <input type="password" name="pass" placeholder="password">
          <br><br>
          <input type="button" name="admin" onclick="window.location.href='adlogin.php'" value="Admin Login">
          <input type="submit" name="sub" value=" submit">
          
        </form>
          </div>
   
</body>
</html>
