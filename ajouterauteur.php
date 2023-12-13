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
                Nouveau Auteur!
            </h1><br>
            <div class="input">
                <?php
                    $SERVEUR="localhost";
                    $UTILISATEUR="root";
                    $MOTDEPASSER="";
                    $BASE="gestion_biblio";
                    $connect=mysqli_connect($SERVEUR,$UTILISATEUR,$MOTDEPASSER,$BASE);

                    // $id=$_POST["id_auteur"];
                    $n=$_POST["nom_auteur"];
                    $pn=$_POST["prenom_auteur"];
                    $dn=$_POST["date_naissance"];
                    $ad=$_POST["adresse"];
                    $em=$_POST["email"];
                    $g=$_POST["genrer"];
                    $na=$_POST["nationnalite"];
                    $m=("INSERT INTO auteur VALUES ('','$n','$pn','$g','$ad','$dn','$em','$na')");
                    if(mysqli_query($connect,$m)){
                        echo "votre donnees sont bien enregistre a la base de donnees";
                             header("location:ajouterauteur2.php");
                            }
                    else{
                        echo "votre donnees sont totalement rejeter";
                    }
                ?>
            
            </div>
            <div align="center">
                <a href="ajoutererauteur.html" class="but">retourne</a>
            </div>
        </form>
    </section>
</body>
</html>