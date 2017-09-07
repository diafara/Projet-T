<?php
    //$idArticle = explode($tableau_chemin[2], '-');

    require_once('php/classes/classeArticle.php');
    $article = new Article();
 // echo $opt[1];
    $list = $article->rechercheArticle($opt[1]);
  
    foreach($list as $value){
        
  
?>
    <div id="page_content">
       
        <div id="page_content_inner">
        <ul id="breadcrumbs">
                <li><a href="./" style="magin-left:50x"><i class="material-icons">&#xE88A;</i></a></li>
                <li><a href="article">Articles</a></li>
                <li><span>Détails</span></li>
            </ul>
            <br>
            <h3>Article</h3>
            <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                <div class="uk-width-xLarge-2-10 uk-width-large-3-10">
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <h3 class="md-card-toolbar-heading-text">
                                D&eacute;tails Article
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <div class="uk-margin-bottom uk-text-center">
                                <img src="icon/article.png" alt="" class="img_medium" />
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
                                    if($tab["menu"]["article"]["modifier"]==1){
                        echo '<li>
                                    <div class="md-list-content">
                                        <span class="md-list-heading uk-text-large"><img src="icon/modif.png" width="30px"/> &nbsp;&nbsp;<a href="article_modifier-'.$value['idArticle'].'">Modifier</a></span>
                                    </div>
                                </li>';}
       /*  <span class="md-list-heading uk-text-large"><img src="icon/supp_cours.jpg" width="30px"/> &nbsp;&nbsp;<a href="article_supprimer-'.$value['idArticle'].'">Supprimer</a></span>*/
                                if($tab["menu"]["article"]["supprimer"] == 1){
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
                                            <span class="uk-text-muted uk-text-small">Code Article</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            <span class="uk-text-large uk-text-middle"><a href="#"><?php echo $value['idArticle']?></a></span>
                                        </div>
                                    </div>
                                    <hr class="uk-grid-divider">
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Titre</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            <span class="uk-text-large uk-text-middle"><?php echo $value['titrefr']?></span>
                                        </div>
                                    </div>                                   
                                   <hr class="uk-grid-divider">
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Date de publication</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            <span class="uk-text-large uk-text-middle"><?php echo $value['datePublication']?></span>
                                        </div>
                                    </div>                                   
                                   
                                    <hr class="uk-grid-divider uk-hidden-large">
                                </div>
                                <div class="uk-width-large-1-2">
                                    <p>
                                        <span class="uk-text-muted uk-text-small uk-display-block uk-margin-small-bottom">Contenu</span>
                                        <?php echo $value['contenufr']?>
                                    </p>
                                </div>
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
                    <label for="task_priority" class="uk-form-label">Voulez-vous Vraiment Supprimer cette article ???</label>
                   
                </div>
                <div class="uk-modal-footer uk-text-right">
                    <a href="#" type="button" class="md-btn md-btn-flat uk-modal-close">Annuler</a><a href="./article_supprimer-<?php echo $value['idArticle']?>" type="button" class="md-btn md-btn-flat md-btn-flat-primary" id="snippet_new_save">Supprimer</a>
                </div>
            </form>
        </div>
    </div>
    
    <?php } ?>