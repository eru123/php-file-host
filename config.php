<?php
error_reporting(0);
ini_set('display_errors', 0);
header('Access-Control-Allow-Origin: *');
	

$target_dir = __DIR__."/../../rms_data/uploads/";

if (!is_dir($target_dir))
		mkdir($target_dir,0700);

