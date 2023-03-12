<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $title = "Wiitube";
    $video_title = "title";
    $description = "description";
    $copyrigth = "@Copyrigth2023";
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
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <link rel="stylesheet" href="./login.css">
    <title>Wiitube</title>
</head>
<body>
    <header>
        <?php 
            echo "<h1><a id='wiitube' href='./index.php'>$title</a></h1>";
        ?>
    </header>
    <div id="container-form">
        <?php 
            if (isset($_POST['login'])) {
                header("Location: ./user_movies.php?");
                exit;
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Retrieve the input username and password
                $input_username = $_POST['username'];
                $input_password = $_POST['password'];
        
                // Check if the user exists and the credentials are correct
                $conn = new mysqli($host, $dbuser, $dbpass, $dbname);
                $query = "SELECT COUNT(*) as user_count FROM users WHERE username = '$input_username' AND password = '$input_password';";
                $result = $conn->query($query);
                $row = $result->fetch_assoc();
                if ($row['user_count'] > 0) {
                    // The user exists and the credentials are correct
                    // Retrieve the list of movies added by the user
                    $query = "SELECT videos.title, videos.url
                              FROM videos
                              INNER JOIN users ON videos.id = users.video_id
                              WHERE users.username = '$input_username';";
                    $result = $conn->query($query);
                    $videos = $result->fetch_all();
                    //var_dump($videos);
                    // Redirect the user to a new file, passing the list of movies as a parameter
                    header("Location: ./user_movies.php?username=$input_username&title=".urlencode(json_encode($videos)));
                    exit;
                } else {
                    // The user doesn't exist or the credentials are incorrect
                    header("Location: ./login.php");
                    exit;
                }
            }
        ?>
        <form method="post" id="survey-form">
            <h1 id="title">Login</h1>
            <fieldset>
                <label id='name-label' for='username'>Username: 
                    <input id='username' name='username' type='text' placeholder='Pepito' required/>
                </label>
                <label id='password-label' for='password'>Password: 
                    <input id='password' name='password' type='password' required/>
                </label>
            </fieldset>
            <div id='button'>
            <button class="myButton"><span id="login">Login</span></button>
            </div>
        </form>
    </div>
    <footer>
        <?php echo "<p>$copyrigth</p>" ?>
    </footer>
</body>
</html>

