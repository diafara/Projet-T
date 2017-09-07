<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="fr">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no" />

    <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32">

    <title>Admin Site Supdeco</title>

    <!-- htmleditor (codeMirror) -->
    <link rel="stylesheet" href="bower_components/codemirror/lib/codemirror.css">

    <link rel="stylesheet" href="assets/skins/dropify/css/dropify.css">
    <!-- uikit -->
    <link rel="stylesheet" href="bower_components/uikit/css/uikit.almost-flat.min.css" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="assets/icons/flags/flags.min.css" media="all">

    <!-- style switcher -->
    <link rel="stylesheet" href="assets/css/style_switcher.min.css" media="all">

    <!-- altair admin -->
    <link rel="stylesheet" href="assets/css/main.min.css" media="all">

    <!-- themes -->
    <link rel="stylesheet" href="assets/css/themes/themes_combined.min.css" media="all">

    <!--[if lte IE 9]>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.js"></script>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.addListener.js"></script>
    <![endif]-->

</head>

<body class="top_menu top_bar_active boxed_layout">
    <!-- main header -->
    <header id="header_main">
        <div class="header_main_content">
            <nav class="uk-navbar">
                <div class="main_logo_top">
                    <a href="index-2.html"><img src="assets/img/logo_main_white.png" alt="" height="25" width="80" /></a>
                </div>

                <!-- secondary sidebar switch -->
                <a href="#" id="sidebar_secondary_toggle" class="sSwitch sSwitch_right sidebar_secondary_check">
                    <span class="sSwitchIcon"></span>
                </a>

                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav user_actions">
                        <li><a href="#" id="full_screen_toggle" class="user_action_icon uk-visible-large"><i class="material-icons md-24 md-light">&#xE5D0;</i></a></li>
                        <!-- <li><a href="#" id="main_search_btn" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE8B6;</i></a> -->
                        </li>
                        <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                            <a href="#" class="user_action_image"><img class="md-user-image" src="assets/img/avatars/images.jpg" alt="" height="34px" width="34px" /></a>
                            <div class="uk-dropdown uk-dropdown-small">
                                <ul class="uk-nav js-uk-prevent">
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="#">Parametres</a></li>
                                    <li><a href="#">Deconnexion</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="header_main_search_form">
            <i class="md-icon header_main_search_close material-icons">&#xE5CD;</i>
            <form class="uk-form uk-autocomplete" data-uk-autocomplete="{source:'data/search_data.json'}">
                <input type="text" class="header_main_search_input" />
                <button class="header_main_search_btn uk-button-link"><i class="md-icon material-icons">&#xE8B6;</i></button>
                <script type="text/autocomplete">
                    <ul class="uk-nav uk-nav-autocomplete uk-autocomplete-results">
                        {{~items}}
                        <li data-value="{{ $item.value }}">
                            <a href="{{ $item.url }}">
                                {{ $item.value }}<br>
                                <span class="uk-text-muted uk-text-small">{{{ $item.text }}}</span>
                            </a>
                        </li>
                        {{/items}}
                    </ul>
                </script>
            </form>
        </div>
    </header>
    <!-- main header end -->
    <div id="top_bar">
        <div class="md-top-bar">
            <ul id="menu_top" class="uk-clearfix">
                <li class="uk-hidden-small"><a href="./"><i class="material-icons">&#xE88A;</i></a></li>
                <li data-uk-dropdown class="uk-hidden-small">
                    <a href="#"><i class="material-icons"><img src="icon/programme.jpg"/></i><span>Navigation</span></a>
                    <div class="uk-dropdown">
                        <ul class="uk-nav uk-nav-dropdown">
                            <li><a href="article">Article</a></li>
                            <li><a href="evenement">&Eacute;v&eacute;nement</a></li>
                            <li><a href="slide">Sliders</a></li>
                            <li><a href="galerie">Galerie</a></li>
                            <li><a href="sendnewsletter">Newsletter</a></li>
                            <li><a href="contact">Contact</a></li>
                            <li><a href="utilisateur">Utilisateur</a></li>
                            <li><a href="menu">Menu</a></li>
                            
                        </ul>
                    </div>
                </li>
                
            </ul>
        </div>
    </div>
    <!-- common functions -->
    <script src="assets/js/common.min.js"></script>

    <!-- uikit functions -->
    <script src="assets/js/uikit_custom.min.js"></script>
    <!-- altair common functions/helpers -->
    <script src="assets/js/altair_admin_common.min.js"></script>
    <script src="assets/js/pages/components_preloaders.min.js"></script>

    <?php
   
    
    $tab["menu"]["article"]["ajouter"] = 1;
    $tab["menu"]["article"]["modifier"] = 1;
    $tab["menu"]["article"]["supprimer"] = 1;
    $tab["menu"]["article"]["details"] = 1;

    $tab["menu"]["page"]["ajouter"] = 1;
    $tab["menu"]["page"]["modifier"] = 1;
    $tab["menu"]["page"]["supprimer"] = 1;
    $tab["menu"]["page"]["details"] = 1;

    $tab["menu"]["slide"]["ajouter"] = 1;
    $tab["menu"]["slide"]["modifier"] = 1;
    $tab["menu"]["slide"]["supprimer"] = 1;
    $tab["menu"]["slide"]["details"] = 1;
    
    
    $tab["menu"]["evenement"]["ajouter"] = 1;
    $tab["menu"]["evenement"]["modifier"] = 1;
    $tab["menu"]["evenement"]["supprimer"] = 1;
    $tab["menu"]["evenement"]["details"] = 1;

    $tab["menu"]["galerie"]["ajouter"] = 1;
    $tab["menu"]["galerie"]["modifier"] = 1;
    $tab["menu"]["galerie"]["supprimer"] = 1;
    $tab["menu"]["galerie"]["details"] = 1;

   
    $tab["menu"]["sendnewsletter"]["ajouter"] = 1;
    $tab["menu"]["sendnewsletter"]["modifier"] = 1;
    $tab["menu"]["sendnewsletter"]["supprimer"] = 1;
    $tab["menu"]["sendnewsletter"]["details"] = 1;

    $tab["menu"]["contact"]["ajouter"] = 1;
    $tab["menu"]["contact"]["modifier"] = 1;
    $tab["menu"]["contact"]["supprimer"] = 1;
    $tab["menu"]["contact"]["details"] = 1;
    
    $tab["menu"]["utilisateur"]["ajouter"] = 1;
    $tab["menu"]["utilisateur"]["modifier"] = 1;
    $tab["menu"]["utilisateur"]["supprimer"] = 1;
    $tab["menu"]["utilisateur"]["details"] = 1;
    
    
    
	$tab["menu"]["menu"]["ajouter"] = 1;
    $tab["menu"]["menu"]["modifier"] = 1;
    $tab["menu"]["menu"]["supprimer"] = 1;
    $tab["menu"]["menu"]["details"] = 1;


    
	
	$tab["menu"]["paramacad"]["jury"]["ajouter"] = 1;
    $tab["menu"]["paramacad"]["jury"]["modifier"] = 1;
    $tab["menu"]["paramacad"]["jury"]["supprimer"] = 1;
    $tab["menu"]["paramacad"]["jury"]["details"] = 1;

    
    $tab["menu"]["paramacad"]["encadreur"]["ajouter"] = 1;
    $tab["menu"]["paramacad"]["encadreur"]["modifier"] = 1;
    $tab["menu"]["paramacad"]["encadreur"]["supprimer"] = 1;
    $tab["menu"]["paramacad"]["encadreur"]["details"] = 1;
    
    $tab["menu"]["paramacad"]["promotion"]["ajouter"] = 1;
    $tab["menu"]["paramacad"]["promotion"]["modifier"] = 1;
    $tab["menu"]["paramacad"]["promotion"]["supprimer"] = 1;
    $tab["menu"]["paramacad"]["promotion"]["details"] = 1;
    
    
	$tab["menu"]["paramacad"]["semestre"]["ajouter"] = 1;
    $tab["menu"]["paramacad"]["semestre"]["modifier"] = 1;
    $tab["menu"]["paramacad"]["semestre"]["supprimer"] = 1;
    $tab["menu"]["paramacad"]["semestre"]["details"] = 1;
    
    

	$tab["menu"]["paramacad"]["site"]["ajouter"] = 1;
    $tab["menu"]["paramacad"]["site"]["modifier"] = 1;
    $tab["menu"]["paramacad"]["site"]["supprimer"] = 1;
    $tab["menu"]["paramacad"]["site"]["details"] = 1;


	$tab["menu"]["paramacad"]["session"]["ajouter"] = 1;
    $tab["menu"]["paramacad"]["session"]["modifier"] = 1;
    $tab["menu"]["paramacad"]["session"]["supprimer"] = 1;
    $tab["menu"]["paramacad"]["session"]["details"] = 1;
    
    
    $tab["menu"]["scolariteacad"]["tuteur"]["ajouter"] = 1;
    $tab["menu"]["scolariteacad"]["tuteur"]["modifier"] = 1;
    $tab["menu"]["scolariteacad"]["tuteur"]["supprimer"] = 1;
    $tab["menu"]["scolariteacad"]["tuteur"]["details"] = 1;

    
	$tab["menu"]["paramacad"]["typeencaissement"]["ajouter"] = 1;
    $tab["menu"]["paramacad"]["typeencaissement"]["modifier"] = 1;
    $tab["menu"]["paramacad"]["typeencaissement"]["supprimer"] = 1;
    $tab["menu"]["paramacad"]["typeencaissement"]["details"] = 1;

    
    $tab["menu"]["paramacad"]["typeenseignant"]["ajouter"] = 1;
    $tab["menu"]["paramacad"]["typeenseignant"]["modifier"] = 1;
    $tab["menu"]["paramacad"]["typeenseignant"]["supprimer"] = 1;
    $tab["menu"]["paramacad"]["typeenseignant"]["details"] = 1;
    
    $tab["menu"]["paramacad"]["typeinscription"]["ajouter"] = 1;
    $tab["menu"]["paramacad"]["typeinscription"]["modifier"] = 1;
    $tab["menu"]["paramacad"]["typeinscription"]["supprimer"] = 1;
    $tab["menu"]["paramacad"]["typeinscription"]["details"] = 1;

	$tab["menu"]["academie"]["typepointage"]["ajouter"] = 1;
    $tab["menu"]["academie"]["typepointage"]["modifier"] = 1;
    $tab["menu"]["academie"]["typepointage"]["supprimer"] = 1;
    $tab["menu"]["academie"]["typepointage"]["details"] = 1;

    
    $tab["menu"]["paramacad"]["typesalle"]["ajouter"] = 1;
    $tab["menu"]["paramacad"]["typesalle"]["modifier"] = 1;
    $tab["menu"]["paramacad"]["typesalle"]["supprimer"] = 1;
    $tab["menu"]["paramacad"]["typesalle"]["details"] = 1;

     $tab["menu"]["paramacad"]["echeancier"]["ajouter"] = 1;
    $tab["menu"]["paramacad"]["echeancier"]["modifier"] = 1;
    $tab["menu"]["paramacad"]["echeancier"]["supprimer"] = 1;
    $tab["menu"]["paramacad"]["echeancier"]["details"] = 1;

    
    
    $tab["menu"]["scolariteacad"]["etudiant"]["ajouter"] = 1;
    $tab["menu"]["scolariteacad"]["etudiant"]["modifier"] = 1;
    $tab["menu"]["scolariteacad"]["etudiant"]["supprimer"] = 1;
    $tab["menu"]["scolariteacad"]["etudiant"]["details"] = 1;
    
    
    $tab["menu"]["scolariteacad"]["inscription"]["ajouter"] = 1;
    $tab["menu"]["scolariteacad"]["inscription"]["modifier"] = 1;
    $tab["menu"]["scolariteacad"]["inscription"]["supprimer"] = 1;
    $tab["menu"]["scolariteacad"]["inscription"]["details"] = 1;
	  
    $tab["menu"]["scolariteacad"]["candidat"]["ajouter"] = 1;
    $tab["menu"]["scolariteacad"]["candidat"]["modifier"] = 1;
    $tab["menu"]["scolariteacad"]["candidat"]["supprimer"] = 1;
    $tab["menu"]["scolariteacad"]["candidat"]["details"] = 1;
	  
    $tab["menu"]["scolariteacad"]["prospect"]["ajouter"] = 1;
    $tab["menu"]["scolariteacad"]["prospect"]["modifier"] = 1;
    $tab["menu"]["scolariteacad"]["prospect"]["supprimer"] = 1;
    $tab["menu"]["scolariteacad"]["prospect"]["details"] = 1;
	
    
    $tab["menu"]["scolariteacad"]["enseignant"]["ajouter"] = 1;
    $tab["menu"]["scolariteacad"]["enseignant"]["modifier"] = 1;
    $tab["menu"]["scolariteacad"]["enseignant"]["supprimer"] = 1;
    $tab["menu"]["scolariteacad"]["enseignant"]["details"] = 1;
	
    
    $tab["menu"]["scolariteacad"]["test"]["ajouter"] = 1;
    $tab["menu"]["scolariteacad"]["test"]["modifier"] = 1;
    $tab["menu"]["scolariteacad"]["test"]["supprimer"] = 1;
    $tab["menu"]["scolariteacad"]["test"]["details"] = 1;
	
    $tab["menu"]["scolariteacad"]["programmation"]["ajouter"] = 1;
    $tab["menu"]["scolariteacad"]["programmation"]["modifier"] = 1;
    $tab["menu"]["scolariteacad"]["programmation"]["supprimer"] = 1;
    $tab["menu"]["scolariteacad"]["programmation"]["details"] = 1;
	
    $tab["menu"]["scolariteacad"]["pointage"]["ajouter"] = 1;
    $tab["menu"]["scolariteacad"]["pointage"]["modifier"] = 1;
    $tab["menu"]["scolariteacad"]["pointage"]["supprimer"] = 1;
    $tab["menu"]["scolariteacad"]["pointage"]["details"] = 1;
	
    $tab["menu"]["scolariteacad"]["absence"]["ajouter"] = 1;
    $tab["menu"]["scolariteacad"]["absence"]["modifier"] = 1;
    $tab["menu"]["scolariteacad"]["absence"]["supprimer"] = 1;
    $tab["menu"]["scolariteacad"]["absence"]["details"] = 1;

    
    	$tab["menu"]["scolariteacad"]["transfert"]["ajouter"] = 1;
    $tab["menu"]["scolariteacad"]["transfert"]["modifier"] = 1;
    $tab["menu"]["scolariteacad"]["transfert"]["supprimer"] = 1;
    $tab["menu"]["scolariteacad"]["transfert"]["details"] = 1;
    
    $tab["menu"]["scolariteacad"]["decompte"]["ajouter"] = 1;
    $tab["menu"]["scolariteacad"]["decompte"]["modifier"] = 1;
    $tab["menu"]["scolariteacad"]["decompte"]["supprimer"] = 1;
    $tab["menu"]["scolariteacad"]["decompte"]["details"] = 1;
    
    $tab["menu"]["scolariteacad"]["deliberation"]["ajouter"] = 1;
    $tab["menu"]["scolariteacad"]["deliberation"]["modifier"] = 1;
    $tab["menu"]["scolariteacad"]["deliberation"]["supprimer"] = 1;
    $tab["menu"]["scolariteacad"]["deliberation"]["details"] = 1;

    $tab["menu"]["scolariteacad"]["note"]["ajouter"] = 1;
    $tab["menu"]["scolariteacad"]["note"]["modifier"] = 1;
    $tab["menu"]["scolariteacad"]["note"]["supprimer"] = 1;
    $tab["menu"]["scolariteacad"]["note"]["details"] = 1;

    
    
	$tab["menu"]["encaissementacad"]["encaissement"]["ajouter"] = 1;
    $tab["menu"]["encaissementacad"]["encaissement"]["modifier"] = 1;
    $tab["menu"]["encaissementacad"]["encaissement"]["supprimer"] = 1;
    $tab["menu"]["encaissementacad"]["encaissement"]["details"] = 1;

	$tab["menu"]["encaissementacad"]["journal"]["ajouter"] = 1;
    $tab["menu"]["encaissementacad"]["journal"]["modifier"] = 1;
    $tab["menu"]["encaissementacad"]["journal"]["supprimer"] = 1;
    $tab["menu"]["encaissementacad"]["journal"]["details"] = 1;
    
    
    $tab["menu"]["docacad"]["docacademique"]["ajouter"] = 1;
    $tab["menu"]["docacad"]["docacademique"]["modifier"] = 1;
    $tab["menu"]["docacad"]["docacademique"]["supprimer"] = 1;
    $tab["menu"]["docacad"]["docacademique"]["details"] = 1;
    
