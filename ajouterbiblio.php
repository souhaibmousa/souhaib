<?php
$SERVER='localhost';
$utilisateur='root';
$motpasse='';
$base='gestion_biblio';
$connection=mysqli_connect('localhost','root','','gestion_bibliotheque');
if(!$connection){die("problem de connection".mysqli_connect_erro());}
$numero=$_POST['num'];
$nom=$_POST['nom'];
$local=$_POST['adresse'];
$mail=$_POST['email'];


$A=("INSERT INTO enseignant(id_biblio, nom_biblio,adresse_biblio,email_bibliotheque) VALUES('$numero','$nom','$local','$mail')");
if(mysqli_query($connection,$A)){
    echo "enregistrement reussie";
}
else{
    echo "enregistrement echoue";
}
?>
