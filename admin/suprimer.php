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
    if($ens){
    $resu=$pdo->prepare('delete  FROM ensiengant WHERE PPR=?');
    $resu->execute([$_GET['PPR']]);
    }
    else if($adm1){
    $resu=$pdo->prepare('delete  FROM administratif WHERE PPR=?');
    $resu->execute([$_GET['PPR']]);
    }
    ?>