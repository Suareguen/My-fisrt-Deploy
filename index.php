<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $title = "Wiitube";
    $video_title = "title";
    $description = "description";
    $copyrigth = "@Copyrigth2023";
    $url = "url";
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
    <div id="container">
    <header>
        <?php 
            echo "<h1>$title</h1>";
            echo "<input id='search' type='text' placeholder='Search...'/>";
        ?>
        <a href="./login.php" class="myButton"><span>Login</span></a>
    </header>
    <section>
        <h2>HOME</h2>
        <fieldset>
            <?php echo "<ul>"; ?>
            <?php
                    $sql = "SELECT * from videos";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<li>Video Title: "."<a class='video' target='_blank' href='./video.php?url=$row[$url]&title=$row[$video_title]&description=$row[$description]'>". $row['title']. "</a>"."<a target='_blank' class='video' href=".embedUrl($row['url'])."> - 'Click here to Youtube'</a>". "\n </li>";
                            echo "<p>$row[$description]</p>";
                        }
                    } else {
                        echo "<h1>No results</h1>";
                    }
            ?>
            <?php echo "</ul>"; ?>
        </fieldset>
    </section>
    <footer>
        <?php echo "<p>$copyrigth</p>" ?>
    </footer>
    </div>
</body>
</html>

