<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ("php/head.php")
    ?>
    <title>Utilisateur</title>
</head>
<body>

    <?php include ("php/header.php")
    ?>
<div class="container">
<h2> Liste des demandes du travail : </h2>
 
    <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Section</th>
                    <th>localisation</th>
                    <th>Description</th>
                </tr>
            </thead>
        
    <?php 
        include("bdd.php");
        
    $sql2="SELECT id_type,id_localisation,description,id,id_employe FROM demande_travail";
    $sql3="SELECT nom,prénom,email,id_employe,poste FROM employe ";
    $sql4="SELECT id_type,id_localisation,description,id_dtcs,id_chefS FROM demande_travailcs";
    $sql5="SELECT nom,prénom,email,id_chefS,poste FROM chef_section ";


    $resultat_demande=$conn->query($sql2);

    if($resultat_demande->num_rows >0){
        while($row_demande = $resultat_demande->fetch_assoc()){
            $type = $row_demande['id_type'] ;
            $localisation = $row_demande['id_localisation'];
            $description = $row_demande['description'];
            $id_employe=$row_demande['id_employe'];
                    $id=$row_demande['id'];
        //  $stmt=$conn->prepare("SELECT nom,prénom,émail FROM employe WHERE id_employe=? ");
        // $stmt->bind_result('sss',)

    $resultat_employe=$conn->query($sql3);  
        while($row_employe = $resultat_employe->fetch_assoc()){
            $nom = $row_employe['nom'] ;
            $prénom = $row_employe['prénom'];
            $email = $row_employe['email'];
            $id_employe1=$row_employe['id_employe'];
                    $poste=$row_employe['poste'];


        if( $id_employe== $id_employe1)
        {


            echo "
                <tbody>
            <tr>
                <td>".$id."</td>
                <td>".$email."</td>
                <td>.$type.</td>
                <td>".$localisation ."</td>
                <td>".$description ."</td>
            </tr>
        ";
    }
    }     
        
    }
    }

    $resultat_demandecs=$conn->query($sql4);
    if($resultat_demande->num_rows >0){
        while($row_demandecs = $resultat_demandecs->fetch_assoc()){
            $type1 = $row_demandecs['id_type'] ;
            $localisation1 = $row_demandecs['id_localisation'];
            $description1 = $row_demandecs['description'];
            $id_chefs=$row_demandecs['id_chefS'];
                    $id1=$row_demandecs['id_dtcs'];
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
                <td>".$email1."</td>
                <td>".$type1 ."</td>
                <td>".$localisation1 ."</td>
                <td>".$description1 ."</td>
                </tr>
                </tbody>";
    }
    }     
        
    }
    }

    echo "</table>";




        ?>
    </div>
  
</body>
</html>