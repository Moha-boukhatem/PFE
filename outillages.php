<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ("php/head.php")?>
    <title>Utilisateur</title>
</head>
<body>
<?php include ("php/header.php")?>
    

    <div class="container">
        <br> <h2>Liste d'outillages : </h2> <br>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Quantité</th>

                    </tr>
                </thead>
                <?php
                include('bdd.php');

                $sql4="SELECT code,nom,quantité FROM equipement";
                $resultat_rapport=$conn->query($sql4);
                if($resultat_rapport->num_rows >0){
                    while($row_rapport = $resultat_rapport->fetch_assoc()){
                        $code = $row_rapport['code'] ;
                        $nom = $row_rapport['nom'];                                        
                        $marque=$row_rapport['quantité'];  
                        echo "
                        <tbody>
                        <tr>
                        <td>".$code."</td>
                        <td>".$nom."</td>
                        <td>".$marque."</td>
                        </tr>
                        </tbody>";
                    }
                    }     
                    ?>

            </table>    
    </div>

    


</body>
</html>