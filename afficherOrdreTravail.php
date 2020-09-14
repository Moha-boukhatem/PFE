<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ("php/head.php")
    ?>
    <title>Utilisateur</title>
</head>
<body>
<?php include ("php/header.php");
include('bdd.php');

    $sql4="SELECT objet,description,id_o FROM ordre_travaille";

echo "<h2>Liste Des Ordres Du Travail : </h2> ";

  echo "<table >
  <tr>
  <th>ID</th>
 <th>Objet </th>
  <th>L'Ordre</th>
  
</tr> ";
$resultat_rapport=$conn->query($sql4);
if($resultat_rapport->num_rows >0){
    while($row_rapport = $resultat_rapport->fetch_assoc()){
        $objet = $row_rapport['objet'] ;
       
        $description1 = $row_rapport['description'];
    
                $id1=$row_rapport['id_o'];
      //  $stmt=$conn->prepare("SELECT nom,prénom,émail FROM employe WHERE id_employe=? ");
       // $stmt->bind_result('sss',)

 


         echo "<tr>
              <td>".$id1."</td>
              <td>".$objet."</td>
               
                                             <td>".$description1 ."</td>

         
   
      </tr>";
}
   }     
    


           echo "</table>";



?>
 <div class="back3 col-lg-7 col-md-12">
            <a href="ajouterRapport.php">ajouter un Rapport</a>

            </div>  

</body>
</html>


