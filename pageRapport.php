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

    $sql4="SELECT titre,description,id_r,id_chefS FROM rapport";

$sql5="SELECT nom,prénom,email,id_chefS,poste FROM chef_section ";


echo "<h2>Liste des demandes du travail : </h2> ";

  echo "<table >
  <tr>
  <th>ID</th>
 <th>id chef de section </th>
  <th>Nom</th>
  <th>Prénom</th>
  <th>Email</th>
  <th>Poste</th>
    <th>rapport</th>
</tr> ";
$resultat_rapport=$conn->query($sql4);
if($resultat_rapport->num_rows >0){
    while($row_rapport = $resultat_rapport->fetch_assoc()){
        $titre = $row_rapport['titre'] ;
       
        $description1 = $row_rapport['description'];
        $id_chefs=$row_rapport['id_chefS'];
                $id1=$row_rapport['id_r'];
      //  $stmt=$conn->prepare("SELECT nom,prénom,émail FROM employe WHERE id_employe=? ");
       // $stmt->bind_result('sss',)

  $resultat_chefs=$conn->query($sql5);  
      while($row_chefs = $resultat_chefs->fetch_assoc()){
        $nom1 = $row_chefs['nom'] ;
        $prénom1 = $row_chefs['prénom'];
        $email1 = $row_chefs['email'];
        $id_chefs1=$row_chefs['id_chefS'];
                $poste1=$row_chefs['poste'];


    if( $id_chefs== $id_chefs1)
    {


         echo "<tr>
              <td>".$id1."</td>
              <td>".$id_chefs."</td>
               <td>".$nom1."</td>
                <td>".$prénom1."</td>
                 <td>".$email1."</td>
                 <td>".$poste1."</td>
                                             <td>".$description1 ."</td>

         
   
      </tr>";
}
   }     
    
}

           echo "</table>";

}

           echo "</table>";



?>

</body>
</html>