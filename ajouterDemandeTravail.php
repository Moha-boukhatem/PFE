<?php ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ("php/head1.php")
    ?>
    <title>Utilisateur</title>
</head>
<body> 
    <?php include ("php/header.php")
    ?>
    
        <div class="container">
            <h2>Ajouter Une Demande De Travail</h2>
            <form class="form-horizontal" action="demande1.php" method="post">
                  <div class="form-group">

 

                   <label class="control-label col-sm-2" for="email">Email:</label>
                                   <div  class="col-sm-10"> 

                <input type="text" placeholder="Entrer votre adresse émail" name="email" required>
                    </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="id_type">Type:</label>
                   
                <div  class="col-sm-10"> 
                 <select class="liste"  name="id_type">
                 <option  class="liste" disabled selected value> -- selectionnez votre type de demande -- </option>

    <?php
    include('bdd.php');
   


   

    $type=$conn->query("SELECT label_type,id_type FROM type");
    if($type->num_rows >0){
    while($row=$type->fetch_assoc())
    {
      ?>

        <option ><?php  echo $row['id_type'] ."-".$row['label_type']?></option>;
        <?php
    }
    }
   

?>
</select>
                </div>
                                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="id_localisation">Localisation:</label>
                            <div  class="col-sm-10"> 
                 <select class="liste"  name="id_localisation">
                 <option  name="id_localisation" class="liste" disabled selected value> -- selectionnez la localistion -- </option>

    <?php
    include('bdd.php');
   

    $type=$conn->query("SELECT label_localisation,id_localisation FROM localisation");
    if($type->num_rows >0){
    while($row=$type->fetch_assoc())
    {
      ?>

        <option ><?php  echo $row['id_localisation'] ."-".$row['label_localisation']?></option>;
        <?php
    }
    }
   

?>
</select>
                </div>
                                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="description">Description:</label>
                    <div class="col-sm-10">
                       <textarea class="description" rows="10" cols="500" name="description"></textarea>
                    </div>
                </div>
               
            
                <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>


</body>
</html>