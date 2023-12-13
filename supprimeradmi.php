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
                Supprimer Auteur
            </h1><br>
            <div class="input">
                <?php
                    $SERVEUR="localhost";
                    $UTILISATEUR="root";
                    $MOTDEPASSER="";
                    $BASE="gestion_biblio";
                    $connect=mysqli_connect($SERVEUR,$UTILISATEUR,$MOTDEPASSER,$BASE);
                    $nom=$_POST["id_auteur"];
                    $y=("DELETE FROM administrateur WHERE id_admin='$nom'");

                    if(mysqli_query($connect,$y)){
                        echo "votre donnees sont bien supprimer";
                    }
                    else{
                        echo "votre donnees ne sont pas supprimer";
                    }
                ?>
            </div>
            <br>
            <div align="center">
                <a href="afficheadmi.php" ><input type="button" value="Afficher" class="but"></a>
                
            </div>
        </form>
    </section>
</body>

</html>