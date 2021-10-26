<!DOCTYPE html>
<html>
	<head></head>
 
	<body>
 
 
	<style>
		.folderContent {
			margin-left: 40px;
		}
 
		.open {
			display: block;
		}
 
		.closed {
			display: none;
		}
 
		a {
			display: block;
		}
	</style>
 
 
 
<?php
$dir = "Devis";
// is_dir => On vérifie si $dir est un dossier
if (is_dir($dir)) 
{
 
	echo '<a class="folder" href="#">'.$dir.'</a>';
 
	// div ouvrant du contenu du dossier Devis 
	echo '<div class="folderContent closed">';
 
	// opendir => On ouvre le dossier Devis et on récupère un pointeur dessus
	if ($dh = opendir($dir)) 
	{ 
		// readdir ? Lit une entrée du dossier
		while (($year = readdir($dh)) !== false) 
		{
 
			if (in_array($year, array('.', '..')))
			{
				continue;
			}
 
			$dir_year = "C:/Users/hp/Desktop/Nouveau dossier";
 
			if(filetype($dir_year) == 'dir')
			{
				// On affiche un lien avec, comme texte, le nom du répertoire qui est l'année 
				echo '<a class="folder" href="#">'.$year.'</a>';
 
				// div ouvrant du contenu du dossier année 
				echo '<div class="folderContent closed">';
 
 
				// On ouvre 
				if ($dh_year = opendir($dir_year)) 
				{
					while (($client = readdir($dh_year)) !== false) 
					{
						if (in_array($client, array('.', '..')))
						{
							continue;
						}
 
						$dir_client = "C:/Users/hp/Desktop/Nouveau dossier";
 
						if(filetype($dir_client) == 'dir')
						{
							// On affiche un lien avec, comme texte, le nom du répertoire qui est "Client N°x"
							echo '<a class="folder" href="#">'.$client.'</a>';
 
							// div ouvrant du contenu du dossier client 
							echo '<div class="folderContent closed">';
 
 
							if ($dh_client = opendir($dir_client)) 
							{
								while (($fichier_devis = readdir($dh_client)) !== false) 
								{
									if (in_array($fichier_devis, array('.', '..')))
									{
										continue;
									}
 
									$path_fichier_devis = "C:/Users/hp/Desktop/Nouveau dossier";
 
									if(filetype($path_fichier_devis) == 'file')
									{
										echo '<a href="'.$path_fichier_devis.'">'.$fichier_devis.'</a>';
									}
 
								}
 
							}
 
							closedir($dh_client);
 
							// div fermant du contenu du dossier client
							echo '</div>';
						}					
 
					}
 
				}
 
				closedir($dh_year);
 
				// div fermant du contenu du dossier année
				echo '</div>';
			}
 
 
 
		}
	}
	closedir($dh);
 
	// div fermant du contenu du dossier Devis
	echo '</div>';
}
 
 
?>
 
	<script type="text/javascript">
 
		document.addEventListener("DOMContentLoaded", function(event) { 
 
			var elemsDossiers = document.querySelectorAll("a.folder");
 
			var nbDossiers = elemsDossiers.length;
 
			for(var i = 0; i < nbDossiers; i++)
			{
				elemsDossiers[i].addEventListener('click', function(e) { 
 
					var elementClique = e.target;
					var classListElement = elementClique.nextElementSibling.classList;
 
					if (classListElement.contains("closed"))
					{
						classListElement.replace("closed", "open");
					}
					else if(classListElement.contains("open"))
					{
						classListElement.replace("open", "closed");
					}
 
				});
 
			}
 
		});
 
	</script>
 
	</body>
</html>