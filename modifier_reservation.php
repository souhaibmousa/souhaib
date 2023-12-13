
    
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

$bdd = new PDO('mysql:host=localhost;dbname=gestion_biblio', 'root', '');

$id_reservation = $_POST['id_reservation'];


$new_code_isbn = $_POST['new_code_isbn'];
$new_id_adherent = $_POST['new_id_adherent'];


$sql_old_livre_id = "SELECT code_isbn
                    FROM reserver
                    WHERE id_reservation = :id_reservation";

$stmt_old_livre_id = $bdd->prepare($sql_old_livre_id);
$stmt_old_livre_id->bindParam(':id_reservation', $id_reservation, PDO::PARAM_INT);
$stmt_old_livre_id->execute();
$old_livre_id = $stmt_old_livre_id->fetchColumn();

$sql_verif_existence = "SELECT id_reservation
                       FROM reserver
                       WHERE id_reservation = :id_reservation";

$stmt_verif_existence = $bdd->prepare($sql_verif_existence);
$stmt_verif_existence->bindParam(':id_reservation', $id_reservation, PDO::PARAM_INT);
$stmt_verif_existence->execute();
$existe = $stmt_verif_existence->fetchColumn();


if ($existe) {
       
        $sql_verif_code_isbn = "SELECT COUNT(*) AS code_isbn_exists
        FROM livre
        WHERE code_isbn = :new_code_isbn";

$stmt_verif_code_isbn = $bdd->prepare($sql_verif_code_isbn);
$stmt_verif_code_isbn->bindParam(':new_code_isbn', $new_code_isbn, PDO::PARAM_STR);
$stmt_verif_code_isbn->execute();
$code_isbn_exists = $stmt_verif_code_isbn->fetchColumn();

if ($code_isbn_exists > 0) {

    $new_date_reservation = date("Y-m-d");
   
    $sql_modification_reservation = "UPDATE reserver
                                     SET code_isbn = :new_code_isbn,
                                         id_adherent = :new_id_adherent,
                                         date_reservation = :new_date_reservation
                                     WHERE id_reservation = :id_reservation";

    $stmt_modification_reservation = $bdd->prepare($sql_modification_reservation);
    $stmt_modification_reservation->bindParam(':new_code_isbn', $new_code_isbn, PDO::PARAM_STR);
    $stmt_modification_reservation->bindParam(':new_id_adherent', $new_id_adherent, PDO::PARAM_INT);
    $stmt_modification_reservation->bindParam(':new_date_reservation', $new_date_reservation, PDO::PARAM_STR);
    $stmt_modification_reservation->bindParam(':id_reservation', $id_reservation, PDO::PARAM_INT);

    if ($stmt_modification_reservation->execute()) {
   
        $sql_decrement_new_livre = "UPDATE livre SET nbr_exemplaire = nbr_exemplaire - 1 WHERE code_isbn = :new_code_isbn";
        $stmt_decrement_new_livre = $bdd->prepare($sql_decrement_new_livre);
        $stmt_decrement_new_livre->bindParam(':new_code_isbn', $new_code_isbn, PDO::PARAM_STR);
        $stmt_decrement_new_livre->execute();

        
        $sql_increment_old_livre = "UPDATE livre SET nbr_exemplaire = nbr_exemplaire + 1 WHERE code_isbn = :old_livre_id";
        $stmt_increment_old_livre = $bdd->prepare($sql_increment_old_livre);
        $stmt_increment_old_livre->bindParam(':old_livre_id', $old_livre_id, PDO::PARAM_STR);
        $stmt_increment_old_livre->execute();

        echo "La réservation a été modifiée avec succès.";
    } else {
        echo "Erreur lors de la modification de la réservation.";
    }
} else {
    echo "Erreur : Le nouveau code ISBN n'existe pas dans la base de données.";
}
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