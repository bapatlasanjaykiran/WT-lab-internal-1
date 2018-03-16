
<?php
	
	session_start();
	if(isset($_SESSION['username'])){
		if($_SESSION['role'] !== 'A')
			header('location : Adminlogin.php');
	}
	if(isset($_POST['additem'])){
		$upload_image=$_FILES[" myimage "][ "name" ];
		$folder="/xampp/htdocs/images/";

			move_uploaded_file($_FILES[" myimage "][" tmp_name "], "$folder".$_FILES[" myimage "][" name "]);

$insert_path="INSERT INTO image_table VALUES('$folder','$upload_image')";

$var=mysql_query($inser_path);

	}
?>
<html>
	<head>
		<title>Product Feedback</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css" >
		<script src="jquery/jqurey.js"></script>
		<script src="bootstrap/bootstrap.min.js"></script>
	</head>
	<style>
		#addproducts{
			margin-left:25%;
		}
	</style>
	<body>
		<div class="navbar">
			<h1 class="navbar-brand">Product Feedback</h1>
			<button class="btn"><a href="logout.php">logout</a></button>
			
		</div>
		<div id="addproducts">
			<form method="GET" action="addproduct.php" enctype="multipart/form-data">
				<h4>Add new product</h4>
				<div>
				<label for="usn">Name :</label><br>
				<input type="text" width="30%" id ="usn" name="pname"><br>
				</div>
				<div>
				<label for="sn">Description :</label><br>
				<textarea type="text" row="4" col="3" id ="sn" name="description"></textarea>
				</div><br>
 				<input type="file" name="myimage"><br><br>
 				<input type="submit" name="additem" value="Add">
			</form>
		</div>
		</div>
		<div id="products">
				
		</div>
				
	</body>
</html>
