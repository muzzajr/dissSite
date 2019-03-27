<?php
	session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		
	} else {
		header('Location: index.php');
	}
?>
<html>
	<head>
	  <link rel="stylesheet" href="Custom.css">
	</head>
    <body>
        <nav>
            <div class="topnav">
                <a id="btns" onclick="">Please Draw away!</a>
                <a id="btns" href="logout.php">Sign out</a>
            </div>
        </nav>
        
        <div id="center" >
            <a><img src="happy.png"></a>
            <a><img src="okay.png"></a>
            <a><img src="sad.png"></a>
            <a><img src="angry.png"></a>
        </div>
        <input type="button" value="Next" id="clr" size="23" onclick="window.location.href='/heroPage.html'">
    </body>
</html>