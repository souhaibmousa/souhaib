
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
// on fait d'abord déjà une connexion à la base de données

$bdd = new PDO('mysql:host=localhost;dbname=gestion_biblio', 'root', '');

// On remplace la valeur suivante par l'id de réservation que vous souhaitez rechercher
$id_reservation = $_POST['id_reservation'];

// Recherche de la réservation par son id
$sql_recherche_reservation = "SELECT *
                              FROM reserver
                              WHERE id_reservation = :id_reservation";

$stmt_recherche_reservation = $bdd->prepare($sql_recherche_reservation);
$stmt_recherche_reservation->bindParam(':id_reservation', $id_reservation, PDO::PARAM_INT);
$stmt_recherche_reservation->execute();
$reservation = $stmt_recherche_reservation->fetch(PDO::FETCH_ASSOC);

// Vérifie si la réservation a été trouvée
if ($reservation) {
    // Afficher les détails de la réservation
    echo "ID de réservation : " . $reservation['id_reservation'] . "<br>";
    echo "Code ISBN du livre : " . $reservation['code_isbn'] . "<br>";
    echo "ID de l'adhérent : " . $reservation['id_adherent'] . "<br>";
    echo "Date de réservation : " . $reservation['date_reservation'] . "<br>";
} else {
    echo "Aucune réservation trouvée avec l'ID spécifié.";
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
