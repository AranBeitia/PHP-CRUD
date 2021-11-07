<?php
	if(isset($_POST['fileName'])) {
		file_put_contents($_POST['fileName'], 'Yogesh');
		echo file_get_contents($_POST['fileName']); // Yogesh
		echo $response;
	} else {
		$response = false;
	}



