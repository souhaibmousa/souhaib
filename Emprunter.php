

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
        emprunter_livre
        </h1>
<div class="mesfond">
    <p ><i class="fa fa-google"></i></p>
    <p><i class="fa fa-facebook"></i></p>
    <p><i class="fa fa-youtube"></i></p>
    <p><i class="fa fa-instagram"></i></p>
</div>
</div>
<p class="souhaib"> Voici les resultats:</p>
<div class="input">
<?php
//  connexion a la base de données
$bdd = new PDO('mysql:host=localhost;dbname=gestion_biblio','root','');

// Remplacez les valeurs suivantes par celles de l'emprunt
$id_du_livre = $_POST['id_livre'];
$id_de_l_adherent = $_POST['id_adherent'];

//  On Commence une transaction pour assurer la coherence des operations
$bdd->beginTransaction();

try {
    // Verifie si le livre est reserve par l'adherent
    $sql_reservation = "SELECT COUNT(*) AS nb_reservations
                       FROM reserver
                       WHERE code_isbn = :id_du_livre
                         AND id_adherent= :id_de_l_adherent";
    
    $stmt_reservation = $bdd->prepare($sql_reservation);
    $stmt_reservation->bindParam(':id_du_livre', $id_du_livre, PDO::PARAM_INT);
    $stmt_reservation->bindParam(':id_de_l_adherent', $id_de_l_adherent, PDO::PARAM_INT);
    $stmt_reservation->execute();
    $nb_reservations = $stmt_reservation->fetchColumn();

    if ($nb_reservations > 0) {
        // Effectuer l'emprunt
        $date_emprunt = date("Y-m-d");
        $date_retour_prevue = date("Y-m-d", strtotime("+30 days")); // Exemple : retour prevu dans 30 jours (1mois)
        
        $sql_emprunt = "INSERT INTO emprunter (code_isbn, id_adherent, date_emprunt, date_retour)
                        VALUES (:id_du_livre, :id_de_l_adherent, :date_emprunt, :date_retour_prevue)";
        
        $stmt_emprunt = $bdd->prepare($sql_emprunt);
        $stmt_emprunt->bindParam(':id_du_livre', $id_du_livre, PDO::PARAM_INT);
        $stmt_emprunt->bindParam(':id_de_l_adherent', $id_de_l_adherent, PDO::PARAM_INT);
        $stmt_emprunt->bindParam(':date_emprunt', $date_emprunt, PDO::PARAM_STR);
        $stmt_emprunt->bindParam(':date_retour_prevue', $date_retour_prevue, PDO::PARAM_STR);
        
        if ($stmt_emprunt->execute()) {
            // Supprime la reservation
            $sql_suppression_reservation = "DELETE FROM reserver
                                           WHERE code_isbn = :id_du_livre
                                             AND id_adherent= :id_de_l_adherent";
            
            $stmt_suppression_reservation = $bdd->prepare($sql_suppression_reservation);
            $stmt_suppression_reservation->bindParam(':id_du_livre', $id_du_livre, PDO::PARAM_INT);
            $stmt_suppression_reservation->bindParam(':id_de_l_adherent', $id_de_l_adherent, PDO::PARAM_INT);
            $stmt_suppression_reservation->execute();

            // Validez la transaction
            $bdd->commit();

            echo "Emprunt reussi! Date de retour prevue : $date_retour_prevue";
        } else {
            echo "Erreur lors de l'emprunt.";
        }
    } else {
        echo "Vous devez d'abord reserver le livre avant de pouvoir l'emprunter.";
    }
} catch (PDOException $e) {
    // En cas d'erreur, annulez la transaction
    $bdd->rollBack();
    echo "Erreur: " . $e->getMessage();
}
?>

</div>
</div>
    </form>
        
</body>
</html>