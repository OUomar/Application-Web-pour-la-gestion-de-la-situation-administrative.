

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- En-tête de la page-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <title>Espace Admin</title>
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
    
<div class="background">
<div class="shape"></div>
<div  class="shape"></div>
</div>
            <form action="liste.php" method="POST">
                <table id="table_liste">
                    <tr>
                    <td><input type="submit" value = "liste des administratif" name="admf" class="button"></td>  
                    </tr>
                    <tr>
                    
                        <td><input type="submit"  name="ensg" value = "listes des ensiengants" class="button"></td>
                    </tr>
                </table>
            </form>

    
</body>

</html>

