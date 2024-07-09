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
</body>
</html>
<?php
    try{
        $pdo=new PDO("mysql:host=localhost;dbname=base_de_donnee","root","");
    }catch(PDOException $m){
        echo $m->getMessage();
    }
    if(isset($_POST['ensg'])){

    $sel=$pdo->prepare("SELECT * from ensiengant ");
            $sel->execute();
            $tab1= $sel->fetchAll();

            echo"<table class='table' border=1 ><tr id='tr_liste'><th>N°</th><th>PPR</th><th>Nom</th><th>Prenom</th><th>CIN</th><th>Email</th><th>Cadre</th><th>Grade</th><th>Date de naissance</th>
            <th>Date d'ancienneté administrative</th><th>Date de recrutement</th><th>Date d'ancienneté grade</th><th>Echlon </th>
            <th>Indice</th><th>Position</th><th colspan=2>Actions</th>
            </tr>";
           
            for($i=0;$i<count($tab1);$i++){ 
                echo"
                <div id='table_information' >
                <tr id='td_liste'>
                <td class='donnee'>".$tab1[$i]['N°']."</td>
                <td class='donnee'>".$tab1[$i]['PPR']."</td>
               <td class='donnee'>".$tab1[$i]['Nom']."</td>
                <td class='donnee'>".$tab1[$i]['Prenom']."</td>
                <td class='donnee'>".$tab1[$i]['CIN']."</td>
                <td class='donnee'>".$tab1[$i]['Email']."</td>
                <td class='donnee'>".$tab1[$i]['Cadre']."</td>
                <td class='donnee'>".$tab1[$i]['Grade']."</td>
                <td class='donnee'>".$tab1[$i]['Date_N']."</td>
                <td class='donnee'>".$tab1[$i]['Date_A_A']."</td>
                <td class='donnee'>".$tab1[$i]['Date_R']."</td>
                <td class='donnee'>".$tab1[$i]['Date_A_G']."</td>
                <td class='donnee'>".$tab1[$i]['Echlon']."</td>
                 <td class='donnee'>".$tab1[$i]['Indice']."</td>
                <td class='donnee'>".$tab1[$i]['Position']."</td>
                <td ><a  id='mod' href='modification.php?PPR={$tab1[$i]['PPR']}'>modefier</a></td><td><a id='supp' href='suprimer.php?PPR={$tab1[$i]['PPR']}'>Suprimer</a></td>
                </tr>
                </div>";
               }
               echo"</table>";
               
            }
               else if(isset($_POST['admf'])){
               
                $sel=$pdo->prepare("SELECT * from administratif ");
                $sel->execute();
                $tab1= $sel->fetchAll();
    
                echo" <table class='table' border=1 ><tr id='tr_liste'><th>N°</th><th>PPR</th><th>Nom</th><th>Prenom</th><th>CIN</th><th>Email</th><th>Cadre</th><th>Grade</th><th>Date de naissance</th>
                <th>Date d'ancienneté administrative</th><th>Date de recrutement</th><th>Date d'ancienneté grade</th><th>Echlon </th>
                <th>Indice</th><th>Position</th><th colspan=2>Actions</th>
                </tr>";
               
                for($i=0;$i<count($tab1);$i++){ 
                    echo"
                    <div id='table_information' >
                    <tr id='td_liste'>
                    <td class='donnee'>".$tab1[$i]['N°']."</td>
                    <td class='donnee'>".$tab1[$i]['PPR']."</td>
                   <td class='donnee'>".$tab1[$i]['Nom']."</td>
                    <td class='donnee'>".$tab1[$i]['Prenom']."</td>
                    <td class='donnee'>".$tab1[$i]['CIN']."</td>
                    <td class='donnee'>".$tab1[$i]['Email']."</td>
                    <td class='donnee'>".$tab1[$i]['Cadre']."</td>
                    <td class='donnee'>".$tab1[$i]['Grade']."</td>
                    <td class='donnee'>".$tab1[$i]['Date_N']."</td>
                    <td class='donnee'>".$tab1[$i]['Date_A_A']."</td>
                    <td class='donnee'>".$tab1[$i]['Date_R']."</td>
                    <td class='donnee'>".$tab1[$i]['Date_A_G']."</td>
                    <td class='donnee'>".$tab1[$i]['Echlon']."</td>
                     <td class='donnee'>".$tab1[$i]['Indice']."</td>
                    <td class='donnee'>".$tab1[$i]['Position']."</td>
                    <td ><a   id='mod' href='modification.php?PPR={$tab1[$i]['PPR']}'>modefier</a></td><td><a   id='supp' href='suprimer.php?PPR={$tab1[$i]['PPR']}'>Suprimer</a></td></tr>
                    </div>";
                   }
                   echo"</table>"; 
               }

              
    ?>