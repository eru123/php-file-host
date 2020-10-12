<?php
header('Content-Type: application/json');

	include_once("config.php");
	
	

	$res = [];

	

	$target_file = $target_dir.basename($_FILES["file"]["name"]);

	if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
		$res["message"] = "THe file '".basename($_FILES["file"]["name"])."' has been uploaded";
	} else {
		$res["message"] = "Sorry, there was an error uploading your file.";
	}

	echo json_encode($res);
	die();