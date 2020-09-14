<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ("php/head.php")
    ?>
    <title>Utilisateur</title>
</head>
<body>
	<?php
	include('bdd.php');
$id_type=htmlspecialchars($_POST['id_type']);
$id_localisation=htmlspecialchars($_POST['id_localisation']);

$description=htmlspecialchars($_POST['description']);
$email=htmlspecialchars($_POST['email']);
$sql3="SELECT email,id_employe FROM employe ";

$sql4="SELECT email,id_chefS FROM chef_section ";

if($resultat_id_chefs=$conn->query($sql4)){
if($resultat_id_chefs->num_rows >0){
    while($row_id_chefs = $resultat_id_chefs->fetch_assoc()){
        $email1 = $row_id_chefs['email'] ;
      
        $id_chefS=$row_id_chefs['id_chefS'];

        if($email1==$email)
        {
        	$id_chefS=$row_id_chefs['id_chefS'];
                
		}
       }
$sql6="INSERT INTO demande_travailcs(id_type, id_localisation,description,id_chefS) VALUES('$id_type','$id_localisation','$description',$id_chefS)";
		}
		if($conn->query($sql6)){
echo "New records created successfully";
}else{
echo "erreur : ".$conn->error;		
}
}

else{


$resultat_id_employe=$conn->query($sql3);
if($resultat_id_employe->num_rows >0){
    while($row_id_employe = $resultat_id_employe->fetch_assoc()){
        $email1 = $row_id_employe['email'] ;
      
        $id_employe=$row_id_employe['id_employe'];

        if($email1==$email)
        {
        	$id_employe=$row_id_employe['id_employe'];
                
		}
       }

$sql="INSERT INTO demande_travail(id_type, id_localisation,description,id_employe) VALUES('$id_type','$id_localisation','$description',$id_employe)";
		}
if($conn->query($sql)){
echo "New records created successfully";
}else{
echo "erreur : ".$conn->error;		
}
}
$conn->close();
 ?>
</body>
</html>