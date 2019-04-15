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
					Page sécurisée
				</h1>


				<!-- <form action="index.php" method="post"> -->
				<form action="index.php" method="get">
		            <p>
						<input type="hidden" name="page" value="secret"/>
		            	<input type="password" name="mot_de_passe" />
		            	<input type="submit" value="Valider" />
           			</p>
        		</form>

				<p>
					Veuillez entrer votre mot de passe	
				</p>

				
				
			
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

