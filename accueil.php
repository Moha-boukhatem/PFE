<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("php/head.php")?>
  <title>Hyproc</title>
</head>


<body class="row">
  <?php include("php/header.php")?>

  <section class="back col">
    <div class="row">
        <div class="back1 col-lg-4 col-md-12">
            <h2>Maintenance Web Site</h2>
            <button class="button"onclick="document.getElementById('id01').style.display='block'" >connexion</button>
            
            <p>Vous n'avez pas un compte ? <a class="inscrire" onclick="document.getElementById('id02').style.display='block'">Inscrivez-vous</a></p>
            <div id="id01" class="modal">
                <form class="modal-content animate" action="/action_page.php" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>
                
                    <div class="container">
                        <label for="uname"><b>Email</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>
                        <label for="psw"><b>Mot de passe</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                        <button type="submit">connexion</button>
                    </div>
        
                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    </div>
                </form>
            </div>

            <div id="id02" class="modal">
                <form class="modal-content animate" action="/action_page.php" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>
                
                    <div class="container">
                        <label for="uname"><b>Email</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>
                        <label for="psw"><b>Mot de passe</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                        <label for="psw"><b>Confirmer Mot de passe</b></label>
                        <input type="password" placeholder="Confirm Password" name="psw" required>
                        <button type="submit">connexion</button>
                    </div>
        
                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                    </div>
                </form>
            </div>
            
            <script>
            var modal = document.getElementById('id01');
            window.onclick = function(event) {
                    if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            var modal = document.getElementById('id02');
            window.onclick = function(event) {
                    if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            </script>
      </div>
        
      <div class="back2 col-lg-7 col-md-12">
        <img src="img/background2.jpg" alt="background">
      </div>    
    </div>
</section>

<?php include("php/footer.php") ?>



</body>
</html>

<!--<div class="row justify-content-center ">
        <form class="formulaire"> 
          <img src="img/face.png">
          <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary">connexion</button>
        </form>
        
       
      </div>     
  <?php 
    try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=hyproc;charset=utf8', 'root', 'root');
  }
  catch(Exception $e)
  {
          die('Erreur : '.$e->getMessage());
  }
  $reponse = $bdd->query('SELECT nom, prenom FROM utilisateurs');

  while ($donnees = $reponse->fetch())
  {
    echo '<p><strong>' . htmlspecialchars($donnees['nom']) . '</strong> : ' . htmlspecialchars($donnees['prenom']) . '</p>';
  }

  $reponse->closeCursor();
  ?>-->