<?php
$SERVER='localhost';
$utilisateur='root';
$motpasse='';
$base='gestion_biblio';
$connection=mysqli_connect('localhost','root','','gestion_biblio');
if(!$connection){die("problem de connection".mysqli_connect_erro());}
$nom=$_POST['nom'];
$pre=$_POST['prenom'];
$add=$_POST['adresse'];
$mail=$_POST['email'];
$login=$_POST['login'];
$pass=$_POST['mot_passe'];
$tell=$_POST['tel'];
$date=$_POST['date_naiss'];
$id_admi=$_POST['num_admin'];
$id_biblio=$_POST['id_biblio'];
$A=("INSERT INTO adherent(nom_adherent,prenom,adresse,email,login_adherent,mot_de_passe,telephone,date_naiss,id_admin,id_biblio)
VALUES('$nom','$pre','$add','$mail','$login','$pass','$tell','$date','$id_admi','$id_biblio')");
if(mysqli_query($connection,$A)){
   echo "enregistrement reussie";
   header("location:Adherent_affiche.php");
}
else{
    echo "erreur";
}
