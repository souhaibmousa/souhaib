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
<form action='adherent_modifier.php' method='post'>
<table border=1>
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
if(!$connection){die("problem de connection".mysqli_connect_erro());}
$lod=$_POST['login'];
$A=("SELECT * FROM adherent WHERE login_adherent='$lod'");
$result=(mysqli_query($connection,$A));
while ($ligne=mysqli_fetch_row($result)){
?>

    <tr>
        <th>
            id_adherent
        </th>
        <td>
<?php
echo"
<input type='number' name='num' value='$ligne[0]'>";
?>

        </td>
    </tr>
    <tr>

    <th>
       nom
    </th>
    <td>
<?php
echo "
<input type = 'text' name ='nom_adherent' value = '$ligne[1]'>
";

?>
    </td>
    </tr>
    <tr>
        <th>
        prenom:
        </th>
        <td>
        <?php
echo "
<input type = 'text' name ='prenom' value = '$ligne[2]'>
";

?>
        </td>
    </tr>
    <tr>
        <th>
            adresse
        </th>
        <td>
        <?php
echo "
<input type = 'text' name ='adresse' value = '$ligne[3]'>
";

?>
    
        </td>
    </tr>
    <tr>
        <th>
email
        </th>
        <td>
        <?php
echo "
<input type = 'text' name ='email' value = '$ligne[4]'>
";

?>
        </td>
    </tr>
    <tr>
        <th>
    nom_utilisateur
        </th>
        <td>
        <?php
echo "
<input type = 'text' name ='login_adherent' value = '$ligne[5]'>
";

?>
        </td>
    </tr>
    <tr>
        <th>
mot_de_passe:
        </th>
        <td>
        <?php
echo "
<input type = 'passwd' name ='mot_de_passe' value = '$ligne[6]'>
";

?>
        </td>
    </tr>
    <tr>
        <th>
telephone
        </th>
        <td>
        <?php
echo "
<input type = 'tel' name ='telephone' value = '$ligne[7]'>
";
?>
</td>
</tr>
<tr>
        <th>
date_naissance
        </th>
        <td>
        <?php
echo "
<input type = 'date' name ='date_naiss' value = '$ligne[8]'>
";



} /* on ferme ici le boucle whlile*/
?>
        </td>
    </tr>
    <tr>
<td>
    <input type='reset' value='annuler'>
    <input type="submit" value='modifier'>
</td>
    </tr>

</table>




</div>
<div align="center">
<a href="menu_adherent.html" class="but">reviens</a></div>

    </form>
    
</body>
</html>












































































