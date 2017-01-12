<?php
error_reporting("E_ALL & ~NOTICE");

	$base_url = "/home/emmanuelg/";

	if (isset($_GET["param_url"])) {
		$base_url = $base_url.$_GET["param_url"];
	}

	$dir = scandir($base_url);	
	
		
	// for($i=0; $i<count($dir); $i++){
		// if(is_dir($base_url.$dir[$i])){
			// if($dir[$i] != "commun" && $dir[$i] != "."){
				// echo("<a href='index.php?param_url=".$_GET["param_url"].$dir[$i]."/'>".$dir[$i]."</a><br>");
			// }
		// }	
		// else {
			// if(substr($dir[$i],0,1) != "."){
				// echo($dir[$i]."<br>");
			// }
		// }
	// }
?>