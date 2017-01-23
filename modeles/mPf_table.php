<?php
session_start();
	if(!isset($_SESSION['iduser'])){
        header('Location:index.php?p=login');
    }

    require('connexionbdd.php');

  
    //CREATION D'UNE TABLE  
    if(isset($_POST['ajouter_table'])){
    	
    	//VERIFIER SI LE CHAMP A ETE COMPLETER
        if(!empty($_POST['table_nom_table'])){
        	$nom_table = htmlspecialchars($_POST['table_nom_table']);
        	
        	//VERIFIER SI LA TABLE EXISTE PAS DANS LA BDD
        	$reqVerifTable = $bdd->prepare("SELECT * FROM table_pf WHERE name = ?");
            $reqVerifTable->execute(array($nom_table));
            $resultatVerifTable = $reqVerifTable->fetch();

            if($resultatVerifTable['name']){
                $messErreurTable = "Votre table existe déjà !";
            
            //INSERTION DE LA TABLE DANS LA BDD
            } else {
            	$reqInsertTable = $bdd->prepare("INSERT INTO table_pf(name) VALUES(?)");
                $reqInsertTable->execute(array($nom_table));
                $messConfirmTable = "Votre table à bien été créer !";
            }
        } else {
        	$messErreurTable = "Vous n'avez pas complêter le champ table";
        }
    }

    
    //AJOUT DE CONTENU DANS UNE TABLE

    if(isset($_POST['ajouter_contenu_table'])){
    	
        //VERIFICATION SI LES CHAMPS NE SONT PAS VIDE

    	if(!empty($_POST['table_nom_table_contenu']) AND !empty($_POST['table_contenu'])){
            $nom_table_contenu = htmlspecialchars($_POST['table_nom_table_contenu']);
            $contenu_table = htmlspecialchars($_POST['table_contenu']);
            
            //VERIFICATION DU FORMAT DE L'IP

        	if(preg_match('#^([0-9]{1,3}\.){3}[0-9]{1,3}$#', $contenu_table)){
        		
                //RECUPERATION ID DE LA TABLE
                $reqVerifTable = $bdd->prepare("SELECT idtable_pf FROM table_pf WHERE name = ?");
                $reqVerifTable->execute(array($nom_table_contenu));
                $resultatVerifTable = $reqVerifTable->fetch();

                //VERIFICATION SI L'IP EXISTE DEJA
                $reqVerifIp = $bdd->prepare("SELECT * FROM address WHERE ip = ?");
                $reqVerifIp->execute(array($contenu_table));
                $resultatVerifIp = $reqVerifIp->fetch();

                //VERIFICATION SI LIP EXISTE DEJA 
                if($resultatVerifIp['ip']){
                    
                    //VERIFICATION SI L'IP ET LA TABLE SONT DEJA EN RELATION
                    $reqVerifTableIp = $bdd->prepare("SELECT * FROM list_table WHERE idtable_pf = ? AND idaddress = ?");
                    $reqVerifTableIp->execute(array($resultatVerifTable['idtable_pf'], $resultatVerifIp['idaddress']));
                    $resultatVerifTableIp = $reqVerifTableIp->fetch();
                    
                    if($resultatVerifTableIp['idaddress']){
                        $messErreurContenu = "Cette ip existe déjà dans votre table";

                    } else {
                        //INSERTION DE l'ID DE LIP ET LID DE LA TABLE DANS LIST TABLE
                        $reqInsertIpTable = $bdd->prepare("INSERT INTO list_table(idtable_pf,idaddress) VALUES(?,?)");
                        $reqInsertIpTable->execute(array($resultatVerifTable['idtable_pf'], $resultatVerifIp['idaddress']));
                        $messConfirmContenu = "Votre ip à bien été ajouter à cette table";
                    }

                } else {
                    
                    //INSERTION DE L'IP DANS LA TABLE ADDRESS
                    $reqInsertIp = $bdd->prepare("INSERT INTO address(ip,network) VALUES(?,?)");
                    $reqInsertIp->execute(array($contenu_table, 1));

                    //RECUPERATION DE SON ID
                    $reqIdIp = $bdd->prepare("SELECT idaddress FROM address WHERE ip = ?");
                    $reqIdIp->execute(array($contenu_table));
                    $resultatIdIp = $reqIdIp->fetch();

                    //INSERTION DE l'ID DE LIP ET LID DE LA TABLE DANS LIST TABLE
                    $reqInsertIpTable = $bdd->prepare("INSERT INTO list_table(idtable_pf,idaddress) VALUES(?,?)");
                    $reqInsertIpTable->execute(array($resultatVerifTable['idtable_pf'], $resultatIdIp['idaddress']));
                    $messConfirmContenu = "Votre ip à bien été ajouter à cette table";

                }

    		} else {
        		$messErreurContenu = "Cette adresse IP a un format non adapté.";
    		}
        }
    }

    //SUPPRESSION DE TABLE

    if(isset($_POST['supprimer_table'])){
        $nom_table = $_POST['valeurTable'];

        $reqRecupSupprTable = $bdd->prepare("SELECT idtable_pf FROM table_pf WHERE name = ?");
        $reqRecupSupprTable->execute(array($nom_table));
        $resultat = $reqRecupSupprTable->fetch();

        $reqSupprListTable = $bdd->prepare("DELETE FROM list_table WHERE idtable_pf = ?");
        $reqSupprListTable->execute(array($resultat['idtable_pf']));
        
        $reqSupprTable = $bdd->prepare("DELETE FROM table_pf WHERE idtable_pf = ?");
        $reqSupprTable->execute(array($resultat['idtable_pf']));
    }

    //SUPPRESSION D'IP DANS UNE TABLE

    if(isset($_POST['supprimer_table_contenu'])){
        $ip = $_POST['valeurTableContenu'];
        $nom_table = $_POST['valeurTable'];

        $reqRecupSupprTable = $bdd->prepare("SELECT idtable_pf FROM table_pf WHERE name = ?");
        $reqRecupSupprTable->execute(array($nom_table));
        $resultatTable = $reqRecupSupprTable->fetch();

        $reqRecupSupprIp = $bdd->prepare("SELECT idaddress FROM address WHERE ip = ?");
        $reqRecupSupprIp->execute(array($ip));
        $resultatIp = $reqRecupSupprIp->fetch();

        $reqSupprListTable = $bdd->prepare("DELETE FROM list_table WHERE idtable_pf = ? AND idaddress = ?");
        $reqSupprListTable->execute(array($resultatTable['idtable_pf'], $resultatIp['idaddress']));
    }

    //LISTE DES TABLES ET LEURS IPS
    $reqRecupTableIp = $bdd->prepare("SELECT address.ip, table_pf.name FROM table_pf JOIN list_table ON table_pf.idtable_pf = list_table.idtable_pf JOIN address ON list_table.idaddress = address.idaddress");
    $reqRecupTableIp->execute(array());
    while($resultatRecupTableIp = $reqRecupTableIp->fetch()){
        $tabTableTab[] = $resultatRecupTableIp['name'];
        $tabIpTab[] = $resultatRecupTableIp['ip'];
    }

    $reqRecupTable = $bdd->prepare("SELECT name FROM table_pf");
    $reqRecupTable->execute(array());
    while($resultatRecupTable = $reqRecupTable->fetch()){
        $tabTable[] = $resultatRecupTable['name'];
    }
?>