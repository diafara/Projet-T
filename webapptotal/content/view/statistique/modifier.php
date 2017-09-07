<?php
    //$idAnnee = explode($tableau_chemin[2], '-');
    require_once('php/classes/classeAnnee.php');
    $annee = new Anneeacad();
    $list = $annee->RechercheAnnee($opt[1]);
    foreach($list as $value){
?>
     <script type="text/javascript" src="assets/js/ajax.js link"></script>
    <script type="text/javascript" src="php/view/annee/annee.js"></script>
       <div id="page_content">
        <div id="page_content_inner">
        <ul id="breadcrumbs">
                <li><a href="./" style="magin-left:50x"><i class="material-icons">&#xE88A;</i></a></li>
                <li><a href="./academie">Academie</a></li>
                <li><a href="./paramacad">Parametres</a></li>
                <li><a href="paramacad_annee">Annee</a></li>
                <li><a href="paramacad_annee_details-<?php echo $value['idAnnee']; ?>">Détails</a></li>
                <li><span>Modifier</span></li>
            </ul>
            <br>
            <h3>Annee Academique</h3>
            <div class="md-card">
              
                <div class="md-card-content">
                     <div id="message">
                        
                        
                    </div>
                    <div class="uk-overflow-container uk-margin-bottom">
                        <form method="post" action="" class="addnew" id="monFormMod">
                            <h3>Modification des informations de l'annee</h3>
                            <label>Entrez l'annee</label>
                            <input type="text" name="libelle" class="md-input uk-form-width-xlarge" value="<?php echo $value['libelle']; ?>" required/>
                           <input type="hidden" name="modifier" value="<?php echo $value['idAnnee']; ?>"/>                                                       
                            <br>
                            <button  type="submit" class="md-btn md-btn-success md-btn-wave-light waves-effect waves-button waves-light" name="modifier">Valider</button><button  type="reset" class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">annuler</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        
        
    <script src="bower_components/tablesorter/dist/js/jquery.tablesorter.min.js"></script>
    <script src="bower_components/tablesorter/dist/js/jquery.tablesorter.widgets.min.js"></script>
    <script src="bower_components/tablesorter/dist/js/widgets/widget-alignChar.min.js"></script>
    <script src="bower_components/tablesorter/dist/js/widgets/widget-columnSelector.min.js"></script>
    <script src="bower_components/tablesorter/dist/js/widgets/widget-print.min.js"></script>
    <script src="bower_components/tablesorter/dist/js/extras/jquery.tablesorter.pager.min.js"></script>
    <!-- ionrangeslider -->
    <script src="bower_components/ion.rangeslider/js/ion.rangeSlider.min.js"></script>

    <!--  tablesorter functions -->
    <script src="assets/js/pages/plugins_tablesorter.min.js"></script>
    </div>
 
    <!-- tablesorter -->
   <?php } ?>