<?php
try{
    $pdo=new PDO("mysql:host=localhost;dbname=base_de_donnee","root","");
}catch(PDOException $m){
    echo $m->getMessage();
}
?>