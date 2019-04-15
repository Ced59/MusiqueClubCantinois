<body>
<div id="container">

<?php
	require("menus/head.php");

?>





	<div id="bloc_page">
		<header>
			<?php 
				require("menus/header.php"); //Chargement titre principal
			?>
		</header>


		<div id="main">

			<div id="sidebar">
          
            </div>


			<div id="text">
			<h1>
					Liste des Concerts
				</h1>

				
				<ul>
				<li><a href="index.php?dossier=concerts&amp;page=concert_25mars2018">Concert du 25 mars 2018 - Rencontre Chorales - Eglise de Cantin</a></li>
				<li><a href="index.php?dossier=concerts&amp;page=concert_fete_musique2018">Concert de la fête de la musique 2018 - Salle des fêtes de Cantin</a></li>
				</ul>
			
		</div>







	</div>

<?php
	require("menus/footer.php");

?>
</div>
</body>

<?php 
	

?>
</html>



