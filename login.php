<?php
    include "connect.php";
    session_start();
    if(isset($_POST['submit'])) {
        $email=$_POST['email'];
        $pass=$_POST['password'];
        $qry="SELECT * FROM `users` WHERE `email`='$email' AND `pass`='$pass';";
        $sql = mysqli_query($conn,$qry) or die("Error inserting");
        if(mysqli_num_rows($sql)>0) {
            $row=mysqli_fetch_assoc($sql);
            $_SESSION["id"]=$row['id'];
            $_SESSION["name"] = $row['name'];
            $_SESSION["email"] = $row['email'];
            header('location:book.php');
        } else {
            $warning = "Invalid login";
        }
     
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>login page</title>
		<link rel="stylesheet" href="login.css">
	</head>
	<body>
			
		<h2> login</h2>
	    <form action="" method="post">
			Email :<br><br>
			 <input type=" text" name="email" class="text"><br><br>
			Password :<br><br>
			<input type="password" name="password" class="text"><br><br>
			<input type="submit" name="submit" value="submit">
			<p> Not yet a member? <a href="reg.php">Sign up</a></p>
        </form>
    </body>
</html>

