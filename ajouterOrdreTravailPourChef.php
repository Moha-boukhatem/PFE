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

    ?>
    <div class="container">
        <h2>Ajouter Un Ordre</h2>
        <br>
        <form class="form-horizontal" action="ordre.php" method="post">
        
                <div class="form-group">

    <label class="control-label col-sm-2" for="objet">Objet:</label>
                                   <div  class="col-sm-10"> 

                <input type="text" placeholder="Entrer l'objet de votre ordre" name="objet" required>
                    </div>
                 <div class="form-group"><br>
                    <label class="control-label col-sm-2" for="description">L'Ordre:</label><br>
                    <div class="col-sm-10">
                       <textarea class="description"  placeholder="  Entrer l'objet de votre ordre" rows="10" cols="77" name="description"></textarea>
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
    
    </div>
</body>
</html>