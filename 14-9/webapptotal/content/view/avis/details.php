<?php
    //$idPage = explode($tableau_chemin[2], '-');

    require_once('content/classes/classeAvis.php');
    $Avis = new Avis();
 // echo $opt[1];
    $list = $Avis->rechercheQuestionnement($opt[1]);
    foreach($list as $value){
?>
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
                <h5 class="breadcrumbs-title">Details Avis</h5>
                <ol class="breadcrumbs">
                  <li><a href="./">Accueil</a>
                  </li>
                  <li><a href="avis.html">Avis Clients</a>
                  </li>
                  <li class="active">Details</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->


        <!--start container-->
        <div class="container">
          
          <!--ui-alert-->
          <div id="ui-alert" style="font-size: 11px;" class="section">
            <div class="row">
                <!--SIMPLE-->
                <div class="col s12 m4 l4">
				<p><strong>QUESTIONNAIRES</strong></p>
				 <ul class="collection">
                 
                    <?php
                 
                   $liste = $Avis->DetailsQuestionnement($opt[1]);
                         foreach($liste as $val){
                            if($val['reponse'] == 0){
								echo '<a class="collection-item" style="color: #000000 !important;">
								'.$val['question'].'
								<span class="badge red" style="color: #fff !important;">NON</span></a>';
                              /*echo ' <div id="card-alert" class="card red">
                                    <div class="card-content white-text">
                                      <p>'.$val['question'].'</p>
                                    </div>
                                  </div>';*/
                            }else if($val['reponse'] == -1){
                             echo '<a class="collection-item" style="color: #000000 !important;">
								'.$val['question'].'
								<span class="badge black" style="color: #fff !important;">NULL</span></a>';
                             /*echo '<div id="card-alert" class="card deep-purple">
                                   <div class="card-content white-text">
                                     <p>'.$val['question'].'</p>
                                   </div>
                                 </div>';*/
                             
                             
                            }else{
								echo '<a class="collection-item" style="color: #000000 !important;">
								'.$val['question'].'
								<span class="badge green" style="color: #fff !important;">OUI</span></a>';
                             /*echo '<div id="card-alert" class="card green">
                                     <div class="card-content white-text">
                                       <p>'.$val['question'].'</p>
                                     </div>
                                 </div>';*/
                            
                            }
                         }     
                    ?>
                      
                    </ul>
                </div>
                <!--DARK-->
                <div class="col s12 m8 l8">
                  <p><strong>DETAILS</strong></p>
                    <ul class="collapsible collapsible-accordion" data-collapsible="accordion">
                          <li>
                            <div class="collapsible-header"><i class="mdi-maps-local-gas-station"></i> STATION</div>
                            <div class="collapsible-body">
                              <p>Region : <strong><?php echo $value['region'];?></strong><br/><br/>
                                 Station : <strong><?php echo $value['station'];?></strong><br/>
                              </p>
                            </div>
                          </li>
                          <li>
                            <div class="collapsible-header"><i class="mdi-social-person"></i> CLIENT</div>
                            <div class="collapsible-body" style="display: block;">
                             <?php 
                              $user = $Avis->Utilisateur($value['idUser']);
                             foreach($user as $va){
                             ?>
                              <p>Nom : <strong><?php echo $va['Nom'];?></strong><br/><br/>
                              Prenom : <strong><?php echo $va['prenom'];?></strong><br/><br/>
                              Telephone : <strong><?php echo $va['Telephone'];?></strong><br/><br/>
                              Imei : <strong><?php echo $va['Imei'];?></strong><br/><br/>
                              </p>
                             <?php }?>
                            </div>
                          </li>
                          <li class="active">
                            <div class="collapsible-header active"><i class="mdi-notification-sms-failed"></i> INFOS SUPPLEMENTAIRES</div>
                            <div class="collapsible-body" style="display: none;">
                              <blockquote>
                               <strong>Commentaire :</strong> <?php echo $value['Commentaire'];?> <br>
                               <strong>Longitude :</strong> <?php echo $value['longitude'];?> <br>
                               <strong>Latitude :</strong> <?php echo $value['latitude'];?> <br>
                               <strong>Faits Marquants :</strong> <img src="<?php echo $value['photo'];?>" style="max-width:90%" alt="Faits Marquants" >
                             
                             </blockquote>
                            </div>
                          </li>
                        </ul>
                   
                  
                </div>
                <!--WITH ICON-->
            </div>
          </div>
          <!-- Floating Action Button -->
          <!-- Floating Action Button -->
        </div>
        <!--end container-->

      </section>
        
    <?php } ?>