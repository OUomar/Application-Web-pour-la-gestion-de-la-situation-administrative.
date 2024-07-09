<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/525icons/2.6.0/525icons.min.css">
    <title>Accueil</title>
</head>
<body>   
    <form id="interfacepwd" action="" method="post">
        <label id="message">Entrer vos informaions d'inscription ci-dessous et cliquez sur envoyer. vous allez recevoir un e-mail contenat un code de validation </label>
        <img  id="imgfste" src="les images\fste.PNG">
       
        <table width="250px" id="pwdtab">
            <tr>
                <td colspan="2" ><input type="text" name="PPR" placeholder="PPR:Matricule" class="entrer" ></td>              
            </tr>
            <tr>
                <td colspan="2"><input type="email" name="email" placeholder="Adrese E-mail" class="entrer"  ></td>
            </tr>
            </table>
            <table style="margin-left :46%"  width="380px" >
            <tr>
                <td><input type="submit"  value="Envoyer" class="btn btn-primary btn-lg m-2" ></td>
                <td ><a href="index.php"   class="btn btn-primary btn-lg m-2" >S'identifier</a></td>
            </tr>   
            </table>
    
    </form>
</body>
</html>
<?php
include('connexionBD.php');
function genererChaineAleatoire($longueur = 5)
{
 $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 $longueurMax = strlen($caracteres);
 $chaineAleatoire = '';
 for ($i = 0; $i < $longueur; $i++)
 {
 $chaineAleatoire .= $caracteres[rand(0, $longueurMax - 1)];
 }
 return $chaineAleatoire;
}
if(isset($_POST['PPR']) && isset($_POST['email'])){
$PPR=$_POST['PPR'];
$EMAIL=$_POST['email'];
$sel_E=$pdo->prepare("SELECT Email from ensiengant where PPR =?");
$sel_E->execute(array($PPR));
$tab1= $sel_E->fetch(); 
$sel_A=$pdo->prepare("SELECT Email from administratif where PPR =?");
$sel_A->execute(array($PPR));
$tab2= $sel_A->fetch(); 
$chaine=genererChaineAleatoire(5);
if($tab1){
    if($tab1['Email']==$EMAIL){
    $message="Bonjour, \n votre  nouveau mot de passe est :".$chaine."\n Merci";
$retour = mail($_POST["email"],"Mot de passe oublier",$message,"omar.khalid0201@gmail.com");
if($retour)
  echo"<script> alert('email a bien envoyé')</script>";
  $ins=$pdo->prepare("UPDATE ensiengant SET Mot_de_passe=? where PPR=?");
  $ins->execute(array(md5($chaine),$PPR));
}else 
echo"<script> alert('votre email est incorrecte')</script>"; 
}
if($tab2){
    if($tab2['Email']==$EMAIL){
    $message="Bonjour, \n votre  nouveau mot de passe est :".$chaine."\n Merci";
    $retour = mail($_POST["email"],"Mot de passe oublier",$message,"omar.khalid0201@gmail.com");
    if($retour)
      echo"<script> alert('email a bien envoyé')</script>";
      $ins=$pdo->prepare("UPDATE administratif SET Mot_de_passe=? where PPR=?");
      $ins->execute(array(md5($chaine),$PPR));
}else 
     echo"<script> alert('votre email est incorrecte')</script>"; 
}
}
?>