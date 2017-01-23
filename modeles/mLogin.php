<?php

require('connexionbdd.php');

if(isset($_POST['connexion'])){
	$nomUtilisateur = htmlspecialchars($_POST['username']);
	$motDePasse = $_POST['password'];
	
	if(!empty($nomUtilisateur) AND !empty($motDePasse)){
		$reqUtilisateur = $bdd->prepare("SELECT * FROM user WHERE mail = ? AND password = ?");
		$reqUtilisateur->execute(array($nomUtilisateur, $motDePasse));
		$utilisateurExist = $reqUtilisateur->rowCount();
		
		if($utilisateurExist == 1){
			$utilisateurInfo = $reqUtilisateur->fetch();
			session_start();
			$_SESSION['iduser'] = $utilisateurInfo['iduser'];
			$_SESSION['mail'] = $utilisateurInfo['mail'];
			header("Location:index.php?p=index");	
		} else {
			echo "Mauvais nom d'utilisateur ou mot de passe !";
		}
	} else {
		echo "Tous les champs doivent être complétés !";
	}
}
?>