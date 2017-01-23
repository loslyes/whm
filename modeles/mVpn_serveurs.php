<?php
session_start();
	if(!isset($_SESSION['iduser'])){
        header('Location:index.php?p=login');
    }

    require('connexionbdd.php');
	
	 //Modifier le serveur x509
    if(isset($_POST['x509_serveur'])){
		
	//VERIFIER SI LE CHAMP A ETE COMPLETER
    if(!empty($_POST['interface_idinterface']) AND !empty($_POST['network_idnetwork']) AND !empty($_POST['client_to_client']) AND !empty($_POST['max_client']) AND !empty($_POST['log'])){    	
	$ip_serveur = htmlspecialchars($_POST['interface_idinterface']);
	$masque_serveur = htmlspecialchars($_POST['network_idnetwork']);
	$client_to_client = htmlspecialchars($_POST['client_to_client']);
	$client_max = htmlspecialchars($_POST['max_client']);
	$log = htmlspecialchars($_POST['log']);
	
	         

	{
	//update Network	
		$reqInsertvpn = $bdd->prepare("UPDATE network SET address = :ip ,mask = :masque WHERE idnetwork = 2");
        $reqInsertvpn->execute(array(
		'ip' => $_POST['interface_idinterface'],
		'masque' => $_POST['network_idnetwork'],
		));
	
	
	//update address
		$reqInsertvpn = $bdd->prepare("UPDATE address SET ip = :ip WHERE idaddress = 5");
        $reqInsertvpn->execute(array(
		'ip' => $_POST['interface_idinterface'],
		));
		
	
	//update max client et log
 		$reqUpdatevpn = $bdd->prepare("UPDATE vpn SET max_client = :client_max ,log = :log WHERE idvpn = 1");
 		$reqUpdatevpn->execute(array(
		'client_max' => $_POST['max_client'],
		'log' => $_POST['log'],
		));
		
		$messConfirmvpn = "Modification effectué avec succès !";
	}
	}
	else {
        $messErreurvpn = "Vous n'avez pas complêter tout les champs";
        }
	}
	
	// psk
	if(isset($_POST['psk_serveur'])){
	//VERIFIER SI LE CHAMP A ETE COMPLETER
	if(!empty($_POST['serverip']) AND !empty($_POST['clientip']) AND !empty($_POST['psk_log'])){
	$ip_serveur = htmlspecialchars($_POST['serverip']);
	$ip_client = htmlspecialchars($_POST['clientip']);
	$log_psk = htmlspecialchars($_POST['psk_log']);
	}	
		
		
		
		
	}
	