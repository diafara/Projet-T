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
                <h5 class="breadcrumbs-title">Statistique</h5>
                <ol class="breadcrumbs">
                  <li><a href="./">Accueil</a>
                  </li>
                  <li class="active">Statistique</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->

         <?php
              require_once('content/classes/classeHome.php');
               $Home = new Home();
             $liste =  $Home->Region();
             $list =  $Home->Station();
              $buffer = '';
              $buffer1 = '';
              $region = 'Region';
              $station = 'Station';
 //var_dump($liste);
           foreach($liste as $valeur){
               if(isset($opt[1]) && $opt[1] == $valeur['idRegion']){
                echo '<li><a href="statistique_details-'.$valeur['idRegion'].'.html">'.$valeur['libelle'].'</a></li>';
                $region = $valeur['libelle'];
               }else
                $buffer = $buffer . '<li><a href="statistique_details-'.$valeur['idRegion'].'.html">'.$valeur['libelle'].'</a></li>';
              
              }
         foreach($list as $valeur){
               if(isset($opt[2]) && $opt[2] == $valeur['idStation']){
                echo '<li><a href="statistique_details-'.$valeur['idRegion'].'-'.$valeur['idStation'].'.html">'.$valeur['libelle'].'</a></li>';
                $station = $valeur['libelle'];
               }else
                $buffer1 = $buffer1 . '<li><a href="statistique_details-'.$valeur['idRegion'].'-'.$valeur['idStation'].'.html">'.$valeur['libelle'].'</a></li>';
              
              }
        ?>
        <!--start container-->
<!--
        <div class="container">
          <div class="section">
-->
<!--            <a class='dropdown-button btn red darken-3' href='#' data-activates='dropdown1'><?php /*echo $region;*/?></a>-->

  <!-- Dropdown Structure -->
<!--             <ul id='dropdown1' class='dropdown-content'>-->
              <?php 
              
           //   echo $buffer;
              ?>
              
              
<!--             </ul>-->


<!--            <a class='dropdown-button btn blue darken-3' href='#' data-activates='dropdown1'><?php echo $station;?></a>-->

  <!-- Dropdown Structure -->
<!--
           <ul id='dropdown1' class='dropdown-content'>
             <?php 
              
              echo $buffer1;
              ?>
           </ul>
-->


            <div class="divider"></div>
            <!--Morris Bar Chart-->
            <div id="morris-bar-chart" class="section">
              <h4 class="header">AVIS</h4>
              <div class="row">
                
                <div class="col s6 m6 l6">
                  <div class="sample-chart-wrapper">
                    <div id="morris-bar1" class="graph"></div>
                  </div>
                </div>
              <div class="col s6 m6 l6">
                  <div class="sample-chart-wrapper">
                    <div id="morris-bar" class="graph"></div>
                  </div>
                </div>
               <div class="col s6 m8 l6">
                  <div class="sample-chart-wrapper">
                    <div id="morris-donut" class="graph"></div>
                  </div>
                </div>
              </div>
            </div>

            

            <div class="divider"></div>
            <!--Morris Donut Chart-->
            <div id="morris-donut-chart" class="section">
             
              <div class="row">
                
                <div class="col s6 m8 l6">
                  <div class="sample-chart-wrapper">
                    <div id="morris-donut" class="graph"></div>
                  </div>
                </div>
              </div>
            </div>

           

          </div>
          <!-- Floating Action Button -->
            <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
                <a class="btn-floating btn-large">
                  <i class="mdi-action-stars"></i>
                </a>
                <ul>
                  <li><a href="css-helpers.html" class="btn-floating red"><i class="large mdi-communication-live-help"></i></a></li>
                  <li><a href="app-widget.html" class="btn-floating yellow darken-1"><i class="large mdi-device-now-widgets"></i></a></li>
                  <li><a href="app-calendar.html" class="btn-floating green"><i class="large mdi-editor-insert-invitation"></i></a></li>
                  <li><a href="app-email.html" class="btn-floating blue"><i class="large mdi-communication-email"></i></a></li>
                </ul>
            </div>
            <!-- Floating Action Button -->
        </div>
        <!--end container-->
      </section>
      