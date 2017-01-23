<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Whm">
    <meta name="author" content="Whm">
    <meta name="keyword" content="Whm">
    <link rel="shortcut icon" href="./vues/img/favicon.png">

    <title>Vpn - Clients</title>

    <!-- Bootstrap CSS -->    
    <link href="./vues/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="./vues/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="./vues/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="./vues/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="./vues/css/style.css" rel="stylesheet">
    <link href="./vues/css/style-responsive.css" rel="stylesheet" />
    <link href="./vues/css/switch.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      <?php
      include(dirname(__FILE__).'/header.php');
      ?>
	   
          <!--FIN-Panel Création d'une table-->
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
      		<div class="row">
      			<div class="col-lg-12">
      				<h3 class="page-header"><i class="fa fa fa-bars"></i> VPN</h3>
      				<ol class="breadcrumb">
      					<li><i class="fa fa-home"></i><a href="index.php">Accueil</a></li>
      					<li><i class="fa fa-bars"></i>VPN</li>
                <li><i class="fa fa-bars"></i>Clients</li>
      				</ol>
      			</div>
      		</div>
          <!--FIN-Panel link page-->
          <!--Panel Création d'une table-->
          <div class="col-lg-4">
            <div class="panel panel-default">
              <div class="panel-heading">Créer Un Client</div>
                <div class="panel-body">
                  <!--Formulaire création table-->
                  <form method="POST" action="index.php?p=vpn_clients">
				 
				  
				  <div class="col-lg-6">
				   <label for="nom">Nom :</label>
                     <input id="nom" type="text" class="form-control" placeholder="Client name ..." name="client_name">
					 </div>
					 
				   <div class="col lg-11 col-md-11 col-xs-11 text-left"> <br/>
				   <button type="submit" name="ajouter_client" class="btn btn-default">Créer</button>
				   </div>
				   <?php
                        if(isset($messErreurvpn)){
                            echo $messErreurvpn;
                        }
                        if(isset($messConfirmvpn)){
                            echo $messConfirmvpn;
                        }
                    ?>


					  
                      <br/>
                      <div class="text-center">
                      </br></br></br></br>
                    </div>
                  </form>
                  <!--FIN-Formulaire création table-->
                </div>
            </div>
          </div>
          <!--Tableau des clients-->
          <div class="col-lg-8">
		  <div class="panel panel-default">
            <div class="panel-heading">Tableau des clients</div>
              <div class="panel-body"> 
                <form method="POST" action="index.php?p=vpn_clients">
                <div class="input-group"> <span class="input-group-addon">Filtre</span>
                  <input id="filter" type="text" class="form-control" placeholder="Tapez ici...">
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                           
                            <th>Nom</th>
                           
							<th>supprimer</th>
						   <th></th>
                            
                        </tr>
                    </thead>
                    <tbody class="searchable">
                      <?php
                            if(isset($clienttab)){
                            foreach($clienttab as $valeur){
                              echo '<form method="POST" action="index.php?p=vpn_clients">';
                              echo '<tr>';
							  echo '<td>';
                                  echo $valeur;
                                  echo '<input type="hidden" name="valeurClient" value="'.$valeur.'">';
                                echo '</td>';
                                echo '<td>';
                                  echo '<button type="submit" name="supprimer_client" class="btn btn-default">Supprimer</button>';
                                echo '</td>';
                              echo '</tr>';
                        
                            echo '</form>';
                            }
                          }
                          ?>
                    </tbody>
                </table>
                
              </form>
              </div>
          </div> 
          
  </section>
  
  <!-- container section end -->
    <!-- javascripts -->
    <script src="./vues/js/jquery.js"></script>
    <script src="./vues/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="./vues/js/jquery.scrollTo.min.js"></script>
    <script src="./vues/js/jquery.nicescroll.js" type="text/javascript"></script><!--custome script for all page-->
    <script src="./vues/js/scripts.js"></script>
    <script src="./vues/js/tableau.js"></script>
  </body>
</html>