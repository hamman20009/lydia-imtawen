<!DOCTYPE html>
<html lang="en"dir="ltr">
    <head>
        <meta charset="utf-8">
        <title> page1</title>
    </head>
<body>

<?php
$link = mysqli_connect('localhost','root','','Base_Client);
$nom         =$_POST['nom'];
$prenom      =$_POST['prenom'];
$age         =$_POST['age'];
$wilaya      =$_POST['wilaya'];
$tel         =$_POST['tel'];
$email       =$_POST['email'];
$adr         =$_POST['adr'];
$mot_passe   =$_POST['mot_passe'];
$sexe        =$_POST['sexe'];
$result = mysqli_query($link,"INSERT INTO Client (No_Clt,Pno_Clt,Age_Clt,Wi_Clt,Tel_Clt,Mail_Clt,Adr_Clt,Mot_Clt,Sexe_Clt )
                            VALUES ('$nom','$prenom','$age','$wilaya','$tel','$email','$adr','$mot_passe','$sexe')");
if($result == true)
{
    echo("<p style='font-size:20px;'>LE CLIENT  $nom $prenom a ete ajouter avec succees </p><BR>");
    echo("<a href='[index.html]'style='color:green;'>Retour a la ligne d'acceuill</a>");
    }
    else
    {
    echo("<p style='font-size:20px;'> le cient n'a pas ete ajouter ! <BR>");
    } 
    mysqli_close($link);
?>
</body>
</html>