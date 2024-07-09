
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
    <form method="POST" action="" id="interface2">
        <label id="message">Entrer vos informaions d'inscription ci-dessous et cliquez sur envoyer. vous allez recevoir un e-mail contenat votre mot de passe </label>
        <div>
            <img  id="imgfste" src="les images\fste.PNG">
        </div>
        <div id="page_principale2">
        <table  width="250px" >
            <tr class="input-icone">
                <td colspan="2" ><input type="text" name="PPR" placeholder="PPR:Matricule" class="entrer" required ></td>               
            </tr>
        
            <tr>
                <td colspan="2"><input type="text" name="cin" placeholder="Numéro de CIN" class="entrer" required ></td>              
            </tr>
            <tr>
                <td colspan="2"><input type="date" name="date"  class="entrer"  required></td> 
            </tr>
            <tr class="input-icone">
                <td colspan="2"><input type="email" name="email" placeholder="Adrese E-mail" class="entrer"  required></td>               
            </tr>
            <tr>
                <td>ensiengant  <input type="RADIO" name="user" value="ensiengant" required ></td> 
                <td>administratif  <input type="RADIO" name="user" value="administratif " required ></td>                   
            </tr>
            </table>
            <table width="330px">
            <tr>
                <td><input type="submit"  value="Envoyer"  class="btn btn-primary btn-lg m-2" ></td>
                <td ><a href="index.php"   class="btn btn-primary btn-lg m-2" >S'identifier</a></td>
            </tr>
            </table>
    </div>
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
$chaine=genererChaineAleatoire(5);
if(!empty($_POST['PPR']) && !empty($_POST['cin']) && !empty($_POST['date']) && !empty($_POST['email']) &&!empty($_POST['user'])){
$PPR=$_POST['PPR'];
$CIN=$_POST['cin'];
$DATE=$_POST['date'];
$EMAIL=$_POST['email'];
$choix=$_POST['user'];

if($choix==="ensiengant"){
$ins=$pdo->prepare("INSERT INTO ensiengant (PPR,CIN,Date_N,Email,mot_de_passe) value(?,?,?,?,?)");
$ins->execute(array($PPR,$CIN,$DATE,$EMAIL,md5($chaine)));
    $message="Bonjour, \n votre  nouveau mot de passe est :".$chaine."\n Merci";
$retour = mail($_POST["email"],"Mot de passe oublier",$message,"omar.khalid0201@gmail.com");
if($retour)
echo"<script>alert('votre demande a été enregistré avec succès')</script>";
}else if ($choix==="administratif"){
 $ins=$pdo->prepare("INSERT INTO administratif (PPR,CIN,Date_N,Email) value(?,?,?,?)");
$ins->execute(array($PPR,$CIN,$DATE,$EMAIL,md5($chaine))); 
$message="Bonjour, \n votre  nouveau mot de passe est :".$chaine."\n Merci";
$retour = mail($_POST["email"],"Mot de passe oublier",$message,"omar.khalid0201@gmail.com");
if($retour)
echo"<script>alert('votre demande a été enregistré avec succès')</script>";
}
}


?>