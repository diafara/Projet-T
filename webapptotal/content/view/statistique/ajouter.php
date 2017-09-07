<link rel="stylesheet" href="bower_components/codemirror/lib/codemirror.css">
    
    <!-- uikit -->
    <link rel="stylesheet" href="bower_components/uikit/css/uikit.almost-flat.min.css" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="assets/icons/flags/flags.min.css" media="all">

    <!-- style switcher -->
    <link rel="stylesheet" href="assets/css/style_switcher.min.css" media="all">
    
    <!-- altair admin -->
    <link rel="stylesheet" href="assets/css/main.min.css" media="all">

    <!-- themes -->
    <link rel="stylesheet" href="assets/css/themes/themes_combined.min.css" media="all">
<script type="text/javascript" src="assets/js/ajax.js"></script>
    <script type="text/javascript" src="php/view/article/article.js"></script>
       <div id="page_content">
        <div id="page_content_inner">
       <ul id="breadcrumbs">
                <li><a href="./" style="margin-left:50x"><i class="material-icons">&#xE88A;</i></a></li>
            <li><a href="article">Article</a></li>
                <li><span>Ajouter</span></li>
            </ul>
            <br>
            <h3>Article</h3>
            <div class="md-card">
                <div class="md-card-content">
                    <div id="message">
                        
                        
                    </div>
                    <div class="uk-overflow-container uk-margin-bottom">
                        <form method="post" action="" class="addnew" id="addArticle">
                            <h3>Ajout d'un Nouvel Article</h3>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-2">
                                    <label>Titre en fran&ccedil;ais *</label>
                                    <input type="text" name="titrefr" id="titrefr" class="md-input uk-form-width-xlarge" required/>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <label>Titre en anglais</label>
                                    <input type="text" name="titreen" id="titreen" class="md-input uk-form-width-xlarge"/>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-2">
                                    <label>Contenu en fran&ccedil;ais *</label>                                        
                                    <textarea cols="30" rows="4" name="contenufr" id="contenufr" required data-uk-htmleditor="{ maxsplitsize:1220, codemirror : { mode: 'text/html' } }"></textarea>   
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <label>Contenu en anglais</label>
                                    <textarea cols="30" rows="4" name="contenuen" id="contenuen" required data-uk-htmleditor="{ maxsplitsize:1220, codemirror : { mode: 'text/html' } }"></textarea>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-2">
                                    <select id="select_demo_1" class="md-input" name="idCategorie" id="idCategorie">
                                        <option value="" disabled selected hidden>Cat&eacute;gorie * </option>
                                        <?php
                                           require('php/classes/classeCategoriearticle.php');
                                           $annee = new Categoriearticle();
                                           $list = $annee->listCategoriearticle();
                                           foreach($list as $value){
                                               echo '
                                                        <option value="'.$value['idCategorie'].'">'.$value['libelle'].'</option>
                                                    ';
                                           }
                                        ?>
                                    </select>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <label>Site</label>
                                    <input type="text" name="idSite" id="idSite" class="md-input uk-form-width-xlarge" readonly/>
                                </div>
                            </div>
                            <!-- </div> -->
                            <div class="uk-grid">

                                <div class="uk-width-medium-1-4">
                                    <!-- <div class="md-card-content"> -->
                                    <label>Veuillez choisir une image *</label>
                                        <input type="file" onchange="validateImg(this)" id="image1" name="image1" class="" required />
                                    <!-- </div> -->
                                    <div id="Pimage1">
                                        <img class="uk-width-medium-1-1" src="" alt=""/>
                                    </div>
                                </div>
                                <div class="uk-width-medium-1-4">
                                    <!-- <div class="md-card-content"> -->
                                    <label>Veuillez choisir une image</label>
                                        <input type="file" onchange="validateImg(this)" id="image2" name="image2"  class="" />
                                        <div id="Pimage2">
                                            <img src="" alt="" class="uk-width-medium-1-1">
                                        </div>
                                    <!-- </div> -->
                                </div>
                                <div class="uk-width-medium-1-4">
                                    <!-- <div class="md-card-content"> -->
                                    <label>Veuillez choisir une image</label>
                                        <input type="file" onchange="validateImg(this)" id="image3" name="image3"  class="" />
                                        <div id="Pimage3">
                                            <img src="" alt="" class="uk-width-medium-1-1">
                                        </div>
                                    <!-- </div> -->
                                </div>
                                <div class="uk-width-medium-1-4">
                                    <!-- <div class="md-card-content"> -->
                                    <label>Veuillez choisir une image</label>
                                        <input type="file" onchange="validateImg(this)" id="image4" name="image4"  class="" />
                                        <div id="Pimage4">
                                            <img src="" alt="" class="uk-width-medium-1-1">
                                        </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                            <div class="uk-grid">

                                <div class="uk-width-medium-1-4">
                                    <!-- <div class="md-card-content"> -->
                                    <label>Veuillez choisir une image</label>
                                        <input type="file" onchange="validateImg(this)" id="image5" name="image5"  class="" />
                                        <div id="Pimage5">
                                            <img src="" alt="" class="uk-width-medium-1-1">
                                        </div>
                                    <!-- </div> -->
                                </div>
                                <div class="uk-width-medium-1-4">
                                    <!-- <div class="md-card-content"> -->
                                    <label>Veuillez choisir une image</label>
                                        <input type="file" onchange="validateImg(this)" id="image6" name="image6"  class="" />
                                        <div id="Pimage6">
                                            <img src="" alt="" class="uk-width-medium-1-1">
                                        </div>
                                    <!-- </div> -->
                                </div>
                                <div class="uk-width-medium-1-4">
                                    <!-- <div class="md-card-content"> -->
                                    <label>Veuillez choisir une image</label>
                                        <input type="file" onchange="validateImg(this)" id="image7" name="image7"  class="" />
                                        <div id="Pimage7">
                                            <img src="" alt="" class="uk-width-medium-1-1">
                                        </div>
                                    <!-- </div> -->
                                </div>
                                <div class="uk-width-medium-1-4">
                                    <!-- <div class="md-card-content"> -->
                                    <label>Veuillez choisir une image</label>
                                        <input type="file" onchange="validateImg(this)" id="image8" name="image8"  class="" />
                                        <div id="Pimage8">
                                            <img src="" alt="" class="uk-width-medium-1-1">
                                        </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                            <div class="uk-grid">

                                <div class="uk-width-medium-1-4">
                                    <!-- <div class="md-card-content"> -->
                                    <label>Veuillez choisir une image</label>
                                        <input type="file" onchange="validateImg(this)" id="image9" name="image9"  class="" />
                                        <div id="Pimage9">
                                            <img src="" alt="" class="uk-width-medium-1-1">
                                        </div>
                                    <!-- </div> -->
                                </div>
                                <div class="uk-width-medium-1-4">
                                    <!-- <div class="md-card-content"> -->
                                    <label>Veuillez choisir une image</label>
                                        <input type="file" onchange="validateImg(this)" id="image10" name="image10"  class="" />
                                        <div id="Pimage10">
                                            <img src="" alt="" class="uk-width-medium-1-1">
                                        </div>
                                    <!-- </div> -->
                                </div>
                                <div class="uk-width-medium-1-4">
                                    <!-- <div class="md-card-content"> -->
                                    <label>Veuillez choisir une image</label>
                                        <input type="file" onchange="validateImg(this)" id="image11" name="image11"  class="" />
                                        <div id="Pimage11">
                                            <img src="" alt="" class="uk-width-medium-1-1">
                                        </div>
                                    <!-- </div> -->
                                </div>
                                <div class="uk-width-medium-1-4">
                                    <!-- <div class="md-card-content"> -->
                                    <label>Veuillez choisir une image</label>
                                        <input type="file" onchange="validateImg(this)" id="image12" name="image12"  class="" />
                                        <div id="Pimage12">
                                            <img src="" alt="" class="uk-width-medium-1-1">
                                        </div>
                                    <!-- </div> -->
                                </div>
                            </div>

                            <input type="hidden" name="ajouter"/>
							<br>
                            <button  type="submit" class="md-btn md-btn-success md-btn-wave-light waves-effect waves-button waves-light">Valider</button><button  type="reset" class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">annuler</button>
                        </form>
                    </div>
                    
                </div>
            </div>
    <script>
        function validateImg(elmt){
            var _URL = window.URL || window.webkitURL;
            var file, img;
            if ((file = elmt.files[0])) {
                img = new Image();
                img.onload = function() {
                    if(this.width !== 870 && this.height !== 580){
                        // $("#errorSize").modal('show'); 
                        UIkit.modal.alert('<p class="uk-text-bold"><i class="uk-icon-close uk-icon-large uk-text-danger"> </i> &nbsp; &nbsp;La taille de l\'image choisie ne convient pas. Veuillez en choisir une autre</p>');
                        $("#"+elmt.id).wrap('<form>').closest('form').get(0).reset();
                        $("#"+elmt.id).unwrap();
                    }
                    else{
                        var filePath = URL.createObjectURL(elmt.files[0]);
                        $("#P"+elmt.id+" img").attr('src',filePath);
                    }
                };
                img.onerror = function() {
                    // $("#errorType").modal('show'); 
                    UIkit.modal.alert('<p class="uk-text-bold"><i class="uk-icon-close uk-icon-large uk-text-danger"> </i>&nbsp; &nbsp;Vous devez choisir un fichier de type image</p>');
                    // alert( "not a valid file: " + file.type);
                    $("#"+elmt.id).wrap('<form>').closest('form').get(0).reset();
                    $("#"+elmt.id).unwrap();
                };
                img.src = _URL.createObjectURL(file);
            }
            else{
                $("#P"+elmt.id+" img").attr('src',"");
            }
        }
    </script>

    <!-- common functions -->
    <script src="assets/js/common.min.js"></script>

    <!-- uikit functions -->
    <script src="assets/js/uikit_custom.min.js"></script>
    <!-- altair common functions/helpers -->
    <script src="assets/js/altair_admin_common.min.js"></script>

    <!-- page specific plugins -->
    <!-- ionrangeslider -->
    <script src="bower_components/ion.rangeslider/js/ion.rangeSlider.min.js"></script>
    <!-- htmleditor (codeMirror) -->
    <script src="assets/js/uikit_htmleditor_custom.min.js"></script>
    <!-- inputmask-->
    <script src="bower_components/jquery.inputmask/dist/jquery.inputmask.bundle.js"></script>

    <!--  forms advanced functions -->
    <script src="assets/js/pages/forms_advanced.min.js"></script>
  
    </div>

  