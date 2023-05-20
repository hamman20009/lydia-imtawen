<?php session_start(); ?>
    <html>
        <body>
    <?php
                

                $conn=mysqli_connect('localhost','id20747294_mokranikenza','Akenza_10112022','id20747294_baseclient');

        
                    $vendeur=$_POST['vendeur'];
                    $prix=$_POST['prix'];
                    $ref=$_POST['ref'];
                    $coleur=$_POST['coleur'];
                    $qte=$_POST['Qte'];



           $ajout=mysqli_query($conn,"INSERT INTO commande(vendeur,prix,ref,coleur,Qte)
                                VALUES('$id',$vendeur','$prix','$ref','$coleur','$Qte')");
            if( $ajout){
                echo("<p style ='color:green;'>Commande enregistrée</p>");
                echo("<a href='index.html'>Rtour a la page d'accueil</a>");

            }                         
            else{
                echo("<p style ='color:green;'>Commande non enregistrée</p>");
                echo("<a href='commande_produit.html'>Rtour a la page</a>");
            }

            mysqli_close($conn);
            

            ?>
    </body>
</html>