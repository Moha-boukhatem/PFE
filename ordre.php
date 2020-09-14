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
$objet=htmlspecialchars($_POST['objet']);


/*$sql4="SELECT email FROM chef_département ";

if($resultat_id_chefs=$conn->query($sql4)){
if($resultat_id_chefs->num_rows >0){
    while($row_id_chefd = $resultat_id_chefs->fetch_assoc()){
        $email1 = $row_id_chefs['email'] ;
      
        $id_chefS=$row_id_chefs['id_chefS'];

        if($email1==$email)
        {
        	$id_chefS=$row_id_chefs['id_chefS'];
                
		}
       }*/
$sql7="INSERT INTO ordre_travaille(objet,description) VALUES('$objet','$description')";
		
		if($conn->query($sql7)){
echo "New records created successfully";
}else{
echo "erreur : ".$conn->error;		
}


?>
</body>
</html>