<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="inscription.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Document</title>
</head>
<body>
    <form method="post" action="ajouteradmi.php">
        <h1>
            Ajouter_admi
        </h1>
</div>
<div class="input">
    <div class="input">
        <table>
            <tr>
                <td><label>nom_admi:</label></td>
                <td><input type="text" name="nom" placeholder="Saisir_nom_admi"></td>
            </tr>
            <tr>
                <td><label>prenom_admi</label></td>
                <td><input type="Text" name="pre" placeholder="Saisir_prenom_admi"></td>
            </tr>
            <tr>
                <td><label>adresse_admi</label></td>
                <td><input type="text" name="adres" placeholder="Saisir_adresse_admi"></td>
            </tr>
            <tr>
                <td><label>Email_admi</label></td>
                <td><input type="email" placeholder="saisir_email" name="ee"></td>
            </tr>
            <tr>
                <td><label>nom_utlisateur_admi</label></td>
                <td><input type="text" name="log" placeholder="Saisir_nom_admi"></td>
            </tr>
            <tr>
                <td><label>Mot_de_passe_admi</label></td>
                <td><input  type="password" name="password" placeholder="password"></td>
            </tr>
            
            <tr>
                <td><label>telephone_admi</label></td>
                <td><input type="tel" placeholder="telephone_admi" name="tt"></td>
            </tr>

            <tr>
                <td>id_biblio</td>
                
                <select> <td><select name="id_biblio">
                    <?php
                    
                    $SERVER='localhost';
                    $utilisateur='root';
                    $motpasse='';
                    $base='gestion_biblio';
                    $connection=mysqli_connect('localhost','root','','gestion_biblio');
                    if(!$connection){die("problem de connection".mysqli_connect_erro());}
                    $n=mysqli_query($connection,"SELECT * FROM bibliotheque");
                    while($col=mysqli_fetch_row($n)){ 
                        echo "<option value= '$col[0]'>$col[1] </option>";
                }
                    ?>
        
                </select>
                
            </td>
            
            </tr>

        </table>
</div><div align="center">
    <input type="submit" value="Ajouter_admi" name="S'inscrire" class="but">
</div>
    </form>
        
</body>
</html>