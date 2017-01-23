<?php

require('connexionbdd.php');

if(isset($_POST['connexion'])){
	$mailUtilisateur = htmlspecialchars($_POST['mail']);
	$motDePasse = $_POST['password'];
	
if($_POST['mail'] != NULL AND $_POST['password'] != NULL AND $_POST['password'] == $_POST['confirm_password'])
	{
		
      if($_POST['password'] == $_POST['confirm_password'])
      
       
      $search = $_POST['mail'];     
      $sql = $bdd->prepare('SELECT mail FROM user WHERE mail = \''.$search.'\';');
      $sql->execute(array('.$search.' => $_POST['mail']));
      $res = $sql->fetch();
     
	 if ($res)
      {
        // S'il y a un résultat, c'est à dire qu'il existe déjà le mail, alors "Ce mail est déjà utilisé"
        echo "mail non disponible";
        
      }
	  
	  else{
        $req = $bdd->prepare('INSERT INTO user(mail, password) values(:mail, :password)');
        $req->execute(array( 
          'mail' => $_POST['mail'],   
          'password' => $_POST['password'],
		  
          ));
	  }
	
}
}

?>