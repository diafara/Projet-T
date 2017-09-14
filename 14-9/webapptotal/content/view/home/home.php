   <section id="content">
                <!--start container-->
                <div class="container">
                    <!--card stats start-->
                    <div id="card-stats">
                        <div class="row">
                         <?php
                                 require_once('content/classes/classeHome.php');
                                $Home = new Home();
                         ?>
                            <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-content  green white-text">
                                        <p class="card-stats-title"><i class="mdi-social-group"></i> Clients Identifi&eacute;s</p>
                                        <h4 class="card-stats-number"><?php echo $Home->clientIentifies();?></h4>
                                        <p class="card-stats-compare"><span class="green-text text-lighten-5">Clients Total</span>
                                        </p>
                                    </div>
                                    <div class="card-action  green darken-2">
                                        <div id="clients-bar" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-content pink lighten-1 white-text">
                                        <p class="card-stats-title"><i class="mdi-social-group"></i> Clients Anonymes</p>
                                        <h4 class="card-stats-number"><?php echo $Home->clientAnonymes();?></h4>
                                        <p class="card-stats-compare"><span class="deep-purple-text text-lighten-5">Anonymes</span>
                                        </p>
                                    </div>
                                    <div class="card-action  pink darken-2">
                                        <div id="invoice-line" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-content blue-grey white-text">
                                        <p class="card-stats-title"><i class="mdi-action-help"></i> Total avis</p>
                                        <h4 class="card-stats-number"><?php echo $Home->TotalAvis();?></h4>
                                        <p class="card-stats-compare"><span class="blue-grey-text text-lighten-5">Avis Partag&eacute;s</span>
                                        </p>
                                    </div>
                                    <div class="card-action blue-grey darken-2">
                                        <div id="profit-tristate" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <!--card stats end-->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->

                    <!--card widgets start-->
                    <div id="card-widgets">
                    
                    <!-- //////////////////////////////////////////////////////////////////////////// -->

                    <!--work collections start-->
                    <div id="work-collections">
                        <div class="row">
                            <div class="col s12 m12 l6">
                                <ul id="projects-collection" class="collection">
                                    <li class="collection-item avatar">
                                        <i class="mdi-maps-local-gas-station circle light-blue darken-2"></i>
                                        <span class="collection-header">Stations</span>
                                        <p>Les 10 stations les mieux notées</p>
                                        <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>
                                    </li>
                                 <?php 
                                 $station = $Home->lesMieuxNotees();
                                 $i=0;
                                  foreach($station as $value){
                                   if($i<10)
                                    echo '<li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">'.$value['station'].'</p>
                                                <p class="collections-content">'.$value['region'].'</p>
                                            </div>
                                            <div class="col s3">
                                                <span class="task-cat cyan">'.$value['score'].'</span>
                                            </div>
                                            <div class="col s3">
                                                <div id="project-line-1"></div>
                                            </div>
                                        </div>
                                    </li>';
                                   $i++;
                                  }
                                 ?>
                               </ul>
                            </div>
                            <div class="col s12 m12 l6">
                                <ul id="issues-collection" class="collection">
                                    <li class="collection-item avatar">
                                        <i class="mdi-communication-live-help circle red darken-2"></i>
                                        <span class="collection-header">Avis Globale</span>
                                        <p></p>
                                        <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>
                                    </li>
                                  <?php
                           
                               $list = $Home->avisglobal();
                                foreach($list as $value){
                                    echo '<li class="collection-item">
                                        <div class="row">
                                            <div class="col s7">
                                               
                                                <p class="collections-content">'.htmlentities($value['question'], ENT_SUBSTITUTE).'</p>
                                            </div>
                                            <div class="col s2">
                                                <span class="task-cat green accent-2">'.$value['score'].'</span>
                                            </div>
                                            <div class="col s3">
                                                <div class="progress">
                                                     <div class="determinate" style="width:'.$value['score'].'%"></div>   
                                                </div>                                                
                                            </div>
                                        </div>
                                    </li>
                                    ';
                                }
                            ?> 
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--work collections end-->


                </div>
                <!--end container-->
            </section>
            <!-- END CONTENT -->
