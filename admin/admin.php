

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- En-tête de la page-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="STYLE.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Espace Admin</title>
</head>

<body>

    <main>
        <section class="connexion">
            <div class="image">
                <img src="image\imgConnexion.jpg" alt="connexion">
            </div>

            <div class="admin">
            
                <h2>Espace admin</h2>
                <ul>
                  
                    <li>
                    <button class="btn btn-primary"><a class="ligne" href="listeutlisateur.php">Liste des utilisateur</a></button>
                    </li>
                    <li>
                       <button class="btn btn-primary"><a class="ligne" href="jouterUtilisateur.php">Ajouter un utlisateur</a></button>
                    </li>
                  
                    <li>
                    <button class="btn btn-primary"> <a   class="ligne" href="imprimer.html">Imprimer les atestations</a></button>
                    </li>
                </ul>
            <a href="#">Se déconnecter</a>
            </div>
            
        </section>
    </main>
</body>

</html>
