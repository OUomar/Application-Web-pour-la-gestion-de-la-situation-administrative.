<?php
 try{
    $pdo=new PDO("mysql:host=localhost;dbname=base_de_donnee","root","");
}catch(PDOException $m){
    echo $m->getMessage();
}
$N= $_POST['N°'];
$PPR=$_POST['PPR'] ;
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$cadre=$_POST['Cadre'];
$grade =$_POST['Grade'];
$d1=$_POST['D1'];
$d2=$_POST['D2'];
$d3=$_POST['D3'];
$d4=$_POST['D4'];
$A1=$_POST['Echlon'];
$A2=$_POST['Indice'];
$A3=$_POST['Position'];
$email=$_POST['Email'];
$CIN=$_POST['CIN'];

if(isset($_POST['ajou1'])){
    $ins = $pdo->prepare("insert into ensiengant(N°,PPR,CIN,Nom,Prenom,Email,Cadre,Grade,Date_N,Date_A_A,Date_R,Date_A_G,Echlon,Indice,Position) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $ins->execute(array( "$N ", " $PPR  ","$CIN", " $nom ",  "$prenom","$email", "$cadre " ," $grade ","$d1" , "$d2",  "$d3","$d4","$A1"," $A2 ","  $A3"));
  
}
else if(isset($_POST['ajouter'])){
    $ins = $pdo->prepare("insert into administratif(N°,PPR,CIN,Nom,Prenom,Email,Cadre,Grade,Date_N,Date_A_A,Date_R,Date_A_G,Echlon,Indice,Position) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $ins->execute(array( "$N ", " $PPR  ","$CIN", " $nom ",  "$prenom","$email", "$cadre " ," $grade ","$d1" , "$d2",  "$d3","$d4","$A1"," $A2 ","  $A3"));}
?>