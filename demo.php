<?php
	$servername = "ftp.shadelinks.com:21";
	$username = "shadelinks-77";
	$password = "Sunshinekpl@77";
	$dbname = "shadelinks";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}else{
		echo 'got'
	}
	$sql = "INSERT INTO data (data_id, name)
	VALUES (77, 'Doe')";

	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);


?>