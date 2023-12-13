
<?php
$serveur="localhost";
$utilisateur="root";
$motdepass="";
$base="gestion_biblio";

$sum=mysqli_connect($serveur,$utilisateur,$motdepass,$base);
$dd=$_POST['dd'];
    $pp=$_POST['nom'];
    $nomprenom=$_POST['adre'];
    $adresse=$_POST['text'];
    $Num=$_POST['log'];
  

    $s="UPDATE livre SET code_isbn='$dd',categorie='$nomprenom',description='$adresse',nbr_exemplaire='$Num' WHERE titre_livre='$pp'";

    if(mysqli_query($sum,$s)){


    echo "modification reussie";
    header("location:affichelivre.php");
}
else{
    echo "modification non reussie";
}




  ?>


