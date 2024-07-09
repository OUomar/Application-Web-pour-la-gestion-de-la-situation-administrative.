  <?php
  try{
    $pdo=new PDO("mysql:host=localhost;dbname=base_de_donnee","root","");
}catch(PDOException $m){
    echo $m->getMessage();
}
$grade=$_POST['Grade'];
$cader=$_POST['Cadre'];
$D2=$_POST['D2'];
$D3=$_POST['D3'];
$D4=$_POST['D4'];
$Echlon=$_POST['Echlon'];
$Indice=$_POST['Indice'];
$Position=$_POST['Position'];
$PPR= $_POST['PPR'];
$sel=$pdo->prepare("SELECT PPR from ensiengant where PPR=$PPR");
$sel->execute();
  $tab1= $sel->fetch();
  $sel1=$pdo->prepare("SELECT PPR from administratif where PPR=$PPR");
  $sel1->execute();
  $tab= $sel1->fetch();

if(isset($_POST['Modifier'])){
  if($tab1){
 $ins = $pdo->prepare("UPDATE ensiengant SET  Cadre='$cader',Grade='$grade',Date_A_A='$D2',Date_R='$D3',Date_A_G='$D4' ,Echlon ='$Echlon' ,Position='$Position',Indice='$Indice' WHERE PPR= '$PPR'");
 $ins->execute();}
 else if($tab){
  $ins = $pdo->prepare("UPDATE administratif SET  Cadre=' $cader',Grade=' $grade',Date_A_A='$D2',Date_R='$D3',Date_A_G='$D4' ,Echlon ='$Echlon' ,Position='$Position',Indice='$Indice' WHERE PPR= '$PPR'");
 $ins->execute();
 }
}
?>