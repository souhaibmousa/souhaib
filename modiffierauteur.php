<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="library.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="inscription.css">
    <link rel="stylesheet" href="connection.css">
</head>

<body>
    <header class="header">

        <li><img src="logo11_18_175338.png" alt="link" width="180px"></li>

    </header>
    <section>
        <form action="modiffierauteur2.php" method="POST">
            
            <h1>
                Modifier_Auteur  
            </h1><br>
            <div class="input">
                <?php
                    $SERVEUR="localhost";
                    $UTILISATEUR="root";
                    $MOTDEPASSER="";
                    $BASE="gestion_biblio";
                    $connect=mysqli_connect($SERVEUR,$UTILISATEUR,$MOTDEPASSER,$BASE);
                    if(!$connect){ die("connection erreur".mysqli_connect_erro());}
                    $nom=$_POST["id_auteur"];
                    
                    $y=mysqli_query($connect,"SELECT * FROM auteur WHERE id_auteur='$nom'");
                    while($a=mysqli_fetch_array($y)){
                    echo "<table border='2'>
                    
                    
                    <tr>
                        <td>nom_auteur</td>
                        <td><input type='text' name='nom_auteur' value='$a[1]'></td>
                    </tr>
                    <tr>
                        <td>prenom_auteur</td>
                        <td><input type='text' name='prenom_auteur' value='$a[2]'></td>
                    </tr>
                    <tr>
                        <td>genre</td>
                        <td><input type='text' name='genrer' value='$a[3]'></td>
                    </tr>
                    <tr>
                        <td>adresse_auteur</td>
                        <td><input type='text' name='adresse_auteur' value='$a[4]'></td>
                    </tr>
                    <tr>
                        <td>date_naissance</td>
                        <td><input type='date' name='date_naiss_auteur' value='$a[5]'></td>
                    </tr>
                    <tr>
                        <td>email</td>
                        <td><input type='email' name='email_auteur' value='$a[6]'></td>
                    </tr>
                    <tr>
                        <td>Nationnalite</td>
                        <td><input type='text' name='nationnalite' value='$a[7]'></td>
                    </tr>
                    ";
                    
                    }
                    echo " </table>";
                ?>
            </div>
            <br>
            <div align="center">
                <table>
                    <tr>
                        <td>
                            <a href="modiffierauteur.html"><input type="button" value="Retourne" class="but"></a>
                        </td>
                        <td> </td>
                        <td>
                            <input type="submit" value="Modifier" class="but">
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </section>
</body>

</html>