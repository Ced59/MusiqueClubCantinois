
<?php


// On indique au navigateur qu'on utilise l'encodage UTF-8
header('Content-type: text/html; charset=utf-8');

// Paramètres de connexion à la base
define('DB_HOST' , 'localhost');
define('DB_NAME' , 'name');
define('DB_USER' , 'root');
define('DB_PASS' , '');
 
// Connexion à la base avec PDO

	
		try{
		    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
		} catch(Exception $e) {
		    echo "Impossible de se connecter à la base de données '".DB_NAME."' sur ".DB_HOST." avec le compte utilisateur '".DB_USER."'";
		    echo "<br/>Erreur PDO : <i>".$e->getMessage()."</i>";
		    die();
		}



/**
 * Récupérer la véritable adresse IP d'un visiteur
 */
function get_ip() {
	// IP si internet partagé
	if (isset($_SERVER['HTTP_CLIENT_IP'])) {
		return $_SERVER['HTTP_CLIENT_IP'];
	}
	// IP derrière un proxy
	elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		return $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	// Sinon : IP normale
	else {
		return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
	}
}




// Fonction qui permet de mettre à jour le compteur de visites


function compter_visite()
	{
    // On va utiliser l'objet $pdo pour se connecter, il est créé en dehors de la fonction
    // donc on doit indiquer global $pdo; au début de la fonction
    global $pdo;
     
    // On prépare les données à insérer
    $ip   = get_ip(); // L'adresse IP du visiteur
    $date = date('Y-m-d');           // La date d'aujourd'hui, sous la forme AAAA-MM-JJ
     
    // Mise à jour de la base de données
    // 1. On initialise la requête préparée
    $query = $pdo->prepare("
    INSERT INTO stats_visites (ip , date_visite , pages_vues) VALUES (:ip , :date , 1)
    ON DUPLICATE KEY UPDATE pages_vues = pages_vues + 1
    ");
	// 2. On execute la requête préparée avec nos paramètres
	$query->execute(array(
	    ':ip'   => $ip,
	    ':date' => $date
	));

	 // 3. On compte le nombre d'entrée dans la table

	$nbre_visites = $pdo->query('SELECT COUNT(*) AS visits FROM stats_visites');
	$visites = $nbre_visites->fetch();
	return($visites['visits']);
	

	   
	}







