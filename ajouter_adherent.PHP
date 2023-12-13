
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
    <form method="POST" action="ajouteradherent.php">
        <h1>
        FORMULAIRE adherent
        </h1>
<div class="mesfond">
    <p ><i class="fa fa-google"></i></p>
    <p><i class="fa fa-facebook"></i></p>
    <p><i class="fa fa-youtube"></i></p>
    <p><i class="fa fa-instagram"></i></p>
</div>
</div>
<p class="souhaib"></p>
<div class="input">
    <div class="input">
        
<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
</head>
<body>


    <form >
        <center>
            <table border="0" cellspacing="0">
            
    
<tr>
    <td>nom adherent :</td>
    <td width="70%"><input type="text" name="nom" size="70"></td>
</tr>

<tr>
    <td>prenom adherent :</td>
    <td width="70%"><input type="text" name="prenom" size="70"></td>
</tr>

<tr>
    <td>address</td>
    <td width="100%">
        <input type="text" name="adresse" size="70">
    </td>
</tr>

<tr>
    <td>email</td>
    <td width="70%">  <input type="text" name="email" size="70"></td>
</tr>



<tr>
    <td>nom_utilisateur</td>
    <td width="100%">
        <input type="text" name="login" size="70">
    </td>
</tr>




<tr>
    <td>
        mot_de_passe:
    </td>
    <td width="70%">
        <input type="password"name="mot_passe" size="70">
    </td>
</tr>

<tr>
    <td>
        Telephone:
    </td>
    <td>
        <input type="tel" name="tel">
    </td>
</tr>
<tr>
    <td>
        date_naissance
    </td>
    <td>
        <input type="date" name="date_naiss">
    </td>
</tr>

<tr>
    <td>
        num_admin:
    </td>
    <td>
        <select name="num_admin">
            
            <?php
            $SERVER='localhost';
            $utilisateur='root';
            $motpasse='';
            $base='gestion_biblio';
            $connection=mysqli_connect('localhost','root','','gestion_biblio');
            if(!$connection){die("problem de connection".mysqli_connect_erro());}
            $n=mysqli_query($connection,"SELECT * FROM administrateur");
            while($col=mysqli_fetch_row($n)){ 
                echo "<option value= '$col[0]'>$col[1] </option>";
        }
            ?>

        </select>
    </td>
</tr>
<tr>
    <td>
        id_biblio:
    </td>
    <td>
        <select name="id_biblio">
            
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



<tr>
    
    <td colspan="2" align="center"><input type="submit" name="envoyer" value="Ajouter" class="but">
    <input type="reset" name="reset" value="anuler" class="but"></td>
</tr>


            </table>
        </center>
 




       
   
</div>
</div>
    </form>
        
</body>
</html>
































































































































