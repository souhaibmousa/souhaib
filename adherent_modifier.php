<?php 
$SERVER='localhost';
$utilisateur='root';
$motpasse='';
$base='gestion_biblio';
$connection=mysqli_connect('localhost','root','','gestion_biblio');
if(!$connection){die("problem de connection".mysqli_connect_erro());}
$nom=$_POST['nom_adherent'];
$pre=$_POST['prenom'];
$adresse=$_POST['adresse'];
$mail=$_POST['email'];
$login=$_POST['login_adherent'];
$passwd=$_POST['mot_de_passe'];
$tel=$_POST['telephone'];
$date=$_POST['date_naiss'];


$A=("UPDATE adherent SET nom_adherent='$nom', prenom ='$pre', adresse='$adresse',email='$mail',
mot_de_passe='$passwd',  telephone='$tel',date_naiss='$date' WHERE login_adherent='$login'");
if(mysqli_query($connection,$A)){
    echo "modification reussie";
    header("location:Adherent_affiche.php");
}
else{
    echo "modification non reussie";
}
