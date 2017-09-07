<?php
@session_start();

function uploadImgApp($inputName){
  $res = 1;
  $url = "";
  if($res == 1){


  $data = explode(',', $inputName);
  foreach ($data as $value) {
    $dossier = 'impub/';
    $fichier = @basename($_FILES[$value]['name']);
    $taille_maxi = 800000; //8Mo  
    $taille = @filesize($_FILES[$value]['tmp_name']);
    if($taille>$taille_maxi)
    {
         //$erreur = 'Le fichier est trop gros...';
         return -2;
    }
    if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
    {
         //On formate le nom du fichier ici...
         $fichier = strtr($fichier, 
              'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
              'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
         $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
     $fichier = substr(md5(microtime()),rand(0,26),5). $fichier;
     
       if(move_uploaded_file($_FILES[$value]['tmp_name'], '../../'.$dossier . $fichier)){
        $res *= 1;
        $url .= $fichier.',';
       }
       else{
        $res *= -1;
       }
     }
    }
   }
   $url = substr($url, 0, strlen($url) - 1);
   if($res == 1){
    return $url;
   }
   else
    return -1;
}

if(isset($_GET['supprimer'])){
        require_once("../classes/classeArticle.php");
        $Id= htmlspecialchars($_GET['supprimer']);
        $str = explode("$", $Id);
        $a=0;
        $objet = new Article();
        foreach($str as $ide){
            $a= $objet->deleteArticle($ide);
    }
        echo $a;
  }else if(isset($_POST['ajouter'])){
          require_once('../classes/classeArticle.php');

          $d = "";
          for ($i=1; $i <= 12; $i++) { 
            if(!empty($_FILES['image'.$i]['name'])){
              $d .=  'image'.$i.',';
            }
          }

          $img = uploadImgApp(substr($d, 0, strlen($d) - 1));
          if($img != -1){
             $article = new Article("",htmlspecialchars($_POST['titrefr']), htmlspecialchars($_POST['titreen']), $_POST['contenufr'], $_POST['contenuen'], date("d/m/Y"), $img, htmlspecialchars($_POST['idCategorie']), htmlspecialchars($_POST['idSite']), 1);
              $actu = $article->addArticle();
              echo $actu;
          }
          else{
            echo -1;
          }
    }
    else if(isset($_POST['modifier'])){
        require_once('../classes/classeArticle.php');
        $Article = new Article(htmlspecialchars($_POST['modifier']), htmlspecialchars($_POST['libelle']));
        echo  $Article->updateArticle();
        //echo $_POST['modifier'];
    }
    else{
        if(isset($opt)){
            $opt = explode("-", $opt);
            $option = $opt[0];
           
            if($option == "ajouter"){
                include('content/view/statistique/ajouter.php');
            }else if($option == "modifier"){
                require_once('php/classes/classeArticle.php');
                include('content/view/statistique/modifier.php');
            }else if($option=="supprimer"){
               require_once('content/classes/classeArticle.php');

                include('content/view/statistique/liste.php');
            }
            else if($option=="details"){
                    include('content/view/statistique/liste.php');
                }
            }else{
                include('content/view/statistique/liste.php');
        }
    }
?>