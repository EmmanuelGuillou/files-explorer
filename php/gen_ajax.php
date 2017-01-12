<?php include"php.php" ?>

<?php for($i=0; $i<count($dir); $i++){ ?>
	<?php if(is_dir($base_url.$dir[$i])){ ?>
		<?php if($dir[$i] == ".."){ ?>
			<div class="dossier">
				<a class="folder_name" href="index.php?param_url=<?=dirname($_GET['param_url'])?>/">
					<img src="image/blob_dossier2.svg"/>
				</a>	
				<a class="folder_name" id="<?=$dir[$i]?>" href="index.php?param_url=<?=dirname($_GET['param_url'])?>/">Retour</a>
			</div>
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

<script src="js/script.js"></script>