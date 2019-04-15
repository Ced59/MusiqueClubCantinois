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

			<?php
				if (isset($_GET['mot_de_passe']) AND $_GET['mot_de_passe'] == "")
				//if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] == "")
				{
					?>

			<div id="text">
				<h3>Liste des partitions</h3>
				<h4>Symphonie du nouveau monde - A.Dvõrak</h4>
				<ul>
					<li><a href="http://musique-cantin.fr/page/myr/Symphonie_du_nouveau_monde.myrweb.html">Symphonie du nouveau monde</a></li>
					<li><a href=http://musique-cantin.fr/page/myr/Symphonie_du_nouveau_monde_soprano.myrweb.html">Symphonie du nouveau monde (voix des sopranos)</a></li>
					<li><a href="http://musique-cantin.fr/page/myr/Symphonie_du_nouveau_monde_alto.myrweb.html">Symphonie du nouveau monde (voix des altis)</a></li>
					<li><a href="http://musique-cantin.fr/page/myr/Symphonie_du_nouveau_monde_basse.myrweb.html">Symphonie du nouveau monde (voix des basses)</a></li>
				</ul>
			</article>


				<?php
				}
				else
				{
					echo "<p>Mot de passe incorrect</p>";
				}
				?>

			</div>	
				
			
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

