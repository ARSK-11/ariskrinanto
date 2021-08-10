<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>come root</title>
</head>
<body>
<div class="jumbotron">
    <h2>WELCOME</h2>
</div>
<br />
<br />
<nav>
    <ul>
        <li><a class="menu-btn" href="index.php?page=home">home</a></li>
        <li><a class="menu-btn" href="index.php?page=content">content</a></li>
        <li><a class="menu-btn" href="index.php?page=abot">about</a></li>
    </ul>
</nav>
<br>
<br>
<div class="content">
    
    <?php

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
		switch ($page) {
			case 'home':
                include "halaman/home.php";
				break;
			case 'content':
				include "halaman/content.php";
				break;
			case 'about':
				include "halaman/about.php";
				break;

            default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;	
        }  
    }  
    ?>
    <script src="./js/main.js"></script>
</div>
</body>
</html>