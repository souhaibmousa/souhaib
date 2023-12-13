

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
<?php

$bdd = new PDO('mysql:host=localhost;dbname=gestion_biblio', 'root', '');


$id_emprunt = $_POST['id_emprunt'];


$sql_recherche_emprunt = "SELECT *
                          FROM emprunter
                          WHERE id_emprunt = :id_emprunt";

$stmt_recherche_emprunt = $bdd->prepare($sql_recherche_emprunt);
$stmt_recherche_emprunt->bindParam(':id_emprunt', $id_emprunt, PDO::PARAM_INT);
$stmt_recherche_emprunt->execute();
$emprunt = $stmt_recherche_emprunt->fetch(PDO::FETCH_ASSOC);


if ($emprunt) {
    
    echo "ID Emprunt : " . $emprunt['id_emprunt'] . "<br>";
    echo "ID Livre : " . $emprunt['code_isbn'] . "<br>";
    echo "ID Adhérent : " . $emprunt['id_adherent'] . "<br>";
    echo "Date Emprunt : " . $emprunt['date_emprunt'] . "<br>";
    echo "Date Retour Prévue : " . $emprunt['date_retour'] . "<br>";
    
} else {
    echo "Aucun emprunt trouvé avec l'ID spécifié.";
}
?>

 

</div>
<div align="center">
<a href="menu_emprnter.html"><input type="button" value="reviens" class="but"></a>
        
         
</div>
    </form>
        
</body>
</html>
