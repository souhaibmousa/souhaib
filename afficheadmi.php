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
    <form>
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
$h=" SELECT * FROM administrateur";
$res=mysqli_query($id,$h);
echo " <center>";
echo " <table border=1
<tr>
<th width=100> id_admi</th>
<th width=100> nom_admin </th>
<th width=100> prenom</th>
<th width=100> adresse </th>
<th width=100> email</th>
<th width=100> utilisateur_admin</th>
<th width=100> mot_de_passe</th>
<th width=100> telephone</th>
<th width=100> id_biblio</th>

";
while($ligne=mysqli_fetch_row($res)){
    $id_admin=$ligne[0];
    $nom_admin=$ligne[1];
    $prenom=$ligne[2];
    $adresse=$ligne[3];
    $email=$ligne[4];
    $login_admin=$ligne[5];
    $mot_de_passe=$ligne[6];
    $telephone=$ligne[7];
    $id_biblio=$ligne[8];
    echo"
    <tr>
    <td> $id_admin</td>
    <td> $nom_admin</td>
    <td> $prenom</td>
    <td> $adresse</td>
    <td> $email</td>
    <td> $login_admin</td>
    <td>  $mot_de_passe</td>
    <td>  $telephone</td>
    <td>  $id_biblio</td>
    
   
    ";
   
}
echo " </table>";
?>
</div>
<div align="center">
<a href="menugeneraleadmi.html" class="but">reviens</a></div>

    </form>
    
</body>
</html>

