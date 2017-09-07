
<script type="text/javascript" src="assets/js/ajax.js"></script>
    <script type="text/javascript" src="php/view/utilisateur/utilisateur.js"></script>
       <div id="page_content">
        <div id="page_content_inner">
       <ul id="breadcrumbs">
                <li><a href="./" style="margin-left:50x"><i class="material-icons">&#xE88A;</i></a></li>
            <li><a href="utilisateur">Utilisateur</a></li>
                <li><span>Ajouter</span></li>
            </ul>
            <br>
            <h3>Utilisateur</h3>
             
            <div class="md-card">
                <div class="md-card-content">
                    <div id="message">
                        
                        
                    </div>
                    <div class="uk-overflow-container uk-margin-bottom">
                        <form method="post" action="" class="addnew" id="addUtilisateur">
                            <h3>Ajout d'un Nouvel Utilisateur</h3>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-3">
                                    <label>Nom *</label>
                                    <input type="text" name="nom" id="nom" class="md-input uk-form-width-xlarge" required/>
                                </div>
                                <div class="uk-width-medium-1-3">
                                    <label>Pr&eacute;nom</label>
                                    <input type="text" name="prenom" id="prenom" class="md-input uk-form-width-xlarge"/>
                                </div>
                                <div class="uk-width-medium-1-3">
                                    <label>E-mail *</label>
                                    <input type="email" name="email" id="email" class="md-input uk-form-width-xlarge"/>   
                                </div>
                            </div>
                            <div class="uk-grid">
                                
                                <div class="uk-width-medium-1-3">
                                    <label>T&eacute;l&eacute;phone</label>
                                    <input type="text" name="telephone" id="telephone" class="md-input uk-form-width-xlarge"/> 
                                </div>
                                <div class="uk-width-medium-1-3">
                                    <label>Adresse</label>
                                    <input type="text" name="adresse" id="adresse" class="md-input uk-form-width-xlarge"/> 
                                </div>
                                <div class="uk-width-medium-1-3">
                                    <label>Login</label>
                                    <input type="text" name="login" id="login" class="md-input uk-form-width-xlarge"/> 
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-3">
                                    <label>Mot de passe</label>
                                    <input type="password" name="motDePasse" id="motDePasse" class="md-input uk-form-width-xlarge"/> 
                                </div>
                                <div class="uk-width-medium-1-3">
                                    <label>Confirmez le mot de passe</label>
                                    <input type="password" name="motDePasse2" id="motDePasse2" class="md-input uk-form-width-xlarge"/> 
                                </div>
                                <div class="uk-width-medium-1-3">
                                    <select id="select_demo_1" class="md-input" name="idProfile" id="idProfile">
                                        <option value="" disabled selected hidden>Profile* </option>
                                        <?php
                                           require('php/classes/classeProfile.php');
                                           $annee = new Profile();
                                           $list = $annee->listProfile();
                                           foreach($list as $value){
                                               echo '
                                                        <option value="'.$value['idProfile'].'">'.$value['libelle'].'</option>
                                                    ';
                                           }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <input type="hidden" name="ajouter"/>
							<br>
                            <button  type="submit" class="md-btn md-btn-success md-btn-wave-light waves-effect waves-button waves-light">Valider</button><button  type="reset" class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">annuler</button>
                        </form>
                    </div>
                    
                </div>
            </div>
  
    </div>

  