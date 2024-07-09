
<?php

include('connexionBD.php');
include('MENU_user.php');

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

  // include('profil.php');
   if(!empty( $_SESSION['PPR']) && !empty( $_SESSION['pwd'])){
    $PPR=$_SESSION['PPR'];
    $PWD= $_SESSION['pwd'];
       $RES1 = $pdo->prepare("SELECT PPR FROM ensiengant WHERE PPR= ?");
        $RES1->execute(array($PPR));
        $resultat1 = $RES1->fetch();
        $RES3 = $pdo->prepare("SELECT Mot_de_passe FROM ensiengant WHERE Mot_de_passe = ?");
        $RES3->execute(array(md5($PWD)));
        $resultat3 = $RES3->fetch();
        $RES2 = $pdo->prepare("SELECT PPR FROM administratif WHERE PPR= ?");
       $RES2->execute(array($PPR));
       $resultat2 = $RES2->fetch();
       $RES4 = $pdo->prepare("SELECT Mot_de_passe FROM administratif WHERE Mot_de_passe = ?");
       $RES4->execute(array(md5($PWD)));
       $resultat4 = $RES4->fetch();
       $sel_E=$pdo->prepare("SELECT Etat from ensiengant where PPR = ?");
        $sel_E->execute(array($PPR));
       $etat1= $sel_E->fetch(); 
       $sel_A=$pdo->prepare("SELECT Etat from ensiengant where PPR = ?");
       $sel_A->execute(array($PPR));
        $etat2= $sel_A->fetch(); 
        
        if (!($resultat1 && $resultat3) && !($resultat2 && $resultat4)){
            
            $msg="Mauvais Matricule PPR ou mot de passe  !!";
             $_SESSION['valide'] = $msg;
            header('location:index.php');
        }else if($resultat1 && $resultat3){
            if($etat1['Etat']==0){
                $msg="votre compte est désactivé veuillez contacter l'admin pour régler votre problème ";
                 $_SESSION['teste'] = $msg;
                header('location:index.php');
            }
            $sel=$pdo->prepare("SELECT Nom,Prenom from ensiengant where PPR = ? and Mot_de_passe = ?");
            $sel->execute(array($PPR,md5($PWD)));
            $tab1= $sel->fetch();
            echo" <div id='page_acc'><center >Bienvenu<br>M.".$tab1['Nom']."  ".$tab1['Prenom']."</center></div>";
            
        }else if ($resultat2 && $resultat4){
            if($etat2['Etat']==0){
                $msg="votre compte est désactivé veuillez contacter l'admin pour régler votre problème ";
                 $_SESSION['teste'] = $msg;
                header('location:index.php');
            }
            $sel=$pdo->prepare("SELECT Nom,Prenom from administratif where PPR = ? and Mot_de_passe = ?");
            $sel->execute(array($PPR,md5($PWD)));
            $tab1= $sel->fetch();
            echo" <div id='page_acc'><center >Bienvenu M.".$tab1['Nom']."  ".$tab1['Prenom']."</center></div>";
        }
      
   }else{
    $msg="veuillez remplire les champs !!";
    $_SESSION['vide'] = $msg;
    header('location:index.php');}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style1.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<title>Acceuil</title>
</head>
<body>




<div class="copyright">
       <center> <p >Copyright 2022 - FST Errachia</p></center>
   </div>

   <center><a   href="Acceuil_user.php"  >retour au haut </a></center>

</body>

</html>


