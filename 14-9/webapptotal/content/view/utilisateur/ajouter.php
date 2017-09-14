<script type="text/javascript">
$( document ).ready(function() {
function valider(){
  alert(toto);
            $.ajax({
                    type: "POST",
                    url: "content/Controller/utilisateur.php", //process to mail
                    data: $("#ajouter").serialize(),
                    success: function(msg){
                            if(parseInt(msg)==1){
                             swal("Good job!", "You clicked the button!", "success");
                            $(document).click(function(){
                               location.reload();
                            });

                        }else{ 
                         swal("Good job!", "You clicked the button!", "warning");
                            }
                       //alert(msg); 
                    },
                    error: function(){
                        alert("failure");
                    }
                });
	};
});
 

</script>
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
                <h5 class="breadcrumbs-title">Utilisateur</h5>
                <ol class="breadcrumbs">
                  <li><a href="./">Accueil</a>
                  </li>
                  <li><a href="#">Parametrage</a>
                  </li>
                   <li><a href="utilisateur.html">Utilisateur</a>
                  </li>
                  <li class="active">Ajouter</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        <!--start container-->
        <div class="container">
          <div class="section">
 <!-- Form with icon prefixes -->
           
            <div class="row  ">
              <div class="col s12 m12 l6">
                <div class="card-panel">
                  <h4 class="header2">Ajouter un nouvel Utilisateur</h4>
                 
                  <div class="row">
                   
                    <form class="col s12" id="ajouter" method="post" action="utilisateur.html" onsubmit="javascript:valider();">
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-account-circle prefix"></i>
                          <input id="name3" name="nom" maxlength="80" required type="text">
                          <label for="first_name">Nom</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-account-circle prefix"></i>
                          <input id="email3" name="prenom" maxlength="80" required type="text">
                          <label for="email">Prenom</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-communication-email prefix"></i>
                          <input id="email3" name="email" required type="email">
                          <input  name="ajouter" type="hidden">
                          <label for="email">Email</label>
                        </div>
                      </div>
                       <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-hardware-smartphone prefix"></i>
                          <input id="email3" type="tel" maxlength="9" required name="telephone">
                          <label for="email">Telephone</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-lock-outline prefix"></i>
                          <input id="password3" name="pass" maxlength="8" required type="password">
                          <label for="password">Mot de Passe par defaut</label>
                        </div>
                      </div>
                      <div class="row">
                       <div class="row">
                          <div class="input-field col s12">
                            <button class="btn blue waves-effect waves-light right" type="submit" name="action">Envoyer
                              <i class="mdi-content-send right"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </section>