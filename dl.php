<?php


	include_once("config.php");

	if (isset($_GET["f"]) && file_exists($target_dir.$_GET["f"])) {


		$file = $target_dir.$_GET["f"];

    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
    exit;
	} else {
		echo "invalid";
	}