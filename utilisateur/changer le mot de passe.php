<?php
include('MENU_user.php');
?>

    <section id="inter_contact">
      
      <title>Changer le mot de passe</title>
          <form  method="post" action="">
            <div>
            <label class="Cinfos">Ancienne  mot de passe</label><br>
              <input type="password" placeholder="Entrer votre Ancienne mot de passe"  name="pwd" class="input_infos" size=67 required>
            </div>
            <div>
              <label class="Cinfos">Nouveau mot de passe</label>
              <input type="password" placeholder="Entrer votre nouveau   Email address"  name="Npasse" class="input_infos" required>
            </div>
            <div>
              <label class="Cinfos">Confirmer Le mot de passe</label><br>
              <input type="password" placeholder="Confirmer Le mot de passe"  name="Cpasse" class="input_infos" required>
            </div>
            <div class="btn_contact">
              <input type="submit" value="Confirmer"  name="envoyer" class="input_infos">
            </div>
           
      </div>
    </section>
  </body>
</html>
<?php
include('connexionBD.php');
if(isset($_POST['pwd']) && isset($_POST['Npasse'])){
$pwd=$_POST['pwd'];
$passe=$_POST['Npasse'];
session_start();

$PPR=$_SESSION["PPR"];
$sel_E=$pdo->prepare("SELECT Mot_de_passe from ensiengant where PPR = ?");
$sel_E->execute(array($PPR));
    $tab1= $sel_E->fetch(); 
    $sel_A=$pdo->prepare("SELECT Mot_de_passe from administratif where PPR = ? ");
    $sel_A->execute(array($PPR));
    $tab2= $sel_A->fetch(); 
    if($tab1){
        
if($_POST['Cpasse']===$_POST['Npasse']){
    if(md5($pwd)==$tab1['Mot_de_passe']){
    $ins=$pdo->prepare("UPDATE ensiengant SET Mot_de_passe=? where PPR=?");
    $ins->execute(array(md5($passe),$PPR));
    echo"<div class='pwd1'>la modification de mot de passe à bien enregestrer</div>";
     }else{
        echo" <div class='pwd2'>ancienne mot de passe est  incorrecte</div>";
}
   }else{
    echo"<div class='pwd2'>les mots de passe sont différents essayer de confirmer</div>";
   }
}
   else if($tab2){
  if($_POST['Cpasse']==$_POST['Npasse']){
    if(md5($pwd)==$tab2['Mot_de_passe']){
    $ins=$pdo->prepare("UPDATE administratif SET Mot_de_passe=? where PPR=?");
    $ins->execute(array(md5($passe),$PPR));
    echo"<div class='pwd1'>la modification de mot de passe à bien enregestrer</div>";
}else{
    echo" <div class='pwd2'>ancienne mot de passe est  incorrecte</div>";
}
   }else{
    echo"<div class='pwd2'>les mots de passe sont différents essayer de confirmer</div>";
   }
}
}

?>