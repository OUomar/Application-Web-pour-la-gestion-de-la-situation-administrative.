<?php
include('MENU_user.php');
?>

    <section id="inter_contact">
      
      <title>Contact</title>
          <form  method="post" action="">
            <div>
              <label class="Cinfos">Nom</label><br>
              <input type="text" placeholder="Saisir votre Nom"  name="nom" class="input_infos" size=67 required>
            </div>
            <div>
              <label class="Cinfos">Email</label>
              <input type="email" placeholder="Saisir votre Email address"  name="Email" class="input_infos" required>
            </div>
            <div>
              <label class="Cinfos">Sujet</label><br>
              <input type="text" placeholder="Saisir le sujet"  name="sujet" class="input_infos" required>
            </div>
            <div>
              <label class="Cinfos">Message</label>
              <textarea placeholder="Saisir votre message" rows="4" cols="50" name="message" class="input_infos" required></textarea>
            </div>
            <div class="btn_contact">
              <input type="submit" value="Envoyer"  class="input_infos">
            </div>
           
      </div>
    </section>
  </body>
</html>
<?php
if(isset($_POST["message"])){
$retour = mail("omar.khalid0201@gmail.com",$_POST["sujet"],$_POST["message"],$_POST["Email"]);
if($retour)
  echo"<script> alert('email a bien envoyé')</script>";
  else echo"erreur";
}
?>