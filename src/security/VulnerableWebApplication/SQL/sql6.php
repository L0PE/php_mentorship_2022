<!DOCTYPE html>
<html>
<head>
	<title>SQL Injection</title>
</head>
<body>

	 <div style="background-color:#c9c9c9;padding:15px;">
      <button type="button" name="homeButton" onclick="location.href='../homepage.html';">Home Page</button>
      <button type="button" name="mainButton" onclick="location.href='sqlmainpage.html';">Main Page</button>
    </div>
    <div align="center">
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="get" >
        <!--
        Liubomyr:
        It`s better to change the input type to a number. It isn't much but it's honest work
        -->
		<p>Give me book's number and I give you...</p>
		Book's number : <input type="text" name="number">
		<input type="submit" name="submit" value="Submit">
	</form>
	</div>
	<!--Admin password is in the secret table. I hope, anyone doesn't see it.-->
<?php
    /*
     * Liubomyr:
     * Database credentials and creating connections better to move to another private folder
     * also, creating a new user(role) with only read access to table books will help too,
     * mysqli need to be changed to PDO class
     */
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "1ccb8097d0e9ce9f154608be60224c7c";
	// Create connection
	$conn = new mysqli($servername, $username, $password,$db);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	//echo "Connected successfully";

    /*
     * Liubomyr:
     * Remove this variable
     */
	$source = "";
	if(isset($_GET["submit"])){
        /*
         * Liubomyr:
         * Input from user mast be validated
         * Better to use trim + filter_input(with FILTER_VALIDATE_INT or FILTER_SANITIZE_NUMBER_INT) or preg_match function.
         * And send the error to the user if input fails validation
         */
		$number = $_GET['number'];
        /*
         * Liubomyr:
         * Change this with PDO::prepare() usages
         */
		$query = "SELECT bookname,authorname FROM books WHERE number = '$number'";
		$result = mysqli_query($conn,$query);
		$row = @mysqli_num_rows($result);
		echo "<hr>";
		if($row > 0){
			echo "<pre>There is a book with this index.</pre>";
		}else{
			echo "Not found!";
		}
	}

?> 
</body>
</html>
