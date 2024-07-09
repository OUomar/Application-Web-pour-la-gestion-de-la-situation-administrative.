<head>
    <title>Ma situation administratif</title>
</head>
<?php


include('connexionBD.php');
include('MENU_user.php');
include('profilchanger.php');

    $PPR=$_SESSION['PPR'];
    $PWD= $_SESSION['pwd'];
    
            $sel_E=$pdo->prepare("SELECT * from ensiengant where PPR = ? and Mot_de_passe = ?");
            $sel_E->execute(array($PPR,MD5($PWD)));
            $tab1= $sel_E->fetch(); 
            $sel_A=$pdo->prepare("SELECT * from administratif where PPR = ? and Mot_de_passe = ?");
            $sel_A->execute(array($PPR,md5($PWD)));
            $tab2= $sel_A->fetch(); 
            if($tab1){
                
                $_SESSION['image']=$tab1['image'];
                $_SESSION['Prenom']=$tab1['Prenom'];
                $_SESSION['Nom']=$tab1['Nom'];
                $_SESSION['date_N']=$tab1['Date_N'];
                $_SESSION['Email']=$tab1['Email'];
                $_SESSION['image']=$tab1['image'];
                
                echo"
                <div class='table_information' >
                <table >
                <tr><td colspan=2 class='titre'>Ma situation administrative</td><td> </td></tr>
                <tr><td class='infos'> Nom : </td><td class='donnee'>".$tab1['Nom']."</td></tr>
                <tr><td class='infos'> Prenom : </td><td class='donnee'>".$tab1['Prenom']."</td></tr>
                <tr><td class='infos'> Cadre : </td><td class='donnee'>".$tab1['Cadre']."</td></tr>
                <tr><td class='infos'> Grade : </td><td class='donnee'>".$tab1['Grade']."</td></tr>
                <tr><td class='infos'> Date de naissance : </td><td class='donnee'>".$tab1['Date_N']."</td></tr>
                <tr><td class='infos'> Date d'ancienneté administrative : </td><td class='donnee'>".$tab1['Date_A_A']."</td></tr>
                <tr><td class='infos'> Date de recrutement : </td><td class='donnee'>".$tab1['Date_R']."</td></tr>
                <tr><td class='infos'> Date d'ancienneté grade : </td><td class='donnee'>".$tab1['Date_A_G']."</td></tr>
                <tr><td class='infos'> Echlon : </td><td class='donnee'>".$tab1['Echlon']."</td></tr>
                <tr><td class='infos'> Indice : </td><td class='donnee'>".$tab1['Indice']."</td></tr>
                <tr><td class='infos'> Position : </td><td class='donnee'>".$tab1['Position']."</td></tr>
                </table>
                </div>";
              
            }else if($tab2){
                
                    $_SESSION['Prenom']=$tab2['Prenom'];
                    $_SESSION['Nom']=$tab2['Nom'];
                    $_SESSION['date_N']=$tab2['Date_N'];
                    $_SESSION['Email']=$tab2['Email'];
               
                    echo"
                    <div class='table_information'>
                    <table >
                    <tr><td colspan=2 class='titre'>Ma situation administrative</td><td> </td></tr>
                    <tr><td class='infos'> Nom : </td><td class='donnee'>".$tab2['Nom']."</td></tr>
                    <tr><td class='infos'> Prenom : </td><td class='donnee'>".$tab2['Prenom']."</td></tr>
                    <tr><td class='infos'> Cadre : </td><td class='donnee'>".$tab2['Cadre']."</td></tr>
                    <tr><td class='infos'> Grade : </td><td class='donnee'>".$tab2['Grade']."</td></tr>
                    <tr><td class='infos'> Date de naissance : </td><td class='donnee'>".$tab2['Date_N']."</td></tr>
                    <tr><td class='infos'> Date d'ancienneté administrative : </td><td class='donnee'>".$tab2['Date_A_A']."</td></tr>
                    <tr><td class='infos'> Date de recrutement : </td><td class='donnee'>".$tab2['Date_R']."</td></tr>
                    <tr><td class='infos'> Date d'ancienneté grade : </td><td class='donnee'>".$tab2['Date_A_G']."</td></tr>
                    <tr><td class='infos'> Echlon : </td><td class='donnee'>".$tab2['Echlon']."</td></tr>
                    <tr><td class='infos'> Indice : </td><td class='donnee'>".$tab2['Indice']."</td></tr>
                    <tr><td class='infos'> Position : </td><td class='donnee'>".$tab2['Position']."</td></tr>
                    </table>
                    </div>";
            }
               

?>
?>