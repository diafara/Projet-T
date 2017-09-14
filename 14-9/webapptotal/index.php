<?php ini_set('default_charset', 'iso8859-1');
session_start();
       if(!isset($_SESSION['id'])){
        header('Location: ./connexion.html');   
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <title>L'oeil du Client</title>

    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->

    <!-- CORE CSS-->
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
	<!-- Custome CSS-->
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/morris-chart/morris.css" type="text/css" rel="stylesheet" media="screen,projection"
  >
  <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
 <link href="js/plugins/sweetalert/sweetalert.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- jQuery Library -->
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</head>
<body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">
                        <li>
                            <h1 class="logo-wrapper"><a href="index-2.html" class="brand-logo darken-1"><img src="images/materialize-logo.png" alt="materialize logo"></a> <span class="logo-text">Total</span></h1>
                        </li>
                    </ul>
                   <ul class="right">
                       
                       <li><span style="color:#000">
                        <?php echo $_SESSION['prenom'].' '.$_SESSION['nom'];?>
                         </span>
                    
                        </li>
                        <li><span><a href="./deconnexion.html?destroy=1" style="color:#000"><i class="mdi-action-settings-power"></i>
                         </a></span>
                    
                        </li>
                                                
                        
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s8 m8 l8">
                                <p class="user-roal">
                                    <br>
                                    <br>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="bold"><a href="./" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Accueil</a>
                    </li>
					 <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-settings"></i> Parametrages</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="utilisateur.html">Utilisateurs</a>
                                        </li>
                                        <li><a href="#">Region</a>
                                        </li>
                                       <li><a href="#">Station</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                    </li>
                    <li class="bold"><a href="avis.html" class="waves-effect waves-cyan"><i class="mdi-action-invert-colors"></i> Avis Clients</a>
                    </li>
                   
                    <li class="no-padding">
						
                     
                    </li>

                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan" href="statistique.html"><i class="mdi-editor-insert-chart"></i> Statistiques</a>

                    </li>
                    </ul>
                    </li>
                    <li class="li-hover">
                        <div class="divider"></div>
                    </li>
                    <li class="li-hover">
                        <br>
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="sample-chart-wrapper">
                                    <div class="ct-chart ct-golden-section" id="ct2-chart"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->
            <!-- START CONTENT -->
			<?php
			$tab["menu"]["utilisateur"]["ajouter"] = 1;
            $tab["menu"]["utilisateur"]["modifier"] = 1;
            $tab["menu"]["utilisateur"]["supprimer"] = 1;
            $tab["menu"]["utilisateur"]["details"] = 1;
	
            $tab["menu"]["statistique"]["modifier"] = 1;
            $tab["menu"]["statistique"]["supprimer"] = 1;
            $tab["menu"]["statistique"]["details"] = 1;

            $tab["menu"]["avis"]["modifier"] = 1;
            $tab["menu"]["avis"]["supprimer"] = 1;
            $tab["menu"]["avis"]["details"] = 1;
            $URL = $_SERVER['REQUEST_URI'];
	
    $URL = str_replace('/http://127.0.0.2/', "", $URL);
    $URL = str_replace('/', "", $URL);
    $URL = str_replace('.html', "", $URL);
    $tableau_chemin = explode("_",$URL);
    $taille = sizeof($tableau_chemin);
   //echo $taille;
        switch ($taille){
           case 3:{
                $a = !empty($tab["menu"][$tableau_chemin[0]]);
                if($a==1)
                    include('content/view/home/'.$tableau_chemin[0].'.php');
                break;
           }case 1:{
                $a = !empty($tab["menu"][$tableau_chemin[0]]);
                // echo $a;
                // echo "vovo";
                 if($a==1){
                     $liste = 1;
                    include('content/Controller/'.$tableau_chemin[0].'.php');
                }else
                  include('content/view/home/home.php');
                break;
           }case 2:{
                    $a = !empty($tab["menu"][$tableau_chemin[0]]);
                   $opt = $tableau_chemin[1];
                     if($a==1){
                         
                        include('content/Controller/'.$tableau_chemin[0].'.php');
                    }
                break;
                }
              
            }
?><!-- END CONTENT -->
           
        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->




    <!-- START FOOTER -->
    <footer class="page-footer">
        <div class="footer-copyright">
            <div class="container">
                <span>Copyright &copy; 2017 <a class="grey-text text-lighten-4" href="http://total.sn" target="_blank">Total Senegal</a> </span>
                <span class="right"> By <a class="grey-text text-lighten-4" href="#">MAD</a></span>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

 

    <!-- ================================================
    Scripts
    ================================================ -->

   
   
    <!--scrollbar-->
	
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
     <!-- data-tables -->
    <script type="text/javascript" src="js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/data-tables/data-tables-script.js"></script>
	  <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!-- morris -->
    <script type="text/javascript" src="js/plugins/raphael/raphael-min.js"></script>
    <script type="text/javascript" src="js/plugins/morris-chart/morris.min.js"></script>
   
<?php
     if($tableau_chemin[0]=="statistique"){
      include('./js/statistique.php');
     }?>
    

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
<script type="text/javascript" src="js/plugins/sweetalert/sweetalert.min.js"></script>  
</body>

</html>