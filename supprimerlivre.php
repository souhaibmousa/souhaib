<?php

$serveur="localhost";
$utilisateur="root";
$motdepass="";
$base="gestion_biblio";

$sum=mysqli_connect($serveur,$utilisateur,$motdepass,$base);

$n=$_POST["nom"];

$delect=(" DELETE  FROM livre WHERE titre_livre='$n'");
$t=mysqli_query($sum,$delect);
if ($t==TRUE) {
        echo "modification reussie";
        header("location:Adherent_affiche.php");
    }
    else{
        echo "modification non reussie";
    }
    
?>

  
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
            Vous avez bien supprimer 
        </h1>
<div class="mesfond">
    <p ><i class="fa fa-google"></i></p>
    <p><i class="fa fa-facebook"></i></p>
    <p><i class="fa fa-youtube"></i></p>
    <p><i class="fa fa-instagram"></i></p>
</div>
<div align="center">
    <a href="menugeneralelivre.html" class="but">reviens</a>
</div>

    </form>
    
</body>
</html>
