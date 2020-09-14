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
            <h2>Ajouter Un Rapport</h2>
            <form class="form-horizontal" action="rapport.php" method="post">
                  <div class="form-group">

    <label class="control-label col-sm-2" for="email">Email:</label>
                                   <div  class="col-sm-10"> 

                <input type="text" placeholder="Entrer votre adresse émail" name="email" required>
                    </div>
                      <div class="form-group">

    <label class="control-label col-sm-2" for="titre">Titre:</label>
                                   <div  class="col-sm-10"> 

                <input type="text" placeholder="Entrer le titre du rapport" name="titre" required>
                    </div>
                 <div class="form-group">
                    <label class="control-label col-sm-2" for="description">Rapport:</label>
                    <div class="col-sm-10">
                       <textarea class="description" rows="10" cols="500" name="description"></textarea>
                    </div>
                </div>
                 <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </div>
            </div>
        </form>
    <section class="back col">
        <div class="row">
            <div class="back2 col-lg-4 col-md-12">
            
             
            </div>
            
            <div class="back3 col-lg-7 col-md-12">

            </div>    
        </div>
    </section>
    


</body>
</html>