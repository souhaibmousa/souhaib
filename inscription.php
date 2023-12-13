
	 <!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="inscription.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <title>connectionbiblio</title>
     </head>
     <body>
         <form method="post" action="recherchelivre.php">
             <h1>
                 connection
             </h1>
     <div class="mesfond">
         <p ><i class="fa fa-google"></i></p>
         <p><i class="fa fa-facebook"></i></p>
         <p><i class="fa fa-youtube"></i></p>
         <p><i class="fa fa-instagram"></i></p>
     </div>
  
	 <div class="input">
        

<?php
$SERVER='localhost';
$utilisateur='root';
$motpasse='';
$base='gestion_biblio';
$connection=mysqli_connect('localhost','root','','gestion_biblio');
if(!$connection){die("problem de connection".mysqli_connect_erro());}
$nom=$_POST['nom'];
$pre=$_POST['prenom'];
$add=$_POST['adresse'];
$mail=$_POST['email'];
$login=$_POST['login'];
$pass=$_POST['mot_passe'];
$tell=$_POST['tel'];
$date=$_POST['date_naiss'];

$date_limite=date('Y-m-d',strtotime('-5 years'));
if($date > $date_limite){

echo "Desole,vous avez pas l'age necessaire pour s'incrire a notre site";

}

else{
$A=("INSERT INTO adherent(nom_adherent,prenom,adresse,email,login_adherent,mot_de_passe,telephone,date_naiss)
VALUES('$nom','$pre','$add','$mail','$login','$pass','$tell','$date')");
if(mysqli_query($connection,$A)){
   echo "enregistrement reussie";
   header("location:library.html");
}
else{
    echo "erreur";


}

}
 ?>

	</div>      

         </form>
         
     </body>
     </html>






