<?php
// on fait d'abord déjà une connexion à la base de données

$bdd = new PDO('mysql:host=localhost;dbname=gestion_biblio', 'root', '');

//  On remplacez la valeur suivante par l'id de réservation que vous souhaitez supprimer
$id_reservation = $_POST['id_reservation'];

// Vérifier d'abord si la réservation existe
$sql_verif_existence = "SELECT id_reservation
                       FROM reserver
                       WHERE id_reservation = :id_reservation";

$stmt_verif_existence = $bdd->prepare($sql_verif_existence);
$stmt_verif_existence->bindParam(':id_reservation', $id_reservation, PDO::PARAM_INT);
$stmt_verif_existence->execute();
$existe = $stmt_verif_existence->fetchColumn();

if ($existe) {
    // Supprime la réservation
    $sql_suppression_reservation = "DELETE FROM reserver
                                    WHERE id_reservation = :id_reservation";

    $stmt_suppression_reservation = $bdd->prepare($sql_suppression_reservation);
    $stmt_suppression_reservation->bindParam(':id_reservation', $id_reservation, PDO::PARAM_INT);
    $stmt_suppression_reservation->execute();

    echo "La réservation a été supprimée avec succès.";
} else {
    echo "Aucune réservation trouvée avec l'ID spécifié.";
}
?>

