<?php

// $option = (isset($_POST['option']) ? $_POST['option'] : '');

// switch($_POST['option']) {
// 	case 1: // add
// 		if (isset($_FILES['file']['name'])) {
// 			$target_dir = '../../storage/';
// 			$target_file = $target_dir . basename($_FILES['file']['name']);
			
// 			echo $_POST['option'];
// 			if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
// 			echo  $response;
// 		} else {
// 			$response = false;
// 		}
// 		exit;
// 	}
// 	break;
// }


if (isset($_FILES['file']['name'])) {
	$target_dir = '../../storage/';
	$target_file = $target_dir . basename($_FILES['file']['name']);
	
	// echo $_POST['option'];
	if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
	echo  $response;
} else {
	$response = false;
}
exit;
}
