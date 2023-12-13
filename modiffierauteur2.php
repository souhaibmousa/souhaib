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
        <form action="modiffierauteur3.php" method="POST">
            
            <h1>
             
            </h1><br>
            <div class="input">
                <?php
                    $SERVEUR="localhost";
                    $UTILISATEUR="root";
                    $MOTDEPASSER="";
                    $BASE="gestion_biblio";
                    $connect=mysqli_connect($SERVEUR,$UTILISATEUR,$MOTDEPASSER,$BASE);
                    if(!$connect){ die("connection erreur".mysqli_connect_erro());}
                    
                    $nomn=$_POST["nom_auteur"];
                    $pr=$_POST['prenom_auteur'];
                    $g=$_POST['genrer'];
                    $ad=$_POST['adresse_auteur'];
                    $dn=$_POST['date_naiss_auteur'];
                    $e=$_POST['email_auteur'];
                    $n=$_POST['nationnalite'];
                    $y=("UPDATE auteur 
                        SET nom_auteur='$nomn',
                        prenom_auteur='$pr',
                        genre='$g',
                        adresse='$ad',
                        date_naiss='$dn',
                        email='$e',
                        nationnalite='$n'
                        WHERE nom_auteur='$nomn'");
                    
                    
                    if(mysqli_query($connect,$y)){
                        echo "votre donnée a été modifier!";
                        // header("location:modiffierauteur.php");
                    }
                    else{
                        echo "desoler aucun modification dans la base!";
                    }
                    // echo "<table border='2'>
                    // <tr>
                    //     <td>id_auteur</td>
                    //     <td>nom_auteur</td>
                    //     <td>prenom_auteur</td>
                    //     <td>genrer</td>
                    //     <td>adresse_auteur</td>
                    //     <td>date_naissance</td>
                    //     <td>email</td>
                    //     <td>Nationnalite</td>
                    // </tr>";
                    // while($a=mysqli_fetch_array($sum)){
                    //     $id=$a["id_auteur"];
                    //     $n=$a["nom_auteur"];
                    //     $pn=$a["prenom_auteur"];
                    //     $g=$a["genrer"];
                    //     $ad=$a["adresse_auteur"];
                    //     $dn=$a["date_naiss_auteur"];
                    //     $e=$a["email_auteur"];
                    //     $na=$a["nationnalite"];
                    //     echo "
                    //         <tr>
                    //             <td>$id</td>
                    //             <td>$n</td>
                    //             <td>$pn</td>
                    //             <td>$g</td>
                    //             <td>$ad</td>
                    //             <td>$dn</td>
                                
                    //             <td>$e</td>
                    //             <td>$na</td>
                    //         </tr> 
                    //     ";
                    // }
                    // echo " </table>";
                ?>
            </div>
            <br>
            <div align="center">
                <a href="modiffierauteur3.php">Affiche</a>
            </div>
        </form>
    </section>
</body>

</html>