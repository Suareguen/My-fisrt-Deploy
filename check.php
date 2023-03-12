
<?php
    $host = "localhost:3306";
	$dbname = "wiitube";
	$dbuser = "root";
	$dbpass = "Lampara.1";
	
	// Connection
	$conn = new mysqli($host, $dbuser, $dbpass, $dbname); // mysqli is the DB *driver*
    function embedUrl($url){
        return str_replace("embed/", "watch?v=", $url);
    }
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: $conn->connect_error");
	}
	
	echo "<h1>Connection done!</h1>";
    ?>

