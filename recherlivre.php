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
        <form>
            <div class="mesfond">
                <p><i class="fa fa-google"></i></p>
                <p><i class="fa fa-facebook"></i></p>
                <p><i class="fa fa-youtube"></i></p>
                <p><i class="fa fa-instagram"></i></p>
            </div>
            <h1>
                 Recherche_livre 
            </h1><br>
            <div class="input">
                <?php
                    $SERVEUR="localhost";
                    $UTILISATEUR="root";
                    $MOTDEPASSER="";
                    $BASE="gestion_biblio";
                    $connect=mysqli_connect($SERVEUR,$UTILISATEUR,$MOTDEPASSER,$BASE);
                    if(!$connect){ die("connection erreur".mysqli_connect_erro());}
                    $nom=$_POST["nom"];
                    
                    $sum=mysqli_query($connect,"SELECT * FROM livre WHERE titre_livre='$nom'");
                    echo "<table border='2'>
                    <tr>
                        <td>code_isbn</td>
                        <td>titre_livre</td>
                        <td>categorie</td>
                        <td>description</td>
                        <td>nbr_exemplaire</td>
                        <td>id_auteur</td>
                        <td>id_biblio</td>
                    </tr>";
                    while($a=mysqli_fetch_array($sum)){
                        $id=$a["code_isbn"];
                        $n=$a["titre_livre"];
                        $pn=$a["categorie"];
                        $g=$a["description"];
                        $ad=$a["nbr_exemplaire"];
                        $dn=$a["id_auteur"];
                        $e=$a["id_biblio"];
                    
                        echo "
                            <tr>
                                <td>$id</td>
                                <td>$n</td>
                                <td>$pn</td>
                                <td>$g</td>
                                <td>$ad</td>
                                <td>$dn</td>
                                
                <td>$e</td>
                            
                            </tr> 
                        ";
                    }
                    echo " </table>";
                ?>
            </div>
            <br>
            <div align="center">
                <a href="connectionutilisateur.html" class="but">Retourne</a>
            </div>
        </form>
    </section>
</body>

</html>