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
                <h5 class="breadcrumbs-title">Avis Clients</h5>
                <ol class="breadcrumbs">
                    <li><a href="./">Accueil</a></li>
                    <li class="active">Avis Clients</li>
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
                            <th>Code</th>
                            <th>Regions</th>
                            <th>Stations</th>
                            <th>Date Questionnement</th>
                            <th>Telephone</th>
                            <th>Commentaire</th>
                            <th>Score</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                           require_once('content/classes/classeAvis.php');
                                $utilisateur = new Avis();
                               $list = $utilisateur->listQuestionnement();
                                foreach($list as $value){
                                    echo '
                                        <tr id="'.$value['idQuestionnement'].'">
                                            <td>'.$value['idQuestionnement'].'</td>
                                            <td>'.$value['region'].'</td>                                           
                                            <td>'.$value['station'].'</td>                                           
                                            <td>'.$value['DateQuestionnement'].'</td>
											<td>'.$value['telephone'].'</td>                                           
                                            <td>'.$value['Commentaire'].'</td>                                           
                                            <td>'.$value['score'].'</td>                                           
                                            <td><a href="avis_details-'.$value['idQuestionnement'].'.html"><i class="mdi-action-visibility
"></i></a></td>                                           
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
     

 