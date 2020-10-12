<?php
header('Content-Type: application/json');

	include_once("config.php");
	

	$scan = scandir($target_dir);
	$res = [];

	foreach ($scan as $key => $value) {
		if ($key !== 0 && $key !== 1) {
			$res[] = $value;
		}
	}

	echo(json_encode($res));
	die();
