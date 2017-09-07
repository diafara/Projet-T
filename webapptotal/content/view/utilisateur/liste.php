<section id="content">
        
        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
            <div class="header-search-wrapper grey hide-on-large-only">
                <i class="mdi-action-search active"></i>
                <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div>
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Utilisateurs</h5>
                <ol class="breadcrumbs">
                    <li><a href="./">Accueil</a></li>
                    <li><a href="#">Parametrages</a></li>
                    <li class="active">Utilisateurs</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        

        <!--start container-->
        <div class="container">
          <div class="section">
            <!--DataTables example-->
            <div id="table-datatables">
              <div class="row">
                <div class="col s12 m12">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>IdUtilisateur</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Telephone</th>
                            <th>EMEI</th>
                            <th>Date Inscription</th>
                        </tr>
                    </thead>
                 
                  
                    <tbody>
                        <?php
                           require_once('content/classes/classeUtilisateur.php');
                                $utilisateur = new Utilisateur();
                               $list = $utilisateur->listUtilisateur();
                                foreach($list as $value){
                                    echo '
                                        <tr id="'.$value['idUser'].'">
                                            <td>'.$value['idUser'].'</td>
                                            <td>'.$value['Nom'].'</td>                                           
                                            <td>'.$value['prenom'].'</td>                                           
                                            <td>'.$value['Telephone'].'</td>
											<td>'.$value['Imei'].'</td>                                           
                                            <td>'.$value['dateInscription'].'</td>                                           
                                        </tr>
                                    ';
                                }
                            ?> </tbody>
                  </table>
                </div>
              </div>
            </div> 
           
       
           
          </div>
          
        </div>
        <!--end container-->

      </section>
     

 