<?php
$serveur="localhost";
$utilisateur="root";
$motdepasse="";
$base="gestion_biblio";

$data=mysqli_connect($serveur,$utilisateur,$motdepasse,$base);

$tt=$_POST['nom'];
    $nomprenom=$_POST['adre'];
    $momo=$_POST['text'];
    $adres=$_POST['log'];
    $date=$_POST['id_auteur'];
   
$lili=("INSERT INTO livre ( titre_livre,categorie, description, nbr_exemplaire, id_auteur) VALUES('$tt','$nomprenom','$momo','$adres','$date')");
if(mysqli_query($data,$lili)){
    echo "";
    header("location:affichelivre.php");
   }
   else{
	echo"erreur";
   }


   ?>
  