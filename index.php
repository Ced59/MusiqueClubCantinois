<?php
	require("models/model.php");

	global $pdo;

	if (isset($_GET['dossier']) AND isset($_GET['page'])) 
	{
		require("page/".$_GET['dossier']."/".$_GET['page'].".php");
	}

	elseif (isset($_GET['page']))
	{
		require("page/".$_GET['page'].".php");
	}

	// elseif(isset($_POST['page']))
	// {
	// 	require("page/".$_POST['page'].".php");
	// }
	
	else
	{
		require("page/accueil.php");
	}


