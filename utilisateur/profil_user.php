<?php
include('MENU_user.php');
?>
<section >
  
<title>Mon profil</title>

              <div class="img_profil_user">

              </div>
              <div class="informations_user">
              <?php
              include('connexionBD.php');
              if(!isset($_SESSION)) 
              { 
                  session_start(); 
              } 
              $PPR=$_SESSION['PPR'];
              $PWD= $_SESSION['pwd'];
              $sel_E=$pdo->prepare("SELECT * from ensiengant where PPR = ? and Mot_de_passe = ?");
              $sel_E->execute(array($PPR,md5($PWD)));
              $tab1= $sel_E->fetch();
              $sel_A=$pdo->prepare("SELECT * from administratif where PPR = ? and Mot_de_passe = ?");
              $sel_A->execute(array($PPR,md5($PWD)));
              $tab2= $sel_A->fetch();
              if($tab1){
                include('changer le profil.php');
             echo "<h4> ".$tab1['Nom']." ".$tab1['Prenom']."</h4>";
              echo"<h4> Matricule PPR : ".$tab1['PPR']."</h4>";
              echo"<h4> Date de Naissance : ".$tab1['Date_N']."</h4>";
              echo"<h4> E-mail : ".$tab1['Email']."</h4>";
            }else if($tab2){
              include('changer le profil.php');
                echo "<h4> ".$tab2['Nom']."  ".$tab2['Prenom']."</h4>";
              echo"<h4> Matricule PPR : ".$tab2['PPR']."</h4>";
              echo"<h4> Date de Naissance : ".$tab2['Date_N']."</h4>";
              echo"<h4> E-mail : ".$tab2['Email']."</h4>";
            }
              ?>   
        </div>
  </section>
</body>
</html>