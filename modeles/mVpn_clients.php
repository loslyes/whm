<?php
session_start();
	if(!isset($_SESSION['iduser'])){
        header('Location:index.php?p=login');
    }
	require('connexionbdd.php');
	
	//CREATION D'UN CLIENT 
    if(isset($_POST['ajouter_client'])){
	//VERIFIER SI LE CHAMP A ETE COMPLETER
    if(!empty($_POST['client_name'])){
    $nom_client = htmlspecialchars($_POST['client_name']);
	
	//VERIFIER SI LE CLIENT EXISTE PAS DANS LA BDD
    $reqVerifvpn = $bdd->prepare("SELECT * FROM client_x509 WHERE name = ?");
    $reqVerifvpn->execute(array($nom_client));
    $resultatVerifvpn = $reqVerifvpn->fetch();
	
	if($resultatVerifvpn['name']){
    $messErreurvpn = "Ce client existe déjà !";
	
	//INSERTION de CLIENT DANS LA BDD
    } else {
        $reqInsertvpn = $bdd->prepare("INSERT INTO client_x509(name,server_x509,user) VALUES(?,?,?)");
        $reqInsertvpn->execute(array($nom_client, 1, 777,));
        $messConfirmvpn = "Votre client à bien été créer !";
            }
    } else {
        $messErreurvpn = "Vous n'avez pas complêter le champ nom client";
        }
	}
	//SUPPRESSION DE CLIENT
	{
		 if(isset($_POST['supprimer_client'])){
        $client_nom = $_POST['valeurClient'];

        $reqRecupSupprClient = $bdd->prepare("SELECT idclient_x509 FROM client_x509 WHERE name = ?");
        $reqRecupSupprClient->execute(array($client_nom));
        $resultat = $reqRecupSupprClient->fetch();

        $reqSupprListClient = $bdd->prepare("DELETE FROM client_x509 WHERE idclient_x509 = ?");
        $reqSupprListClient->execute(array($resultat['idclient_x509']));
		
	}

    }
	$reqRecupClient = $bdd->prepare("SELECT name FROM client_x509");
    $reqRecupClient->execute(array());
    while($resultatRecupClient = $reqRecupClient->fetch()){
        $clienttab[] = $resultatRecupClient['name'];
    }
?>