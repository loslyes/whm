<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Whm">
    <meta name="author" content="Whm">
    <meta name="keyword" content="Whm">
    <link rel="shortcut icon" href="./vues/img/favicon.png">

    <title>Pare-feu - macro</title>

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
      				<h3 class="page-header"><i class="fa fa fa-bars"></i> Macro</h3>
      				<ol class="breadcrumb">
      					<li><i class="fa fa-home"></i><a href="index.php">Accueil</a></li>
      					<li><i class="fa fa-bars"></i>Pare-feu</li>
                <li><i class="fa fa-bars"></i>Macro</li>
      				</ol>
      			</div>
      		</div>
          <!--FIN-Panel link page-->
          
          <!--Panel Création d'une macro-->
          <div class="col-lg-6 col-md-6 col-xs-6">
            <div class="panel panel-default">
              <div class="panel-heading">Création d'une macro</div>
                <div class="panel-body">
                  <!--Formulaire création macro-->
                  <form method="POST" action="index.php?p=pf_macro">
                    <div class="col-lg-6 col-md-6 col-xs-6">
                      <label for="nom_macro">Nom de la macro :</label>
                      <input type="text" placeholder="Entrez un nom" id="nom_macro" class="form-control" name="macro_nom_macro"/>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-6">
                      <label for="select_creation_macro">Contenu :</label>
                      <select class="form-control" id="select_creation_macro">
                        <option></option>
                        <option>interface</option>
                        <option>port</option>
                      </select>
                      <div id="creation_interface_macro">
                        <select class="form-control" name="macro_interface_macro">
                          <option>re0</option>
                          <option>re1</option>
                        </select>
                        <button id="cancel_creation_interface_macro" class="btn btn-default">Annuler</button>
                        <br/><br/>
                      </div>
                      <div id="creation_port_macro">
                        <input type="number" min="0" max="65535" class="form-control" placeholder="Entrez un port" name="macro_port_macro"/>
                        <button id="cancel_creation_port_macro" class="btn btn-default">Annuler</button>
                        <br/><br/>
                      </div>
                    </div>         
                    <br/><br/><br/><br/>
                    <div class="text-center">
                      <button type="submit" name="ajouter_macro" class="btn btn-default">Ajouter votre macro</button>
                    </div>
                  </form>
                  <!--FIN-Formulaire création macro-->
                </div>
            </div>
          </div>
          <!--FIN-Panel Création d'une macro-->
          <!--Panel Ajout de contenu dans une macro-->
          <div class="col-lg-6 col-md-6 col-xs-6">
            <div class="panel panel-default">
              <div class="panel-heading">Ajout de contenu dans une macro</div>
                <div class="panel-body">
                  <!--Formulaire contenu macro-->
                  <form method="POST" action="index.php?p=pf_macro">
                    <div class="col-lg-6 col-md-6 col-xs-6">
                      <label for="contenu_nom_macro">Nom de la macro :</label>
                      <select class="form-control" id="contenu_nom_macro" name="contenu_nom_macro">
                        <option>macro1</option>
                        <option>macro2</option>
                      </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-6">
                      <label for="select_contenu_macro">Contenu :</label>
                      <select class="form-control" id="select_contenu_macro">
                        <option></option>
                        <option>interface</option>
                        <option>port</option>
                      </select>
                      <div id="contenu_interface_macro">
                        <select class="form-control" name="contenu_interface_macro">
                          <option>re0</option>
                          <option>re1</option>
                        </select>
                        <button id="cancel_contenu_interface_macro" class="btn btn-default">Annuler</button>
                        <br/><br/>
                      </div>
                      <div id="contenu_port_macro">
                        <input type="number" min="0" max="65535" class="form-control" placeholder="Entrez un port" name="contenu_port_macro"/>
                        <button id="cancel_contenu_port_macro" class="btn btn-default">Annuler</button>
                        <br/><br/>
                      </div>
                    </div>         
                    <br/><br/><br/><br/>
                    <div class="text-center">
                      <button type="submit" name="contenu_macro" class="btn btn-default">Ajouter ce contenu</button>
                    </div>
                  </form>
                  <!--FIN-Formulaire contenu macro-->
                </div>
            </div>
          </div>
          <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
          <!--FIN-Panel Ajout de contenu dans une macro-->
          <!--Tableau des macro-->
          <div class="panel panel-default">
            <div class="panel-heading">Tableau des macros</div>
              <div class="panel-body"> 
                <form method="POST" action="index.php?p=pf_macro">
                  
                  <div class="input-group"><span class="input-group-addon">Filtre</span>
                    <input id="filter" type="text" class="form-control" placeholder="Tapez ici...">
                  </div>
                  
                  <table class="table table-striped">
                      <thead>
                          <tr>
                              <th>Cocher</th>
                              <th>Nom de la macro</th>
                              <th>Cocher</th>
                              <th>Contenu de la macro</th>
                          </tr>
                      </thead>
                      <tbody class="searchable">
                          <tr>
                              <td>
                                <input type="checkbox" name="tab_nom_macro">
                              </td>
                              <td>macro1</td>
                              <td>
                                <input type="checkbox" name="tab_contenu_macro">
                              </td>
                              <td>re0</td>
                          </tr>
                      </tbody>
                  </table>
                  
                  <div class="col lg-12 col-md-12 col-xs-12 text-center">  
                    <button type="submit" name="supprimer_macro" class="btn btn-danger">Supprimer une macro</button>
                  </div>
                  <br/>
                  <div class="col lg-12 col-md-12 col-xs-12 text-center">  
                    <button type="submit" name="supprimer_contenu_macro" class="btn btn-danger">Supprimer un contenu</button>
                  </div>
                </form>
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
    <script src="./vues/js/input_select.js"></script>
  </body>
</html>