<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $title = "Wiitube";
    $video_title = "title";
    $description = "description";
    $copyrigth = "@Copyrigth2023";
    $url = "url";
    $num1 = 0;
    $num2 = 1;
    $num3 = 2;
    $username =  $_GET['username'];
    $video = json_decode(urldecode($_GET['title']), true);
    $host = "localhost:3306";
	$dbname = "wiitube";
	$dbuser = "root";
	$dbpass = "Lampara.1";
	
	// Connection
	$conn = new mysqli($host, $dbuser, $dbpass, $dbname); // mysqli is the DB *driver*
	
	// Check connection
	/*if ($conn->connect_error) {
		die("Connection failed: $conn->connect_error");
	}
	
	echo "Connection done!";*/

    function embedUrl($url){
        return str_replace("embed/", "watch?v=", $url);
    }

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
        echo "<h1><a id='wiitube' href='./index.php'>$title</a></h1>";
        echo "<input id='search' type='text' placeholder='Search...'/>";
        ?>
        <a href="./login.php" class="myButton"><span>Login</span></a>
    </header>
    <section id="header">
        <?php echo "
        <div id='container3'>
        <h2>Username: $username </h2>
        <h2>Updated Videos: </h2>
        </div>";
        ?>
        <fieldset>
            <?php echo "<ul>"; ?>
            <?php
                for($i = 0; $i < sizeof($video); $i++){
                    //var_dump($video);
                    $container1 = $video[$i][0];
                    $container2 = $video[$i][1];
                    //var_dump($video[$i][1]);
                    echo "<li><a target='_blank' href='".embedUrl($container2)."'>$container1</a></li>";
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

