<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="connection.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>connectionbiblio</title>
</head>
<body>
    <form method="post" action="connection.php">
        <h1>
            voici tout les tables
        </h1>
<div class="mesfond">
    <p ><i class="fa fa-google"></i></p>
    <p><i class="fa fa-facebook"></i></p>
    <p><i class="fa fa-youtube"></i></p>
    <p><i class="fa fa-instagram"></i></p>
</div>
<div class="input">
   
<?php
$id=mysqli_connect("localhost","root","","gestion_biblio") or die("erreur");
$h=" SELECT * FROM adherent";
$res=mysqli_query($id,$h);
echo " <center>";
echo " <table border=1
<tr>
<th width=100> id_adherent </th>
<th width=100> nom_adherent  </th>
<th width=100> prenom</th>
<th width=100> adresse </th>
<th width=100> email</th>
<th width=100> nom_utilisateur </th>
<th width=100> mot_de_passe</th>
<th width=100> telephone</th>
<th width=100> date_naiss</th>
<th width=100> id_admin</th>
<th width=100> id_biblio</th>


";
while($ligne=mysqli_fetch_row($res)){
    $id_adherent=$ligne[0];
    $nom_adherent=$ligne[1];
    $prenom=$ligne[2];
    $adresse=$ligne[3];
    $email=$ligne[4];
    $nom_utilisateur=$ligne[5];
    $mot_de_passe=$ligne[6];
    $telephone=$ligne[7];
    $date_naiss=$ligne[8];
    $id_admin=$ligne[9];
    $id_biblio=$ligne[10];
    echo"
    <tr>
    <td> $id_adherent</td>
    <td> $nom_adherent</td>
    <td> $prenom</td>
    <td> $adresse</td>
    <td> $email</td>
    <td> $nom_utilisateur</td>
    <td> $mot_de_passe</td>
    <td> $telephone</td>
    <td> $date_naiss</td>
    <td> $id_admin</td>
    <td> $id_biblio</td>
        
    ";
   
}
echo " </table>";
?>
</div>
<div align="center">
<a href="menu_adherent.html" class="but">reviens</a></div>

    </form>
    
</body>
</html>





























































