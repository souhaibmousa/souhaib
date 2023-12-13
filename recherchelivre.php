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
<form action='Modifielivre.php' method='post'>
<table border=1>
        <h1>
            recherche/modifier
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
$lod=$_POST['nom'];
$A=("SELECT * FROM livre WHERE titre_livre='$lod'");
if($result=(mysqli_query($connection,$A)))
{




while ($ligne=mysqli_fetch_row($result)){
?>

    <tr>
        <th>
            code_isbn
        </th>
        <td>
<?php
echo"
<input type='number' name='dd' value='$ligne[0]'>";
?>

        </td>
    </tr>
    <tr>

    <th>
       titre_livre
    </th>
    <td>
<?php
echo "
<input type = 'text' name ='nom' value = '$ligne[1]'>
";

?>
    </td>
    </tr>
 
        </td>
    </tr>
    <tr>
        <th>
            categorie
        </th>
        <td>
        <?php
echo "
<input type = 'text' name ='adre' value = '$ligne[2]'>
";

?>
    
        </td>
    </tr>
    <tr>
        <th>
description
        </th>
        <td>
        <?php
echo "

<textarea type='text'  cols='10' rows='10' value='$ligne[3]' name='text'></textarea>

";
?>
        </td>
    </tr>
    <tr>
        <th>
    nbrs_exemplaire
        </th>
        <td>
        <?php
echo "
<input type = 'number' name ='log' value = '$ligne[4]'>
";

} /* on ferme ici le boucle whlile*/

}

else{
    echo " ce livre exite pas dans la base";
}

?>
        </td>
    </tr>
    <tr>
<td>
    <input type='reset' value='annuler'>
    <input type="submit" value='modifier'>
</td>




</table>




</div>
<div align="center">
<a href="affichelivre.html" class="but">reviens</a></div>

    </form>
    
</body>
</html>
