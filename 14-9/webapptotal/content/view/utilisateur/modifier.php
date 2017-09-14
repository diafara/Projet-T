<?php
    //$idUtilisateur = explode($tableau_chemin[2], '-');
    require_once('php/classes/classeUtilisateur.php');
    $utilisateur = new Utilisateur();
    $list = $utilisateur->rechercheUtilisateur($opt[1]);
    foreach($list as $value){
?>
     <script type="text/javascript" src="assets/js/ajax.js link"></script>
    <script type="text/javascript" src="php/view/utilisateur/utilisateur.js"></script>
       <div id="page_content">
        <div id="page_content_inner">
        <ul id="breadcrumbs">
                <li><a href="./" style="margin-left:50x"><i class="material-icons">&#xE88A;</i></a></li>
            <li><a href="utilisateur">Utilisateur</a></li>
                <li><span>Modifier</span></li>
            </ul>
            <br>
            <h3>Utilisateur</h3>
            <div class="md-card">
              
                <div class="md-card-content">
                     <div id="message">
                        
                        
                    </div>
                    <div class="uk-overflow-container uk-margin-bottom">
                        <form method="post" action="" class="addnew" id="monFormMod">
                            <h3>Modification des informations de l'utilisateur</h3>




                            <div class="uk-grid">
                                <div class="uk-width-medium-1-3">
                                    <label>Nom *</label>
                                    <input value="<?php echo $value['nom']; ?>" type="text" name="nom" id="nom" class="md-input uk-form-width-xlarge" required/>
                                </div>
                                <div class="uk-width-medium-1-3">
                                    <label>Pr&eacute;nom</label>
                                    <input value="<?php echo $value['prenom']; ?>" type="text" name="prenom" id="prenom" class="md-input uk-form-width-xlarge"/>
                                </div>
                                <div class="uk-width-medium-1-3">
                                    <label>E-mail *</label>
                                    <input value="<?php echo $value['email']; ?>" type="email" name="email" id="email" class="md-input uk-form-width-xlarge"/>   
                                </div>
                            </div>
                            <div class="uk-grid">
                                
                                <div class="uk-width-medium-1-3">
                                    <label>T&eacute;l&eacute;phone</label>
                                    <input value="<?php echo $value['telephone']; ?>" type="text" name="telephone" id="telephone" class="md-input uk-form-width-xlarge"/> 
                                </div>
                                <div class="uk-width-medium-1-3">
                                    <label>Adresse</label>
                                    <input value="<?php echo $value['adresse']; ?>" type="text" name="adresse" id="adresse" class="md-input uk-form-width-xlarge"/> 
                                </div>
                                <div class="uk-width-medium-1-3">
                                    <label>Login</label>
                                    <input value="<?php echo $value['login']; ?>" type="text" name="login" id="login" class="md-input uk-form-width-xlarge"/> 
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-3">
                                    <label>Mot de passe</label>
                                    <input value="<?php echo $value['motDePasse']; ?>" type="password" name="motDePasse" id="motDePasse" class="md-input uk-form-width-xlarge"/> 
                                </div>
                                <div class="uk-width-medium-1-3">
                                    <label>Confirmez le mot de passe</label>
                                    <input value="<?php echo $value['motDePasse']; ?>" type="password" name="motDePasse2" id="motDePasse2" class="md-input uk-form-width-xlarge"/> 
                                </div>
                                <div class="uk-width-medium-1-3">
                                    <select id="select_demo_1" class="md-input" name="idProfile" id="idProfile" required="">
                                        <option value="" disabled selected hidden>Profile* </option>
                                        <?php
                                           require('php/classes/classeProfile.php');
                                           $annee = new Profile();
                                           $list = $annee->listProfile();
                                           foreach($list as $value2){
                                               echo '
                                                        <option value="'.$value2['idProfile'].'">'.$value2['libelle'].'</option>
                                                    ';
                                           }
                                        ?>
                                    </select>
                                </div>
                            </div>
                           <input type="hidden" name="modifier" value="<?php echo $value['idUtilisateur']; ?>"/>                                                       
                            <br>
                            <button  type="submit" class="md-btn md-btn-success md-btn-wave-light waves-effect waves-button waves-light" name="modifier">Valider</button><button  type="reset" class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">annuler</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        
    </div>
 
    <!-- tablesorter -->
   <?php } ?>