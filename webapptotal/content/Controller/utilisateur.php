<?php

//echo "toto";

if(isset($_GET['supprimer'])){
        require_once("../classes/classeUtilisateur.php");
        $Id= htmlspecialchars($_GET['supprimer']);
        $str = explode("$", $Id);
        $a=0;
        $objet = new Utilisateur();
        foreach($str as $ide){
            $a= $objet->deleteUtilisateur($ide);
    }
        echo $a;
  }else if(isset($_POST['ajouter'])){
          require_once('../classes/classeUtilisateur.php');

         
             $utilisateur = new Utilisateur("",htmlspecialchars($_POST['nom']), htmlspecialchars($_POST['prenom']), htmlspecialchars($_POST['email']), htmlspecialchars($_POST['telephone']), date('d-m-y'));
              $actu = $utilisateur->addUtilisateur();
              echo $actu;
          
    }
    else if(isset($_POST['modifier'])){
        require_once('../classes/classeUtilisateur.php');
        $Utilisateur = new Utilisateur(htmlspecialchars($_POST['modifier']), htmlspecialchars($_POST['nom']), htmlspecialchars($_POST['prenom']), htmlspecialchars($_POST['email']), htmlspecialchars($_POST['telephone']), date('d-m-y'));
        echo  $Utilisateur->updateUtilisateur();
        //echo $_POST['modifier'];
    }
    else{
        if(isset($opt)){
            $opt = explode("-", $opt);
            $option = $opt[0];
            if($option == "ajouter"){
                include('content/view/utilisateur/ajouter.php');
            }else if($option == "modifier"){
                require_once('content/classes/classeUtilisateur.php');

                include('content/view/utilisateur/modifier.php');
            }else if($option=="supprimer"){
               require_once('php/classes/classeUtilisateur.php');

                include('content/view/utilisateur/liste.php');
            }
            else if($option=="details"){
                    include('content/view/utilisateur/details.php');
                }
            }else{
                include('content/view/utilisateur/liste.php');
        }
    }
?>