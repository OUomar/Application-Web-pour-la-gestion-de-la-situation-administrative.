<?php
  try{
    $pdo=new PDO("mysql:host=localhost;dbname=base_de_donnee","root","");
}catch(PDOException $m){
    echo $m->getMessage();
}
$resu=$pdo->prepare('SELECT * FROM ensiengant WHERE PPR=?');
    $resu->execute([$_GET['PPR']]);
    $ens=$resu->fetch();
    $resu1=$pdo->prepare('SELECT * FROM  administratif  WHERE PPR=?');
    $resu1->execute([$_GET['PPR']]);
    $adm1=$resu1->fetch();
    ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- En-tête de la page-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
    <title>liste de utilisateurs</title>
</head>
 
<body>

    <div class="menus">
    <div id="bare_icones">
                <a  href="https://facebook.com" class="fa fa-facebook" ></a>
                <a href="https://twitter.com" class="fa fa-twitter"></a>
                <a href="https://www.instagram.com" class="fa fa-instagram"></a>
                <a href="https://www.Youtube.com" class="fa fa-youtube"></a>
                <a href="https://www.google.com" class="fa fa-google"></a>
</div>    
    </div>
    <form action="Enregistrer la modification.php" method="POST">
    <table id="table_modifier">
    <?php
   session_start();
    if($ens){
        $_SESSION["ppr"]=$ens['PPR'];
        $_SESSION['ens']=$ens;
    ?>
          <tr><th>N°</th><th><input class="input_mod" type="text" disabled="disabled" name="PPR" value="<?=$ens['N°']?>" ></th></tr>
         <tr><th>PPR</th><th><input class="input_mod"  type="text" name="PPR" value="<?=$ens['PPR']?>" ></th></tr>
        <tr><th>Nom</th><th><input class="input_mod"  type="text"name="nom" disabled="disabled" value="<?=$ens['Nom']?>" ></th></tr>
        <tr><th>Prenom</th><th><input  class="input_mod"  type="text" name="prenom" disabled="disabled" value="<?=$ens['Prenom']?>"></th></tr>
        <tr><th>CIN</th><th><input class="input_mod"  type="text" name="CIN" disabled="disabled" value="<?=$ens['CIN']?>"></th></tr>
        <tr><th>Email</th><th><input class="input_mod"   type="text" name="Email" disabled="disabled" value="<?=$ens['Email']?>"></th></tr>
        <tr><th>Cadre</th><th><input class="input_mod"  type="text" name="Cadre"  value="<?=$ens['Cadre']?>"></th></tr>
        <tr><th>Grade</th><th><input class="input_mod"  type="text" name="Grade" value="<?=$ens['Grade']?>"></th></tr>
        <tr><th>Date de naissance</th><th><input class="input_mod"  type="date"name="D1" disabled="disabled" value="<?=$ens['Date_N']?>"></th></tr>
        <tr><th>Date d'ancienneté administrative</th><th><input class="input_mod"  type="date"name="D2" value="<?=$ens['Date_A_A']?>"></th></tr>
        <tr><th>Date de recrutement</th><th><input class="input_mod"  type="date"name="D3" value="<?=$ens['Date_R']?>"></th></tr>
        <tr><th>Date d'ancienneté grade</th><th><input class="input_mod"  type="date"name="D4" value="<?=$ens['Date_A_G']?>"></th></tr>
        <tr><th>Echlon</th><th><input class="input_mod"  type="text"name="Echlon" value="<?=$ens['Echlon']?>"></th></tr>
        <tr><th>Indice</th><th><input class="input_mod"  type="text"name="Indice" value="<?=$ens['Indice']?>"></th></tr>
        <tr><th>Position</th><th><input class="input_mod"  type="text"name="Position" value="<?=$ens['Position']?>"></th></tr>
        <?php
    
    }else if ($adm1){
       $_SESSION["ppr"]=$adm1['PPR'];
        $_SESSION['admf']=$adm1['PPR'];
    ?>
</table>
<table>
  

<tr><th>N°</th><th><input class="input_mod"  type="text" disabled="disabled" name="PPR" value="<?=$adm1['N°']?>" ></th></tr>
         <tr><th>PPR</th><th><input class="input_mod"  type="text"name="PPR"  value="<?= $adm1['PPR']?>" ></th></tr>
        <tr><th>Nom</th><th><input class="input_mod"  type="text"name="nom" disabled="disabled" value="<?= $adm1['Nom']?>" ></th></tr>
        <tr><th>Prenom</th><th><input class="input_mod"  type="text" name="prenom" disabled="disabled" value="<?=$adm1['Prenom']?>"></th></tr>
        <tr><th>CIN</th><th><input class="input_mod"  type="text" name="CIN" disabled="disabled" value="<?=$adm1['CIN']?>"></th></tr>
        <tr><th>Email</th><th><input class="input_mod"  type="text" name="Email" disabled="disabled" value="<?=$adm1['Email']?>"></th></tr>
        <tr><th>Cadre</th><th><input class="input_mod"  type="text" name="Cadre"  value="<?=$adm1['Cadre']?>"></th></tr>
        <tr><th>Grade</th><th><input class="input_mod"  type="text" name="Grade" value="<?=$adm1['Grade']?>"></th></tr>
        <tr><th>Date de naissance</th><th><input class="input_mod"  type="date"name="D1" disabled="disabled" value="<?= $adm1['Date_N']?>"></th></tr>
        <tr><th>Date d'ancienneté administrative</th><th><input class="input_mod"  type="date"name="D2" value="<?= $adm1['Date_A_A']?>"></th></tr>
        <tr><th>Date de recrutement</th><th><input class="input_mod"  type="date"name="D3" value="<?= $adm1['Date_R']?>"></th></tr>
        <tr><th>Date d'ancienneté grade</th><th><input class="input_mod"  type="date"name="D4" value="<?= $adm1['Date_A_G']?>"></th></tr>
        <tr><th>Echlon</th><th><input class="input_mod"  type="text"name="Echlon" value="<?= $adm1['Echlon']?>"></th></tr>
        <tr><th>Indice</th><th><input class="input_mod"  type="text"name="Indice" value="<?= $adm1['Indice']?>"></th></tr>
        <tr><th>Position</th><th><input class="input_mod"  type="text"name="Position" value="<?= $adm1['Position']?>"></th></tr>
        <?php
    }?>
</table>

<input id="btn_mod" type="submit"  value="Enregistrer la modification" name="Modifier">
    </form></div>

</body>

</html>