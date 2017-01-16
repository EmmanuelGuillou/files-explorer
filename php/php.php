<?php
error_reporting("E_ALL & ~NOTICE");

	$base_url = "/home/emmanuelg/";

	if (isset($_GET["param_url"])) {
		$base_url = $base_url.$_GET["param_url"];
	}

	$dir = scandir($base_url);	
?>