///////////////***************************************************//////////////////
    
	
	
	$tab["menu"]["memoire"]["membrejury"]["ajouter"] = 1;
    $tab["menu"]["memoire"]["membrejury"]["modifier"] = 1;
    $tab["menu"]["memoire"]["membrejury"]["supprimer"] = 1;
    $tab["menu"]["memoire"]["membrejury"]["details"] = 1;

	

	$tab["menu"]["memoire"]["sujetmemoire"]["ajouter"] = 1;
    $tab["menu"]["memoire"]["sujetmemoire"]["modifier"] = 1;
    $tab["menu"]["memoire"]["sujetmemoire"]["supprimer"] = 1;
    $tab["menu"]["memoire"]["sujetmemoire"]["details"] = 1;

	
	

	$tab["menu"]["paramacad"]["typeetudiant"]["ajouter"] = 1;
    $tab["menu"]["paramacad"]["typeetudiant"]["modifier"] = 1;
    $tab["menu"]["paramacad"]["typeetudiant"]["supprimer"] = 1;
    $tab["menu"]["paramacad"]["typeetudiant"]["details"] = 1;

	

	$tab["menu"]["academie"]["quitus"]["ajouter"] = 1;
    $tab["menu"]["academie"]["quitus"]["modifier"] = 1;
    $tab["menu"]["academie"]["quitus"]["supprimer"] = 1;
    $tab["menu"]["academie"]["quitus"]["details"] = 1;

	$tab["menu"]["academie"]["docacademique"]["ajouter"] = 1;
    $tab["menu"]["academie"]["docacademique"]["modifier"] = 1;
    $tab["menu"]["academie"]["docacademique"]["supprimer"] = 1;
    $tab["menu"]["academie"]["docacademique"]["details"] = 1;

	$tab["menu"]["academie"]["dossierenseignant"]["ajouter"] = 1;
    $tab["menu"]["academie"]["dossierenseignant"]["modifier"] = 1;
    $tab["menu"]["academie"]["dossierenseignant"]["supprimer"] = 1;
    $tab["menu"]["academie"]["dossierenseignant"]["details"] = 1;

	$tab["menu"]["academie"]["dossieretudiant"]["ajouter"] = 1;
    $tab["menu"]["academie"]["dossieretudiant"]["modifier"] = 1;
    $tab["menu"]["academie"]["dossieretudiant"]["supprimer"] = 1;
    $tab["menu"]["academie"]["dossieretudiant"]["details"] = 1;

	$tab["menu"]["formationacad"]["programme"]["ajouter"] = 1;
    $tab["menu"]["formationacad"]["programme"]["modifier"] = 1;
    $tab["menu"]["formationacad"]["programme"]["supprimer"] = 1;
    $tab["menu"]["formationacad"]["programme"]["details"] = 1;

	$tab["menu"]["formationacad"]["uenseignement"]["ajouter"] = 1;
    $tab["menu"]["formationacad"]["uenseignement"]["modifier"] = 1;
    $tab["menu"]["formationacad"]["uenseignement"]["supprimer"] = 1;
    $tab["menu"]["formationacad"]["uenseignement"]["details"] = 1;

	
	$tab["menu"]["formationacad"]["module"]["ajouter"] = 1;
    $tab["menu"]["formationacad"]["module"]["modifier"] = 1;
    $tab["menu"]["formationacad"]["module"]["supprimer"] = 1;
    $tab["menu"]["formationacad"]["module"]["details"] = 1;

	$tab["menu"]["memoire"]["memoire"]["ajouter"] = 1;
    $tab["menu"]["memoire"]["memoire"]["modifier"] = 1;
    $tab["menu"]["memoire"]["memoire"]["supprimer"] = 1;
    $tab["menu"]["memoire"]["memoire"]["details"] = 1;

	$tab["menu"]["academie"]["soutenance"]["ajouter"] = 1;
    $tab["menu"]["academie"]["soutenance"]["modifier"] = 1;
    $tab["menu"]["academie"]["soutenance"]["supprimer"] = 1;
    $tab["menu"]["academie"]["soutenance"]["details"] = 1;

    $tab["menu"]["memoire"]["sujetmemoire"]["ajouter"] = 1;
    $tab["menu"]["memoire"]["sujetmemoire"]["modifier"] = 1;
    $tab["menu"]["memoire"]["sujetmemoire"]["supprimer"] = 1;
    $tab["menu"]["memoire"]["sujetmemoire"]["details"] = 1;

	$tab["menu"]["memoire"]["membrejury"]["ajouter"] = 1;
    $tab["menu"]["memoire"]["membrejury"]["modifier"] = 1;
    $tab["menu"]["memoire"]["membrejury"]["supprimer"] = 1;
    $tab["menu"]["memoire"]["membrejury"]["details"] = 1;

	$tab["menu"]["memoire"]["soutenance"]["ajouter"] = 1;
    $tab["menu"]["memoire"]["soutenance"]["modifier"] = 1;
    $tab["menu"]["memoire"]["soutenance"]["supprimer"] = 1;
    $tab["menu"]["memoire"]["soutenance"]["details"] = 1;

	$tab["menu"]["memoire"]["encadreur"]["ajouter"] = 1;
    $tab["menu"]["memoire"]["encadreur"]["modifier"] = 1;
    $tab["menu"]["memoire"]["encadreur"]["supprimer"] = 1;
    $tab["menu"]["memoire"]["encadreur"]["details"] = 1;

	$tab["menu"]["document"]["docacademique"]["ajouter"] = 1;
    $tab["menu"]["document"]["docacademique"]["modifier"] = 1;
    $tab["menu"]["document"]["docacademique"]["supprimer"] = 1;
    $tab["menu"]["document"]["docacademique"]["details"] = 1;
    
    $tab["menu"]["paramacad"]["soutenance"]["details"] = 1;
    $tab["menu"]["scolariteacad"]["soutenance"]["details"] = 1;
    $tab["menu"]["formationacad"]["soutenance"]["details"] = 1;
    $tab["menu"]["encaissementacad"]["soutenance"]["details"] = 1;
    
    $tab["menu"]["dashboardacad"]["soutenance"]["details"] = 1;
    
    
    $tab["menu"]["document"]["soutenance"]["details"] = 1;
    $tab["menu"]["memoire"]["soutenance"]["details"] = 1;
    $tab["menu"]["grh"]["soutenance"]["details"] = 1;

    $URL = $_SERVER['REQUEST_URI'];
    // recupere le chemin demande
    // on obtient un tableau ["/titre","de","article","1"]
   $URL = str_replace('/sitessupdeco/admin/', "", $URL);
    $tableau_chemin = explode("_",$URL);
    $taille = sizeof($tableau_chemin);
    // echo $URL;
        switch ($taille){
           case 3:{
                $a = !empty($tab["menu"][$tableau_chemin[0]]);
                if($a==1)
                    include('php/view/home/'.$tableau_chemin[0].'.php');
                break;
           }case 1:{
                $a = !empty($tab["menu"][$tableau_chemin[0]]);
                // echo $a;
                // echo "vovo";
                 if($a==1){
                     $liste = 1;
                    include('php/Controller/'.$tableau_chemin[0].'.php');
                }
                break;
           }case 2:{
                    $a = !empty($tab["menu"][$tableau_chemin[0]]);
                   $opt = $tableau_chemin[1];
                     if($a==1){
                         
                        include('php/Controller/'.$tableau_chemin[0].'.php');
                    }
                break;
                }
            }
?>
        <footer id="footer">
            &copy; 2017 <a href="#"> Labo Sup De Co Dakar</a>,Tous Droits Réservés.
        </footer>
</body>

</html>