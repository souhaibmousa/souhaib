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
                    $id=$_POST["dd"];
                    $nomn=$_POST["nom"];
                    $pr=$_POST['pre'];
                    $g=$_POST['adres'];
                    $ad=$_POST['ee'];
                    $dn=$_POST['log'];
                    $e=$_POST['password'];
                    $n=$_POST['tt'];
                    $y=("UPDATE administrateur 
                        SET nom_admin='$nomn',
                        prenom='$pr',
                        adresse='$g',
                        email='$ad',
                        login_admin='$dn',
                        mot_de_passe='$e',
                        telephone='$n'
                        WHERE id_admin='$id'");
                    
                    
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
                <a href="afficheadmi.php">Affiche</a>
            </div>
        </form>
    </section>
</body>

</html>