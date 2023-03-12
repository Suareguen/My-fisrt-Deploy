<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $title = "Wiitube";
    $copyrigth = "@Copyrigth2023";
    $host = "localhost:3306";
	$dbname = "wiitube";
	$dbuser = "root";
	$dbpass = "Lampara.1";
    $video_title = $_GET['title'];
    $description = $_GET['description'];
    $url = $_GET['url'];
	// Connection
	$conn = new mysqli($host, $dbuser, $dbpass, $dbname); // mysqli is the DB *driver*
	// Check connection
	/*if ($conn->connect_error) {
		die("Connection failed: $conn->connect_error");
	}
	echo "Connection done!";*/
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Wiitube</title>
</head>
<body>
    <header>
        <?php 
        echo "<h1><a id='wiitube' href='./index.php'>$title</a></h1>";
        echo "<input id='search' type='text' placeholder='Search...'/>";
        ?>
        <a href="./login.php" class="myButton"><span>Login</span></a>
    </header>
    <section>
        <h2><?php echo $video_title?></h2>
        <?php echo "<ul>"; ?>
        <?php
            echo "<iframe width='560' height='315' src='$url' title='YouTube video playe' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe>";
        ?>
        <?php echo "</ul>"; ?>
    </section>
    <footer>
        <?php echo "<p>$copyrigth</p>" ?>
    </footer>
</body>
</html>