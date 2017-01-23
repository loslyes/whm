<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Whm">
    <meta name="author" content="Whm">
    <meta name="keyword" content="Whm">
    <link rel="shortcut icon" href="./vues/img/favicon.png">

    <title>Pare-feu - redirection</title>

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
      				<h3 class="page-header"><i class="fa fa fa-bars"></i> Redirection</h3>
      				<ol class="breadcrumb">
      					<li><i class="fa fa-home"></i><a href="index.php">Accueil</a></li>
      					<li><i class="fa fa-bars"></i>Pare-feu</li>
                <li><i class="fa fa-bars"></i>Redirection</li>
      				</ol>
      			</div>
      		</div>
          <!--FIN-Panel link page-->
          <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading">Création de règle de redirection</div>
                <div class="panel-body">
                  <!--Formulaire création règle redirection-->
                  <form method="POST" action="index.php?p=pf_redirection">
                    <div class="col-lg-2 col-md-2 col-xs-2">
                      <label for="interface_redirection">Interface :</label>
                        <select class="form-control" id="interface_redirection" name="redirection_interface">
                          <optgroup label="Macro">
                          </optgroup>
                          <optgroup label="Interface">
                          </optgroup>
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-2 col-xs-2">
                      <label for="protocole_redirection">Protocole :</label>
                        <select class="form-control" id="protocole_redirection" name="redirection_protocole">
                          <option>tcp</option>
                          <option>udp</option>
                          <option>icmp</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-2 col-xs-2">
                      <label for="ip_dst_redirection">Ip destination :</label>    
                      <input type="text" id="ip_dst_redirection" placeholder="Entrez une ip" class="form-control" name="redirection_ip_dst"/>
                    </div>
                    <div class="col-lg-2 col-md-2 col-xs-2">
                      <label for="port_dst_redirection">Port destination :</label>    
                      <input type="number" min="1" max="65535" id="port_dst_redirection" placeholder="Entrez un port" class="form-control" name="redirection_port_dst"/>
                    </div>
                    <div class="col-lg-2 col-md-2 col-xs-2">
                      <label for="ip_redirect_redirection">Ip redirect :</label>    
                      <input type="text" id="ip_redirect_redirection" placeholder="Entrez une ip" class="form-control" name="redirection_ip_redirect"/>
                    </div>
                    <div class="col-lg-2 col-md-2 col-xs-2">
                      <label for="port_redirect_redirection">Port redirect :</label>    
                      <input type="number" min="1" max="65535" id="port_redirect_redirection" placeholder="Entrez un port" class="form-control" name="redirection_port_redirect"/>
                    </div>
                    <br/><br/><br/><br/>
                    <div class="col lg-12 col-md-12 col-xs-12 text-center">  
                      <button type="submit" name="ajouter_pf_redirect" class="btn btn-default">Ajouter cette règle</button>
                    </div>
                  </form>
                  <!--FIN-Formulaire création règle redirection-->
                </div>
            </div>
          </div>
          <!--FIN-Panel création règle redirection-->
          <!--Tableau des règles de redirection-->
          <div class="panel panel-default">
            <div class="panel-heading">Tableau des règles de redirection</div>
              <div class="panel-body"> 
                <form method="POST" action="index.php?p=pf_redirection">
                <div class="input-group"> <span class="input-group-addon">Filtre</span>
                  <input id="filter" type="text" class="form-control" placeholder="Tapez ici...">
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Cocher</th>
                            <th>Interface</th>
                            <th>Protocole</th>
                            <th>Ip destination</th>
                            <th>Port destination</th>
                            <th>Ip redirect</th>
                            <th>Port redirect</th>
                        </tr>
                    </thead>
                    <tbody class="searchable">
                        <tr>
                            <td>
                              <input type="checkbox">
                            </td>
                            <td>re0</td>
                            <td>tcp</td>
                            <td>192.168.0.1</td>
                            <td>80</td>
                            <td>192.168.4.3</td>
                            <td>80</td>
                        </tr>
                    </tbody>
                </table>
                <div class="col lg-12 col-md-12 col-xs-12 text-center">  
                  <button type="submit" name="supprimer_pf_redirection" class="btn btn-danger">Supprimer des règles</button>
                </div>
              </form>
              </div>
          </div>
          <!--FIN-Tableau des règles de redirection-->
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