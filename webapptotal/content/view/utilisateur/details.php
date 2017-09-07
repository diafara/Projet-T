<?php
    //$idUtilisateur = explode($tableau_chemin[2], '-');

    require_once('php/classes/classeUtilisateur.php');
    $utilisateur = new Utilisateur();
 // echo $opt[1];
    $list = $utilisateur->rechercheUtilisateur($opt[1]);
  
    foreach($list as $value){
        
  
?>
    <div id="page_content">
       
        <div id="page_content_inner">
        <ul id="breadcrumbs">
                <li><a href="./" style="magin-left:50x"><i class="material-icons">&#xE88A;</i></a></li>
                <li><a href="utilisateur">Utilisateurs</a></li>
                <li><span>Détails</span></li>
            </ul>
            <br>
            <h3>Utilisateur</h3>
            <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                <div class="uk-width-xLarge-2-10 uk-width-large-3-10">
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <h3 class="md-card-toolbar-heading-text">
                                D&eacute;tails Utilisateur
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <div class="uk-margin-bottom uk-text-center">
                                <img src="icon/utilisateur.png" alt="" class="img_medium" />
                            </div>
                        </div>
                    </div>
                    <div class="md-card">
                        <div class="md-card-toolbar md-bg-indigo-900 uk-text-contrast">
                            <h3 class="md-card-toolbar-heading-text " style="color:white;">
                              Actions Disponibles
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list">
                                <?php
                                    if($tab["menu"]["utilisateur"]["modifier"]==1){
                        echo '<li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading uk-text-large"><img src="icon/modif.png" width="30px"/> &nbsp;&nbsp;<a href="utilisateur_modifier-'.$value['idUtilisateur'].'">Modifier</a></span>
                                    </div>
                                </li>';}
       /*  <span class="md-list-heading uk-text-large"><img src="icon/supp_cours.jpg" width="30px"/> &nbsp;&nbsp;<a href="utilisateur_supprimer-'.$value['idUtilisateur'].'">Supprimer</a></span>*/
                                if($tab["menu"]["utilisateur"]["supprimer"] == 1){
                        echo '<li>
                                    <div class="md-list-content">
                                         <span class="md-list-heading uk-text-large"><img src="icon/supp_cours.jpg" width="30px"/> &nbsp;&nbsp;<a href="#supp" data-uk-modal="{ center:true }">Supprimer</a></span>
                                        
                                    </div>
                                </li>';}
                                ?>
                              
                                <li>
                                    <div class="md-list-content">
                                         <span class="md-list-heading uk-text-large">-----</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-xLarge-8-10  uk-width-large-7-10">
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <h3 class="md-card-toolbar-heading-text">
                                D&eacute;tails
                            </h3>
                        </div>
                        <div class="md-card-content large-padding">
                            <div class="uk-grid uk-grid-divider uk-grid-medium">
                                <div class="uk-width-large-1-2">
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Code Utilisateur</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            <span class="uk-text-large uk-text-middle"><a href="#"><?php echo $value['idUtilisateur']?></a></span>
                                        </div>
                                    </div>
                                    <hr class="uk-grid-divider">
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Nom</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            <span class="uk-text-large uk-text-middle"><?php echo $value['nom']?></span>
                                        </div>
                                    </div>                                   
                                   <hr class="uk-grid-divider">
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Pr&eacute;nom</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            <span class="uk-text-large uk-text-middle"><?php echo $value['prenom']?></span>
                                        </div>
                                    </div>                                   
                                   <hr class="uk-grid-divider">
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">E-mail</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            <span class="uk-text-large uk-text-middle"><?php echo $value['email']?></span>
                                        </div>
                                    </div>                                   
                                   <hr class="uk-grid-divider">
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Login</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            <span class="uk-text-large uk-text-middle"><?php echo $value['login']?></span>
                                        </div>
                                    </div>                                   
                                   <hr class="uk-grid-divider">
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Adresse</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            <span class="uk-text-large uk-text-middle"><?php echo $value['adresse']?></span>
                                        </div>
                                    </div>                                   
                                   <hr class="uk-grid-divider">
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">T&eacute;l&eacute;phone</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            <span class="uk-text-large uk-text-middle"><?php echo $value['telephone']?></span>
                                        </div>
                                    </div>                                   
                                   
                                    <hr class="uk-grid-divider uk-hidden-large">
                                </div>
                                <!--  -->
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>

        </div>
    </div>
    
    
    <div class="uk-modal" id="supp" aria-hidden="true" style="display: none; overflow-y: scroll;">
        <div class="uk-modal-dialog" style="top: 47px;">
            <form class="uk-form-stacked">
               
         
                <div class="uk-margin-medium-bottom">
                    <h3 class="uk-title">Attention</h3>
                    <label for="task_priority" class="uk-form-label">Voulez-vous Vraiment Supprimer cet utilisateur ???</label>
                   
                </div>
                <div class="uk-modal-footer uk-text-right">
                    <a href="#" type="button" class="md-btn md-btn-flat uk-modal-close">Annuler</a><a href="./utilisateur_supprimer-<?php echo $value['idUtilisateur']?>" type="button" class="md-btn md-btn-flat md-btn-flat-primary" id="snippet_new_save">Supprimer</a>
                </div>
            </form>
        </div>
    </div>
    
    <?php } ?>