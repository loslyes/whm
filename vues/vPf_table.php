<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Whm">
    <meta name="author" content="Whm">
    <meta name="keyword" content="Whm">
    <link rel="shortcut icon" href="./vues/img/favicon.png">

    <title>Pare-feu - table</title>

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
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
      		<div class="row">
      			<div class="col-lg-12">
      				<h3 class="page-header"><i class="fa fa fa-bars"></i> Table</h3>
      				<ol class="breadcrumb">
      					<li><i class="fa fa-home"></i><a href="index.php">Accueil</a></li>
      					<li><i class="fa fa-bars"></i>Pare-feu</li>
                <li><i class="fa fa-bars"></i>Table</li>
      				</ol>
      			</div>
      		</div>
          <!--FIN-Panel link page-->
          
          <!--Panel Création d'une table-->
          <div class="col-lg-4 col-md-4 col-xs-4">
            <div class="panel panel-default">
              <div class="panel-heading">Création d'une table</div>
                <div class="panel-body">
                  <!--Formulaire création table-->
                  <form method="POST" action="index.php?p=pf_table">
                      <label for="nom_table">Nom de la table :</label>
                      <input type="text" placeholder="Entrez un nom" id="nom_table" class="form-control" name="table_nom_table"/>
                      <br/>
                      <div class="text-center">
                      <button type="submit" name="ajouter_table" class="btn btn-default">Ajouter votre table</button>
                    </div>
                  </form>
                  <?php
                        if(isset($messErreurTable)){
                            echo $messErreurTable;
                        }
                        if(isset($messConfirmTable)){
                            echo $messConfirmTable;
                        }
                    ?>
                  <!--FIN-Formulaire création table-->
                </div>
            </div>
          </div>
          <!--FIN-Panel Création d'une table-->

          <!--Panel Ajout de contenu dans une table-->
          <div class="col-lg-8 col-md-8 col-xs-8">
            <div class="panel panel-default">
              <div class="panel-heading">Ajout de contenu dans une table</div>
                <div class="panel-body">
                  <!--Formulaire Ajout contenu table-->
                  <form method="POST" action="index.php?p=pf_table">
                    <div class="col-lg-6 col-md-6 col-xs-6">
                      <label for="nom_table_contenu">Nom de la table :</label>
                        <select class="form-control" id="nom_table_contenu" name="table_nom_table_contenu">
                          <?php
                            $nb = count($tabTable);
                            for($i=0; $i<$nb; $i++) {
                              echo '<option>'.$tabTable[$i].'</option>';
                            }
                          ?>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-6">
                      <label for="ip_table">Ajouter une ip :</label>
                        <input type="text" placeholder="Entrez une ip" id="ip_table" class="form-control" name="table_contenu"/>
                    </div>
                      <br/><br/><br/><br/>
                      <div class="text-center">
                        <button type="submit" name="ajouter_contenu_table" class="btn btn-default">Ajouter ce contenu</button>
                      </div>
                  </form>
                  <?php
                        if(isset($messErreurContenu)){
                            echo $messErreurContenu;
                        }
                        if(isset($messConfirmContenu)){
                            echo $messConfirmContenu;
                        }
                    ?>
                  <!--FIN-Formulaire ajout contenu table-->
                </div>
            </div>
          </div>
          <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
          <!--Tableau des tables-->
          <div class="panel panel-default">
            <div class="panel-heading">Tableau des tables</div>
              <div class="panel-body"> 
                  
                  <div class="input-group"><span class="input-group-addon">Filtre</span>
                    <input id="filter" type="text" class="form-control" placeholder="Tapez ici...">
                  </div>
                  
                  <table class="table table-striped">
                      <thead>
                          <tr>
                              <th>Supprimer la table</th>
                              <th>Nom de la table</th>
                              <th>Supprimer contenu</th>
                              <th>Contenu de la table</th>
                          </tr>
                      </thead>
                      <tbody class="searchable">
                          <?php
                            if(isset($tabTableTab)){
                            $nbIp = 0;
                            foreach($tabTableTab as $valeur){
                              echo '<form method="POST" action="index.php?p=pf_table">';
                              echo '<tr>';
                                echo '<td>';
                                  echo '<button type="submit" name="supprimer_table" class="btn btn-default">Supprimer</button>';
                                echo '</td>';
                                echo '<td>';
                                  echo $valeur;
                                  echo '<input type="hidden" name="valeurTable" value="'.$valeur.'">';
                                echo '</td>';
                                echo '<td>';
                                  echo '<button type="submit" name="supprimer_table_contenu" class="btn btn-danger">Supprimer une ip</button>';
                                echo '</td>';
                                echo '<td>';
                                  echo $tabIpTab[$nbIp];
                                  echo '<input type="hidden" name="valeurTableContenu" value="'.$tabIpTab[$nbIp].'">';
                                echo '</td>';
                              echo '</tr>';
                            $nbIp = $nbIp + 1;
                            echo '</form>';
                            }
                          }
                          ?>
                      </tbody>
                  </table>
              </div>
          </div> 
      </section> 
      <!--main content end-->
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