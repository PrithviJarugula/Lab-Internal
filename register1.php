<?php
	include "connect.php";
	if(isset($_POST['sub'])){
		$firstname=$_POST['fname'];
		$lastname=$_POST['lname'];
		$date=$_POST['dob'];
		$Email=$_POST['email'];
		$pwd=$_POST['pass'];
		$cpwd=$_POST['cpass'];
		$phone=$_POST['mob'];
		if($pass!=$cpass)
		{
			$warning="password doesn't match";
		}
		else{
		$sqli="select * from `user` where `email`='$email';";
		$res1=mysqli_query($conn,$sqli);
		
			if(mysqli_num_rows($res1)>0){
				$warning="user already exists";
			}
			else{
				$sql="INSERT INTO `user`(`fname`,`lname`,`dob`,`email`,`pass`,`cpass`,`mob`) values ('$fname','$lname','$dob','$email','$pass','$cpass''$mob')"
				$res=mysqli_query($conn,$sql);
				header('Location:login.php');
			}
			
		
	}
	
	

?>

<!DOCTYPE html>
<html>
  <head>
	<style>
	body{
		text-align:center;
		color:yellow;
	}
	#a{
		background-image:url(news.jpg);
		padding-top:13%;
		background-size:cover;
		background-repeat: no-repeat;
		
	}
	h1{
		color:red;
		font-size:40px;
	}
	
		
	
	
	
  </style>
  </head>
  
<body>
   <div id=a>
   <div id=one>
    <h1>Register </h1>
        <form name="reg" action="news.php" method="post" >
	<label for="fname">First name </label>
       <input type="text"name="fname" maxlength="50" size="30"  placeholder="Enter in Block letters" required><br><br>
	<label for="lname">Last name </label>
	 <input type="text"name="lname" maxlength="50" size="30" placeholder="Use Block letters" required><br><br>
	<label for="dob">Date of birth</label>
	 <input type="date"name="dob" placeholder="dd/mm/yyyy"><br><br>
	<label for="email">Email</label>
         <input type="text" name="email" maxlength="30" width="30" placeholder="email" required><br><br>
                  <label for="pass" >Password</label>
         <input type="password" name="pass" placeholder="Enter password"><br><br>
          <label for="repass" >Confirm Password</label>
         <input type="password" name="cpass" placeholder="Enter password"><br><br>
        <label for="mob">Mobile</label>
	 <input type="text"name="mob" maxlength="10" size="20"><br><br>
	 <input type="submit" value="submit">
       </form>
      </div>
      </div>
</body>
</html>
