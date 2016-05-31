<?php
	$servername = "ftp.shadelinks.com:21";
	$username = "shadelinks-77";
	$password = "Sunshinekpl@77";
	$dbname = "shadelinks";
echo 'got1'
	// Create connection
echo 'got2'
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		echo 'got3'
	    die("Connection failed: " . mysqli_connect_error());
	}else{
		echo 'got77'
	}
	$sql = "INSERT INTO data (data_id, name)
	VALUES (77, 'Doe')";

	if (mysqli_query($conn, $sql)) {
		echo 'got4'
	    echo "New record created successfully";
	} else {
		echo 'got5'
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);


?>