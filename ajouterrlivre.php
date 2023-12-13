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
    <form method="post" action="ajouterlivre.php">
        <h1>
            Ajouter_livre
        </h1>
</div>
<div class="input">
    <div class="input">
        <table>
            <tr>
                <td><label>Titre_livre:</label></td>
                <td><input type="text" name="nom" placeholder="Saisir_titre"></td>
            </tr>
         
            <tr>
                <td><label>Categorie</label></td>
                <td><input type="text" name="adre" placeholder="Saisir_Categorie"></td>
            </tr>
            <tr>
                <td><label>Description</label></td>
                <td><textarea name="text" id="" cols="10" rows="10"></textarea></td>
            </tr>
            <tr>
                <td><label>nbrs_exemplaire</label></td>
                <td><input type="number" name="log" placeholder="Saisir_nbrs_exemplaire"></td>
            </tr>
            <tr>
                <td><label>id_auteur</label></td>
                <td><select name="id_auteur">
                        <?php
                        
                        $SERVER='localhost';
                        $utilisateur='root';
                        $motpasse='';
                        $base='gestion_biblio';
                        $connection=mysqli_connect('localhost','root','','gestion_biblio');
                        if(!$connection){die("problem de connection".mysqli_connect_erro());}
                        $n=mysqli_query($connection,"SELECT * FROM auteur");
                        while($col=mysqli_fetch_row($n)){ 
                            echo "<option value= '$col[0]'>$col[1] </option>";
                    }
                        ?>
            
                    </select>
                </select></td>
            </tr>

            <tr>
                <td><label>id_biblo</label></td>


                <td><select name="id_biblio">


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

                </select></td>
            </tr>

        </table>
</div><div align="center">
    <input type="submit" value="Ajouter" name="S'inscrire" class="but">
</div>
    </form>
        
</body>
</html>