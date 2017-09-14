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
            ?>


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
         
        </div>
        <!--end container-->
      </section>
      