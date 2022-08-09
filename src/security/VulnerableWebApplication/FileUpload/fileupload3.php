<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="../Resources/hmbct.png" />
</head>
<body>
<div style="background-color:#c9c9c9;padding:15px;">
      <button type="button" name="homeButton" onclick="location.href='../homepage.html';">Home Page</button>
      <button type="button" name="mainButton" onclick="location.href='fileupl.html';">Main Page</button>
</div>
<div align="center">
<form action="" method="post" enctype="multipart/form-data">
    <br>
    <b>Select image : </b> 
    <input type="file" name="file" id="file" style="border: solid;">
    <input type="submit" value="Submit" name="submit">
</form>
	</div>
<?php

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
	$target_dir = "uploads/";

    /*
     * Liubomyr:
     * It`s better to validate file name
     */
	$target_file = $target_dir . basename($_FILES["file"]["name"]);
	$uploadOk = 1;

    /*
     * Liubomyr:
     * It`s better to generate file name
     * (for example hash of data and uuid)
     */
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$type = $_FILES["file"]["type"];
	$check = getimagesize($_FILES["file"]["tmp_name"]);

    /*
     * Liubomyr:
     * It`s better to check file size and add some limitation
     * Max file size may be set in php.ini
     */
	if($check["mime"] == "image/png" || $check["mime"] == "image/gif"){
		$uploadOk = 1;
	}else{
		$uploadOk = 0;
		echo "Mime?";
		echo $check["mime"];
	}

    /*
     * Liubomyr:
     * Better to check is file name is used
     */
  if($uploadOk == 1){
      move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
      echo "File uploaded /uploads/".$_FILES["file"]["name"];
  }
}
?>

</body>
</html>
