<!DOCTYPE html>
<html>
<head>
<title>page login</title>
</head>
<body>
<?php
$link = mysqli_connect('localhost','root', '','Base_Client');

$emil      = $_POST['email'];
$mot_passe = $_POST['mot_passe'];

$result = mysqli_query($link,"SELECT * FROM Client WHERE Mail_Clt = '$email' AND Mot_Clt = '$mot_passe' ");

if(mysqli_fetch_row($result) > 0)
{
$ligne=mysqli_fetch_row($result);
          
              session_start();
              $_SESSION['id'] =$ligne[0];
              $_SESSION['nom'] =$ligne[1];
              $_SESSION['prenom'] =$ligne[2];

echo("<p style='font-size:20px;'> BONJOUR $ligne[1]  $ligne[2] !</p>");
echo("<p style='font-size:20px;'>pvous pouvez maintenant lancer des commandes d'achat</p>");
echo("<a href='index.html'>Retour a la page  d'acceuille </a>");
}
else
{
echo("<p style='font-size:20px;'> E-mail et/ou mot de passe incorrect(s)! <p>");
echo("<a href='login.html'>Retour a la page  login </a>");
}
session_destroy();
mysqli_close($link);
?>
</body>
</html>