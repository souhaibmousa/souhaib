

    
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
    <form method="post" action="suppression_reserv.php">
        <h1>
            resultats
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
// Assurez-vous d'avoir déjà une connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=gestion_biblio', 'root', '');

// Récupérez toutes les réservations
$sql_select_reservations = "SELECT *
                             FROM reserver";

$stmt_select_reservations = $bdd->query($sql_select_reservations);
$reservations = $stmt_select_reservations->fetchAll(PDO::FETCH_ASSOC);

// Affichez les réservations
echo "<h2>Liste des Réservations</h2>";

if (count($reservations) > 0) {
    echo "<ul>";
    foreach ($reservations as $reservation) {
        echo "<li>ID Réservation: " . $reservation['id_reservation'] . " | Code ISBN: " . $reservation['code_isbn'] . " | ID Adhérent: " . $reservation['id_adherent'] . " | Date de Réservation: " . $reservation['date_reservation'] . "</li>";
    }
    echo "</ul>";
}

?>


      
</div>

<div align="center">
   <a href="menu_reservation.html"><input type="button" value="reviens" class="but"></a>
</div>
    </form>
        
</body>
</html>
</div>
    </form>
        
</body>
</html>