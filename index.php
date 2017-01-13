<!DOCTYPE html>
	
	<html>
	<?php include"php/php.php" ?>
		<head>
            <meta charset="utf-8"/>
			<title>Explorateur de fichiers</title>
			<meta name="description" content="description"/>
            <meta name="viewport" content="width-device-width, initial-scale=1.0"/>
			<link rel="stylesheet" type="text/css" href="css/style.css"/>
			<script src="js/jquery.min.js"></script>
			<script src="js/script.js"></script>
		</head
		
		<body>
			<header>
				<div class="box">
					<img src="image/captain_slime.svg"/>
					<div class="title">
						<h1>Blobby</h1>
						<p>l'exporateur qui colle</p>
					</div>
				</div>
			</header>
			
			<main>
				<div class="explo">
					<?php for($i=0; $i<count($dir); $i++){ ?>
						<?php if(is_dir($base_url.$dir[$i])){ ?>
							<?php if($dir[$i] == ".."){ ?>
								<!--<div class="dossier">
									<a class="folder_name" href="index.php?param_url=<?=dirname($_GET['param_url'])?>/">
										<img src="image/blob_dossier2.svg"/>
									</a>	
									<a class="folder_name" id="<?=$dir[$i]?>" href="index.php?param_url=<?=dirname($_GET['param_url'])?>/">Retour</a>
								</div>-->
							<?php } else if($dir[$i] != "commun" && $dir[$i] != "."){ ?>
								<div class="dossier">
									<a class="folder_name" href="index.php?param_url=<?=$_GET["param_url"].$dir[$i]?>/">
										<img src="image/blob_dossier.svg"/>
									<a>
									<a class="folder_name" href="index.php?param_url=<?=$_GET["param_url"].$dir[$i]?>/"> <?=$dir[$i]?> </a>
								</div>	
							<?php } ?>
						<?php } else { ?>	
							<?php if(substr($dir[$i],0,1) != "."){ ?>
								<div class="fichier">
									<svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
										<circle opacity="0.8" fill="#D2E5C1" stroke="#A1CD8A" stroke-width="2" stroke-miterlimit="10" cx="10.16" cy="9.819" r="5.938"/>
									</svg>
									<a class="file_name" id="<?=$dir[$i]?>"><?=$dir[$i]?></a>
								</div>
							<?php } ?>
						<?php } ?>
					<?php } ?>
				</div>
				
				<div class="explo" id="ajaxx">
				</div>
			</main>
			
			<div class="url">
				<p><?=$base_url?></p>
			</div>
			
		</body>
	
	</html>