<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ("php/head.php")
    ?>
    <title>Utilisateur</title>
</head>
<body>
<?php include ("php/header.php");?>

<div class="container">
<br><h2>Liste Des Ordres Du Travail : </h2><br>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Objet </th>
                        <th>Ordre</th>
                    </tr>
                </thead>
    <?php
    include('bdd.php');

        $sql4="SELECT objet,description,id_o FROM ordre_travaille";
        $resultat_rapport=$conn->query($sql4);
    if($resultat_rapport->num_rows >0){
        while($row_rapport = $resultat_rapport->fetch_assoc()){
            $objet = $row_rapport['objet'] ;
        
            $description1 = $row_rapport['description'];
        
                    $id1=$row_rapport['id_o'];
    
        echo "
            <tbody>
            <tr>
                <td>".$id1."</td>
                <td>".$objet."</td>
                <td>".$description1."</td>
            </tr>
            </tbody>";
    }
    }     
        


            echo "</table>";



    ?>
</div>

</body>
</html>