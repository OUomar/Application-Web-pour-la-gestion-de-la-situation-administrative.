
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Admin</title>

    <link rel="stylesheet" type="text/css" href="STYLE.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>

<body><div id="contenu">
    <center><h1> Ajouer un utlisateur </h1></center>
<form id="ajouter" action="ajouter.php" method="POST">
    <table  >
        <tr><td class="A">N°</td><td class="A"><input  type="text"name="N°"  Required></td></tr>
       <tr><td class="A">PPR</td><td class="A"><input   type="text"name="PPR"Required ></td></tr>
        <tr><td class="A">CIN</td><td  class="A"><input   type="text"name="CIN" Required ></td></tr>
        <tr><td class="A">Nom</td><td class="A"><input   type="text"name="nom" Required ></td></tr>
        <tr><td class="A">Prenom</td><td class="A"><input    type="text" name="prenom" Required ></td></tr>
        <tr><td class="A">Email</td><td class="A"><input    type="text" name="Email" Required ></td></tr>
        <tr><td class="A">Cadre</td><td class="A"><input     type="text" name="Cadre" Required ></td></tr>
        <tr><td class="A">Grade</td><td class="A"><input    type="text" name="Grade"Required ></td></tr>
        <tr><td class="A">Date de naissance</td><th class="A"><input    type="date"name="D1" Required ></th></tr>
        <tr><td class="A">Date d'ancienneté administrative</td><td class="A"><input   type="date"name="D2" Required ></td></tr>
        <tr><td class="A">Date de recrutement</td><th class="A"><input    type="date"name="D3" Required ></th></tr>
        <tr><td class="A">Date d'ancienneté grade</td><td class="A"><input type="date"name="D4" Required></td></tr>
        <tr><td class="A">Echlon</td><td class="A"><input  type="text"name="Echlon" Required></td></tr>
        <tr><td class="A">Indice</td><td class="A" ><input  type="text"name="Indice" Required ></td></tr>
        <tr><td class="A">Position</td><td class="A"><input    type="text"name="Position"Required></td></tr>
</table>
<input type="submit"  class="btn btn-primary" value="ajouter ensiengant " name="ajou1">
<input type="submit" class="btn btn-primary" value="ajouter administratif " name="ajouter">
 </form></div>
</body>

</html>
