<section id="content">
        
        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
           
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
                  <table id="data-table-simple" class="responsive-table" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>IdUtilisateur</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Telephone</th>
                            <th>Email</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                           require_once('content/classes/classeUtilisateur.php');
                                $utilisateur = new Utilisateur();
                               $list = $utilisateur->listUtilisateur();
                                foreach($list as $value){
                                    echo '
                                        <tr id="'.$value['id'].'">
                                            <td>
                                                <a href="utilisateur_supprimer-'.$value['id'].'.html" style="font-size:20px"><i class="mdi-content-clear
"></i></a>
                                                <!--<a href="utilisateur_modifier-'.$value['id'].'.html" style="font-size:20px; font-color:green"><i class="mdi-content-create
"></i></a>-->
                                            </td>
                                            <td>'.$value['id'].'</td>
                                            <td>'.$value['nom'].'</td>                                           
                                            <td>'.$value['prenom'].'</td>                                           
                                            <td>'.$value['telephone'].'</td>
											<td>'.$value['email'].'</td>                                           
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
     
       <div class="fixed-action-btn">
         <a class="btn-floating btn-large green" href="utilisateur_ajouter.html">
           <i class="large mdi-content-add"></i>
         </a>
       </div>
        