<?php
include('MENU_user.php');
?>
    <section id="inter_contact">
      <title> damander une attestation</title>
          <form  method="POST" action ="">
            <div>
              <label class="Cinfos">Nom</label><br>
              <input type="text" placeholder="Saisir votre Nom"  name="nom" class="input_infos" size=67 >
            </div>
            <div>
              <label class="Cinfos">Prenom</label>
              <input type="text" placeholder="Saisir votre Prenom"  name="Prenom" class="input_infos" >
            </div>
            <div>
              <label class="Cinfos">PPR</label>
              <input type="text" placeholder="Saisir votre Matricule(PPR)"  name="PPR" class="input_infos" >
            </div>
            <div>
              <label class="Cinfos">Email</label>
              <input type="email" placeholder="Saisir votre Email address"  name="Email" class="input_infos" required>
            </div>
            <div>
              <label class="Cinfos">Choisir l'attestation qui vous voulez </label>
              <select class="input_infos" name="attestation" >
                  <option class="Cinfos" >attestation de taravil </option>
                  <option class="Cinfos">attestation de la situation administratif </option>
                  <option class="Cinfos">attestation de quiter le trritoire </option>
              </select>
            </div>
            <div class="btn_contact">
              <input type="submit" value="Envoyer"  class="input_infos">
            </div>
           
      </div>
    </section>
  </body>
</html>
<?php
if(isset($_POST["attestation"])){
$message="Bonjour j'espère que vous allez bien, mes information sont : \n Nom : ".$_POST["nom"]."\n Prènom : ".$_POST["Prenom"]."\n PPR : ".$_POST["PPR"]."\n
j'ai besoin d'une ".$_POST["attestation"]."\n et merci d'avane ";
$retour = mail("omar.khalid0201@gmail.com",$_POST["attestation"],$message,$_POST["Email"]);
if($retour)
  echo"<script> alert('email a bien envoyé')</script>";
  else echo"erreur";
}
?>