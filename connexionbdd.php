<?php
/* connection a la base de données */
try{
  	$bdd = new PDO('mysql:host=localhost;dbname=mydb', 'root', 'root');
	$bdd->exec("SET CHARACTER SET utf8");
}catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
}
?>