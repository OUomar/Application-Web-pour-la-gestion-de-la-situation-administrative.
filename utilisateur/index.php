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
    <title>Situation administrative</title>
</head>
<body >
    <div >
    <form  id="interface1" action="s'inscrire.php" method="post">
        <div id="erreur">
        <?php 
       
        session_start();

        
        if(isset ($_SESSION['vide'])){
            echo"<center><strong style='color:red;'>". $_SESSION['vide']."</strong></center>";
        session_destroy();
        }else if (isset ($_SESSION['valide'])){
           echo"<center><strong style='color:red';>". $_SESSION['valide']."</strong></center>";
            session_destroy();
        }else if (isset ($_SESSION['teste'])){
            echo"<center><strong style='color:red';>". $_SESSION['teste']."</strong></center>";
             session_destroy();
        }
         ?>
         </div>
        <div><img  id="imgfste" src="les images\fste.PNG"></div>
        <div id="page_principale1">
        <table width="300px">
            <tr>
                <td>Matricule(PPR)</td>
            </tr>
            <tr class="input-icone">
                <td colspan="2" ><input type="text" name="PPR" placeholder="PPR" class="entrer" ><td><i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i></td></td>
            </tr>
            <tr>
                <td colspan="2">Mot de passe</td>
            </tr>
            <tr class="input-icone">
                <td colspan="2"><input type="password" name="pwd" placeholder="Mot de passe" class="entrer" ><td><i class="ace-icon fa fa-lock"></i></td></td>        
            </tr>
            </table>
            <table width="330px">
            <tr>
                <td><input type="submit"  value="Connexion"  class="btn btn-primary btn-lg m-2"  name="Connexion"></td>
                <td><input type="submit" value="S’inscrire"   name="inscrire"     class="btn btn-primary btn-lg m-2" ></td>
            </tr>
            </table>
        
        </div>
       <a href="pwdoblier.php" >Mot de passe oublier?</a>
   
    </form>
</div>

</body>
</html>