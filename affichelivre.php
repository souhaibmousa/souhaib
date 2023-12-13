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
$h=" SELECT * FROM livre";
$res=mysqli_query($id,$h);
echo " <center>";
echo " <table border=1
<tr>
<th width=100> code_isbn</th>
<th width=100> titre_livre </th>
<th width=100> categorie </th>
<th width=100> description</th>
<th width=100> nbr_exemplaire</th>
<th width=100> id_auteur</th>
";
while($ligne=mysqli_fetch_row($res)){
    $code_isbn=$ligne[0];
    $titre_livre=$ligne[1];
    $categorie=$ligne[2];
    $description=$ligne[3];
    $nbr_exemplaire=$ligne[4];
    $id_auteur=$ligne[5];
    echo"
    <tr>
    <td> $code_isbn</td>
    <td> $titre_livre</td>
    <td> $categorie</td>
    <td> $description</td>
    <td> $nbr_exemplaire</td>
    <td> $id_auteur</td>
   
    ";
   
}
echo " </table>";
?>
</div>
<div align="center">
<a href="menugeneralelivre.html" class="but">reviens</a></div>

    </form>
    
</body>
</html>



