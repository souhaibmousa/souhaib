<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inscription.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>connectionbiblio</title>
</head>
<body>
<form method="post" action="Modifieadmin.php">
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
$A=("SELECT * FROM administrateur WHERE id_admin='$lod'");
if($result=(mysqli_query($connection,$A)))
{




while ($ligne=mysqli_fetch_row($result)){
?>

    <tr>
        <th>
            id_admin
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
       nom_admin
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
            prenom
        </th>
        <td>
        <?php
echo "
<input type = 'text' name ='pre' value = '$ligne[2]'>
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

<input type = 'text' name ='adres' value = '$ligne[3]'>

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
<input type = 'text' name ='ee' value = '$ligne[4]'>
";
?>
<tr>
<th>
login_admin
</th>
<td>
<?php
echo "

<input type = 'text' name ='log' value = '$ligne[5]'>

";

?>
<tr>
<th>
mot_de_passe
</th>
<td>
<?php
echo "

<input type = 'password' name ='password' value = '$ligne[6]'>

";
?>
<tr>
<th>
telephone
</th>
<td>
<?php
echo "

<input type = 'tel' name ='tt' value = '$ligne[7]'>

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
<th>

<input type="submit" value='modifier' class="but">
    <input type='reset' value='annuler' class="but">
   
</th>

</tr>


</table>




</div>
<div align="center">
<a href="menugeneraleadmi.html" class="but">reviens</a></div>

    </form>
    
</body>
</html>
