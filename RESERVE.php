<?php
// on fait d'abord déjà une connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=gestion_biblio', 'root', '');

// Remplacez les valeurs suivantes par celles de la réservation
$id_du_livre = $_POST['id_livre'];
$id_de_l_adherent = $_POST['id_adherent'];

//  On vérifie si le livre existe
$sql_livre_exist = "SELECT COUNT(*) AS livre_exist
                    FROM livre
                    WHERE code_isbn = :id_du_livre";

$stmt_livre_exist = $bdd->prepare($sql_livre_exist);
$stmt_livre_exist->bindParam(':id_du_livre', $id_du_livre, PDO::PARAM_INT);
$stmt_livre_exist->execute();
$livre_exist = $stmt_livre_exist->fetchColumn();

//  On vérifie si l'adhérent existe
$sql_adherent_exist = "SELECT COUNT(*) AS adherent_exist
                       FROM adherent
                       WHERE id_adherent = :id_de_l_adherent";

$stmt_adherent_exist = $bdd->prepare($sql_adherent_exist);
$stmt_adherent_exist->bindParam(':id_de_l_adherent', $id_de_l_adherent, PDO::PARAM_INT);
$stmt_adherent_exist->execute();
$adherent_exist = $stmt_adherent_exist->fetchColumn();

//  On vérifie si le livre et l'adhérent existent avant de faire la réservation
if ($livre_exist > 0 && $adherent_exist > 0) {
    
    //  On effectue la réservation
    $date_reservation = date("Y-m-d");
    $sql_reservation = "INSERT INTO reserver (code_isbn, id_adherent, date_reservation)
                        VALUES (:id_du_livre, :id_de_l_adherent, :date_reservation)";
    
    $stmt_reservation = $bdd->prepare($sql_reservation);
    $stmt_reservation->bindParam(':id_du_livre', $id_du_livre, PDO::PARAM_INT);
    $stmt_reservation->bindParam(':id_de_l_adherent', $id_de_l_adherent, PDO::PARAM_INT);
    $stmt_reservation->bindParam(':date_reservation', $date_reservation, PDO::PARAM_STR);
    
    
        if ($stmt_reservation->execute()) {
            // on decremente le nombre d'exemplaires
            $sql_decrement = "UPDATE livre
                              SET nbr_exemplaire = nbr_exemplaire - 1
                              WHERE code_isbn = :id_du_livre";
            
            $stmt_decrement = $bdd->prepare($sql_decrement);
            $stmt_decrement->bindParam(':id_du_livre', $id_du_livre, PDO::PARAM_INT);
            $stmt_decrement->execute();

        echo "Reservation réussie!";
    } else {
        echo "Erreur lors de la reservation.";
    }
} else {
    echo "Le livre ou l'adhérent n'existe pas.";
}
?>

