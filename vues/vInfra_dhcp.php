<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Whm">
  <meta name="author" content="Whm">
  <meta name="keyword" content="Whm">
  <link rel="shortcut icon" href="./vues/img/favicon.png">

  <title>Adressage</title>

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
            <h3 class="page-header"><i class="fa fa fa-bars"></i>Adressage</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Accueil</a></li>
              <li><i class="fa fa-bars"></i>Infrastructure</li>
              <li><i class="fa fa-bars"></i>Adressage</li>
            </ol>
          </div>
        </div>
        <!--FIN-Panel link page-->
        <!--Panel core page-->
        <div class="panel panel-default">
          <div class="panel-heading">DHCP</div>
          <div class="panel-body">

            <!-- Configuration DHCP -->
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Réseau</th>
                  <th>Masque</th>
                  <th>Domaine</th>
                  <th>Public</th>
                  <th>Passerelle</th>
                  <th>Serveur DNS</th>
                  <th>Plage</th>
                </tr>
              </thead>
              <tbody class="searchable">
                <tr>
                  <td>192.168.4.0</td>
                  <td>255.255.255.0</td>
                  <td>mondomaine.local</td>
                  <td>Non</td>
                  <td>192.168.4.1</td>
                  <td>192.168.4.1</td>
                  <td>192.168.4.2 - 192.168.4.250</td>
                </tr>
              </tbody>
            </table>
            <!-- FIN COnfiguration DHCP-->

            <!--Formulaire configuration DHCP-->
            <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#config-dhcp"><span class="icon_cog"></span></button>

            <div id="config-dhcp" class="collapse">
              <form method="POST" action="index.php?p=infra_dhcp" name="from_dhcp">
                <div class="form-group col-md-3">
                  <label for="ip">Adresse IP* :</label>
                  <input type="text" placeholder="Entrez une ip" class="form-control" name="network"/>
                </div>

                <div class="form-group col-md-3">
                  <label for="masque">Masque CIDR* :</label>
                  <input type="number" min="0" max="32" placeholder="Entrez un masque" class="form-control" name="mask"/>
                </div>

                <div class="form-group col-md-3">
                  <label for="domaine">Nom du Domaine* :</label>
                  <input type="text" placeholder="Entrez un nom" class="form-control" name="domain"/>
                </div>

                <div class="form-group col-md-3">
                  <label for="visibilité">Public* :</label>
                  <select class="form-control" id="public" name="public">
                    <option value="1" default>Oui</option>
                    <option value="0" >Non</option>
                  </select>
                </div>


                <div class="form-group col-md-3">
                  <label for="passerelle">Passerelle :</label>
                  <input type="text" placeholder="Entrez une ip" class="form-control" name="gateway"/>
                </div>

                <div class="form-group col-md-3">
                  <label for="dns">Serveur DNS :</label>
                  <input type="text" placeholder="Entrez une ip" class="form-control" name="dns"/>
                </div>

                <div class="form-group col-md-3">
                  <label for="first">1ère Addresse :</label>
                  <input type="text" placeholder="Entrez une ip" class="form-control" name="first"/>
                </div>

                <div class="form-group col-md-3">
                  <label for="last">Dernière Addresse :</label>
                  <input type="text" placeholder="Entrez une ip" class="form-control" name="last"/>
                </div>

                <div class="text-center">
                  <input type='hidden' name='formulaire' value='dhcp'>
                  <button type="submit" name="ajouter_pf_simple" class="btn btn-primary">Valider</button>
                </div>
              </form>
            </div>

          </div>
        </div>
        <!--FIN-Panel configuration DHCP-->

        <!--Panel configuration Interface-->
        <div class="panel panel-default">
          <div class="panel-heading">Interface</div>
          <div class="panel-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nom</th>
                  <th>Adresse</th>
                  <th>Masque</th>
                  <th>Configuration</th>
                  <th>Passerelle</th>
                  <th>Serveur DNS</th>
                  <th>Routage</th>
                </tr>
              </thead>
              <tbody class="searchable">
                <tr>
                  <td>eth0</td>
                  <td>192.168.4.1</td>
                  <td>255.255.255.0</td>
                  <td>static</td>
                  <td></td>
                  <td>192.168.4.1</td>
                  <td></td>
                </tr>
                <tr>
                  <td>eth1</td>
                  <td>10.0.0.2</td>
                  <td>255.255.255.0</td>
                  <td>dhcp</td>
                  <td>10.0.0.1</td>
                  <td>10.0.0.1</td>
                  <td></td>
                </tr>
              </tbody>
            </table>

            <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#config-eth"><span class="icon_cog"></span></button>

            <div id="config-eth" class="collapse">
                <form method="POST" action="index.php?p=infra_dhcp" name="from_eth">

                  <div class="form-group col-md-2">
                    <label for="visibilité">Interface* :</label>
                    <select class="form-control" id="interface" name="interface">
                      <option value="1">eth0</option>
                      <option value="2">eth1</option>
                    </select>
                  </div>

                  <div class="form-group col-md-2">
                    <label for="visibilité">Configuration* :</label>
                    <select class="form-control" id="state" name="state" onchange="disable_enable()">
                      <option value="static">static</option>
                      <option value="dhcp" selected>dhcp</option>
                      <option value="up">up</option>
                      <option value="down">down</option>
                    </select>
                  </div>

                  <div class="form-group col-md-2">
                    <label for="ip">Adresse IP :</label>
                    <input type="text" placeholder="Entrez une ip" class="form-control" id="network" name="network" disabled/>
                  </div>

                  <div class="form-group col-md-2">
                    <label for="masque">Masque CIDR :</label>
                    <input type="number" min="0" max="32" placeholder="Entrez un masque" class="form-control" id="mask" name="mask" disabled/>
                  </div>

                  <div class="form-group col-md-2">
                    <label for="passerelle">Passerelle :</label>
                    <input type="text" placeholder="Entrez une ip" class="form-control" id="gateway" name="gateway" disabled/>
                  </div>

                  <div class="form-group col-md-2">
                    <label for="dns">Serveur DNS :</label>
                    <input type="text" placeholder="Entrez une ip" class="form-control" id="dns" name="dns" disabled/>
                  </div>

                  <div class="text-center">
                    <input type='hidden' name='formulaire' value='interface'>
                    <button type="submit" name="ajouter_pf_simple" class="btn btn-primary">Valider</button>
                  </div>
                </form>
            </div>

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
    <script>
    function disable_enable() {
      if(document.getElementById('state').value == "static") {
        document.getElementById('network').disabled = false;
        document.getElementById('mask').disabled = false;
        document.getElementById('gateway').disabled = false;
        document.getElementById('dns').disabled = false;
      }
      else {
        document.getElementById('network').disabled = true;
        document.getElementById('mask').disabled = true;
        document.getElementById('gateway').disabled = true;
        document.getElementById('dns').disabled = true;
      }
    }
    </script>
  </body>
  </html>
