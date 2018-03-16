 <?php
include "connect.php";
if(isset($_POST["sub"])){
	$username=$_POST["uname"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$sql = "INSERT INTO `users` VALUES('$username','$email','$password')";
	$result=mysqli_query($conn,$sql);
	if($result){
		header("loaction:login.php");
	}
	else
	echo "failed";
	}
?>
 
 
 <html>
      <body>
          <form action="" method='POST'>
          <label for="uname">Username:</label>
          <input type='text' name='uname'/><br>
          <label for="email">   Email:</label>
          <input type='email' name='email'/><br>
          <label for="password">Password:</label>
          <input type='password' name='password'/><br>
          <label for="R password" >Repeat Password:</label>
          <input type='password' name='Repeat password'><br>
          <label for=mno>Mobile Number</label>
          <input type='text' name='enter Mobile Number'/><br>
          <input type='submit' value='submit' name="sub"/>
            </form>
            </body>
 </html>



