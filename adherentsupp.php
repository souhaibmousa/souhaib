
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
$SERVER='localhost';
$utilisateur='root';
$motpasse='';
$base='gestion_biblio';
$connection=mysqli_connect('localhost','root','','gestion_biblio');
if(!$connection){die("probleme de connection".mysqli_connect_erro());}
$num=$_POST['id_adherent'];
$A=("DELETE FROM adherent WHERE id_adherent='$num'");
if(mysqli_query($connection,$A)){
    echo "la suppression est reussie";
    header("location:Adherent_affiche.php");
}
else{
    echo "la suppression est echoue";
}
?>   

</div>
<div align="center">
<a href="menu_adherent.html" class="but">reviens</a></div>

    </form>
    
</body>
</html>






















