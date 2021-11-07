<?php
//echo $_POST['filePath'];

	if(isset($_POST['filePath'])) {
		echo $response;
	} else {
		$response = false;
	}


//BASE URL -> FOR LINK CSS
// $uri = $_SERVER['REQUEST_URI'];
// echo $uri;

// if (isset($uri) && $uri !== null) {
// $uri = substr($uri, 1);
// $uri = explode('/', $uri);
// $uri = "http://$_SERVER[HTTP_HOST]" . "/" . $uri[0];
// } else {
// $uri = null;
// }

// define("BASE_URL", $uri);