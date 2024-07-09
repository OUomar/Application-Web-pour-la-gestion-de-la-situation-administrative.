
<?php
     if(isset($_POST['Connexion'])){
      header('location: Acceuil_user.php');
      session_start();
         $_SESSION['PPR']=$_POST['PPR'];
         $_SESSION['pwd']=$_POST['pwd'];
         
     }
        else if(isset($_POST['inscrire'])){
            header('location: inscrire.php');
        }

?>