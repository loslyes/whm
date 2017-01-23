<header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.php" class="logo">Whm <span class="lite">Box</span></a>
            <!--logo end-->

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="./vues/img/lyes.jpg">
                            </span>
                            <span class="username">Lyes MEZAHDA</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="./vues/vDeconnexion.php"><i class="icon_key_alt"></i> Déconnexion</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_mail_alt"></i> je sais pas</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="">
                      <a class="" href="index.php?p=index">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				          <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Pare-feu</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="index.php?p=pf_simple">Règle simple</a></li>                          
                          <li><a class="" href="index.php?p=pf_avancer">Règle avancée</a></li>
                          <li><a class="" href="index.php?p=pf_redirection">Règle de redirection</a></li>                          
                          <li><a class="" href="index.php?p=pf_macro">Macro</a></li>
                          <li><a class="" href="index.php?p=pf_table">Table</a></li>                          
                          <li><a class="" href="index.php?p=pf_queue">Queue</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                    <a href="javascript:;" class="">
                      <i class="icon_document_alt"></i>
                      <span>Vpn</span>
                      <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                      <li><a class="" href="index.php?p=vpn_serveurs">Serveurs</a></li>                          
                      <li><a class="" href="index.php?p=vpn_clients">Clients</a></li>
                    </ul>
                  </li>
                  <li class="">
                      <a class="" href="index.html">
                          <i class="icon_document_alt"></i>
                          <span>Dns</span>
                      </a>
                  </li>       
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->