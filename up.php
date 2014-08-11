<?php
	
	include_once 'connect.php';
	
	if(isset($_POST['submit'])){
	
	$temp = explode(".", $_FILES["file"]["name"]);

		if ($_FILES["file"]["error"] > 0) 
		{
			echo "Error: " . $_FILES["file"]["error"] . "<br>";
		} else {
			echo "Your: " . $_FILES["file"]["type"] . " was uploaded!";
			if (file_exists("upload/" . $_FILES["file"]["name"])) 
			{
			  echo $_FILES["file"]["name"] . " already exists. ";
			} else {
			  move_uploaded_file($_FILES["file"]["tmp_name"],
			  "uploads/" . $_FILES["file"]["name"]);
			  $image = "uploads/" . $_FILES["file"]["name"];
			  $query = $mysqli->query("INSERT INTO uploads VALUES ('','','$image')");
			}
		  }
	}
?>