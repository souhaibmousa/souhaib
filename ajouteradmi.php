  
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
            vous avez bien ajouter_admin
        </h1>
<div class="mesfond">
    <p ><i class="fa fa-google"></i></p>
    <p><i class="fa fa-facebook"></i></p>
    <p><i class="fa fa-youtube"></i></p>
    <p><i class="fa fa-instagram"></i></p>
</div>
<div class="input">
   
<?php
$serveur="localhost";
$utilisateur="root";
$motdepasse="";
$base="gestion_biblio";

$data=mysqli_connect($serveur,$utilisateur,$motdepasse,$base);

$tt=$_POST['nom'];
    $Cr=$_POST['pre'];
    $nomprenom=$_POST['adres'];
    $momo=$_POST['ee'];
    $adres=$_POST['log'];
$mo=$_POST['password'];
$bb=$_POST['tt'];
$ww=$_POST['id_biblio'];
$lili=("INSERT INTO administrateur( `nom_admin`, `prenom`, `adresse`, `email`, `login_admin`, `mot_de_passe`, `telephone`,`id_biblio`) VALUES('$tt','$Cr','$nomprenom','$momo','$adres','$mo','$bb','$ww')");
if(mysqli_query($data,$lili)){
    echo "";
    header("location:afficheadmi.php");

   }
   else{
	echo" errreur";
   }

   ?>
    </form>
    
</body>
</html>
