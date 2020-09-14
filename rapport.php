<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include('bdd.php');
$email=htmlspecialchars($_POST['email']);
$description=htmlspecialchars($_POST['description']);
$titre=htmlspecialchars($_POST["titre"]);


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
$sql6="INSERT INTO rapport(titre,description,id_chefS) VALUES('$titre','$description',$id_chefS)";
		}
		if($conn->query($sql6)){
echo "New records created successfully";
}else{
echo "erreur : ".$conn->error;		
}
}

?>
</body>
</html>