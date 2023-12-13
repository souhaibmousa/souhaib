
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="inscription.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Document</title>
</head>
<body>
    <form>
        <h1>
            resultat
        </h1>
<div class="mesfond">
    <p ><i class="fa fa-google"></i></p>
    <p><i class="fa fa-facebook"></i></p>
    <p><i class="fa fa-youtube"></i></p>
    <p><i class="fa fa-instagram"></i></p>
</div>
</div>

<div class="input">
    <div class="input">
    <?php

$bdd = new PDO('mysql:host=localhost;dbname=gestion_biblio', 'root', '');

$sql_emprunts = "SELECT * FROM emprunter";
$stmt_emprunts = $bdd->query($sql_emprunts);
$emprunts = $stmt_emprunts->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Emprunts</title>
</head>
<body>
    <h2>Liste des Emprunts</h2>
    <table border="1">
        <tr>
            <th>ID Emprunt</th>
            <th>ID Livre</th>
            <th>ID Adhérent</th>
            <th>Date Emprunt</th>
            <th>Date Retour Prévue</th>
           
        </tr>

        <?php foreach ($emprunts as $emprunt): ?>
            <tr>
                <td><?= $emprunt['id_emprunt'] ?></td> 
                <td><?= $emprunt['code_isbn'] ?></td>
                <td><?= $emprunt['id_adherent'] ?></td>
                <td><?= $emprunt['date_emprunt'] ?></td>
                <td><?= $emprunt['date_retour'] ?></td>
             
            </tr>
        <?php endforeach; ?>

    
    </table>
    
    <a href="menu_emprnter.html"><input type="button" value="reviens" class="but"></a>
 
</form>
</body>
</html> 


</div>

<div align="center">
</div>
    </form>
        
</body>
</html>