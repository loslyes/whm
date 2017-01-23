<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Whm">
    <meta name="author" content="Whm">
    <meta name="keyword" content="Whm">
    <link rel="shortcut icon" href="./vues/img/favicon.png">

    <title>Pare-feu - simple</title>

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
      				<h3 class="page-header"><i class="fa fa fa-bars"></i> Règle simple</h3>
      				<ol class="breadcrumb">
      					<li><i class="fa fa-home"></i><a href="index.php">Accueil</a></li>
      					<li><i class="fa fa-bars"></i>Pare-feu</li>
                <li><i class="fa fa-bars"></i>Règle simple</li>
      				</ol>
      			</div>
      		</div>
          <!--FIN-Panel link page-->
          <!--Panel core page-->
          <div class="panel panel-default">
            <div class="panel-heading">Création de règle simple</div>
              <div class="panel-body">
                <!--Formulaire création règle simple-->
                <form method="POST" action="index.php?p=pf_simple">
                    
                    <div class="form-group col-md-3">
                      <label for="action">Action :</label>
                      <select class="form-control" id="action" name="simple_action">
                        <option>pass</option>
                        <option>block</option>
                      </select>
                      <label for="ip_src_select">Ip source :</label>
                      <select class="form-control" id="ip_src_select" name="simple_ip_src">
                        <optgroup label="Ip">
                        </optgroup>
                        <optgroup label="Macro">
                        </optgroup>
                        <optgroup label="Table">
                        </optgroup>
                        <option>none</option>
                        <option>Entrez une ip</option>
                      </select>
                      <div id="ip_src_input">
                        <input type="text" placeholder="Entrez une ip" class="form-control" name="input_ip_src"/>
                        <button id="cancel_ip_src" class="btn btn-default">Annuler</button>
                      </div> 
                    </div>

                    <div class="form-group col-md-3">
                      <label for="direction">Direction :</label>
                      <select class="form-control" id="direction" name="simple_direction">
                        <option>in</option>
                        <option>out</option>
                        <option>none</option>
                      </select>
                      <label for="port_src_select">Port source :</label>
                      <select class="form-control" id="port_src_select" name="simple_port_src">
                        <optgroup label="Port">
                        </optgroup>
                        <optgroup label="Macro">
                        </optgroup>
                        <option>none</option>
                        <option>Entrez un port</option>
                      </select>
                      <div id="port_src_input">
                        <input type="number" min="0" max="65535" placeholder="Entrez un port" class="form-control" name="input_port_src"/>
                        <button id="cancel_port_src" class="btn btn-default">Annuler</button>
                      </div> 
                    </div>

                    <div class="form-group col-md-3">
                      <label for="interface">Interface :</label>
                      <select class="form-control" id="interface" name="simple_interface">
                        <optgroup label="Macro">
                        </optgroup>
                        <optgroup label="Interface">
                        </optgroup>
                      </select>
                      <label for="ip_dst_select">Ip destination :</label>
                      <select class="form-control" id="ip_dst_select" name="simple_ip_dst">
                        <optgroup label="Ip">
                        </optgroup>
                        <optgroup label="Macro">
                        </optgroup>
                        <optgroup label="Table">
                        </optgroup>
                        <option>none</option>
                        <option>Entrez une ip</option>
                      </select>
                      <div id="ip_dst_input">
                        <input type="text" class="form-control" placeholder="Entrez une ip" name="input_ip_dst"/>
                        <button id="cancel_ip_dst" class="btn btn-default">Annuler</button>
                      </div> 
                    </div>

                    <div class="form-group col-md-3">
                      <label for="protocole">Protocole :</label>
                      <select class="form-control" id="protocole" name="simple_protocole">
                        <option>tcp</option>
                        <option>udp</option>
                        <option>icmp</option>
                      </select>
                      <label for="port_dst_select">Port destination :</label>
                      <select class="form-control" id="port_dst_select" name="simple_port_dst">
                        <optgroup label="Port">
                        </optgroup>
                        <optgroup label="Macro">
                        </optgroup>
                        <option>none</option>
                        <option>Entrez un port</option>
                      </select>
                      <div id="port_dst_input">
                        <input type="number" min="0" max="65535" placeholder="Entrez un port" class="form-control" name="input_port_dst"/>
                        <button id="cancel_port_dst" class="btn btn-default">Annuler</button>
                      </div>
                    </div>

                  <div class="col lg-11 col-md-11 col-xs-11 text-center">  
                    <button type="submit" name="ajouter_pf_simple" class="btn btn-default">Ajouter cette règle</button>
                  </div>
                </form>
              <!--FIN-Formulaire création règle simple-->
              </div>
            </div>
            <!--FIN-Panel création règle simple-->
          
          <!--Tableau des règles-->
          <div class="panel panel-default">
            <div class="panel-heading">Tableau des règles simple</div>
              <div class="panel-body"> 
                <form method="POST" action="index.php?p=pf_simple">
                <div class="input-group"> <span class="input-group-addon">Filtre</span>
                  <input id="filter" type="text" class="form-control" placeholder="Tapez ici...">
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Cocher</th>
                            <th>Action</th>
                            <th>Direction</th>
                            <th>Interface</th>
                            <th>Protocole</th>
                            <th>Ip source</th>
                            <th>Port source</th>
                            <th>Ip destination</th>
                            <th>Port destination</th>
                        </tr>
                    </thead>
                    <tbody class="searchable">
                        <tr>
                            <td>
                              <input type="checkbox">
                            </td>
                            <td>pass</td>
                            <td>in</td>
                            <td>re0</td>
                            <td>tcp</td>
                            <td>192.168.4.3</td>
                            <td>22</td>
                            <td>192.168.4.2</td>
                            <td>25</td>
                        </tr>
                    </tbody>
                </table>
                <div class="col lg-11 col-md-11 col-xs-11 text-center">  
                  <button type="submit" name="supprimer_pf_simple" class="btn btn-danger">Supprimer des règles</button>
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