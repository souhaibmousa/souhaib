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
                Tout Auteur!
            </h1><br>
            <div class="input">
                <?php
                    $SERVEUR="localhost";
                    $UTILISATEUR="root";
                    $MOTDEPASSER="";
                    $BASE="gestion_biblio";
                    $connect=mysqli_connect($SERVEUR,$UTILISATEUR,$MOTDEPASSER,$BASE);
                    
                    $m=("SELECT * FROM auteur ");
                    $b=mysqli_query($connect,$m);
                    echo "<table border='2'>
                    <tr>
                        <td>id_auteur</td>
                        <td>nom_auteur</td>
                        <td>prenom_auteur</td>
                        <td>adresse_auteur</td>
                        <td>date_naissance</td>
                        <td>genrer</td>
                        <td>email</td>
                        <td>Nationnalite</td>
                    </tr>";
                    while($a=mysqli_fetch_array($b)){
                        $id=$a["id_auteur"];
                        $n=$a["nom_auteur"];
                        $pn=$a["prenom_auteur"];
                        $ad=$a["adresse"];
                        $dn=$a["date_naiss"];
                        $e=$a["email"];
                        $g=$a["genre"];
                        $na=$a["nationnalite"];
                        echo "
                            <tr>
                                <td>$id</td>
                                <td>$n</td>
                                <td>$pn</td>
                                <td>$ad</td>
                                <td>$dn</td>
                                <td>$g</td>
                                <td>$e</td>
                                <td>$na</td>
                            </tr> 
                        ";
                    }
                    echo " </table>";
                ?><br>
            </div>
            <div align="center">
                <a href="auteur.html" class="but">retourne</a>
            </div>
        </form>
    </section>
</body>

</html>