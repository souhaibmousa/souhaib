
	 <!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="connection.css">
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
$serveur="localhost";
$utilisateur="root";
$motdepasse="";
$base="gestion_biblio";

$data=mysqli_connect($serveur,$utilisateur,$motdepasse,$base);

$tt=$_POST['nom'];
    $Cr=$_POST['prenom'];
 

$result=mysqli_query($data,"SELECT * FROM administrateur WHERE email='$tt' AND mot_de_passe='$Cr'");
if(mysqli_fetch_row($result)==0){
	echo "l`email et le mot de passe sont incorrect veuillez reessayer";

}else{
	header("location:acceuadmi.html");
	exit();
}

?>

	</div>      
         </form>
         
     </body>
     </html>

