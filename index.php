<?php
    include('bdd.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("php/head.php")
  ?>
  <title>Hyproc</title>
</head>


<body class="row">
  <?php include("php/header.php")
  ?>

  <section class="back col">
    <div class="row">
        <div class="back1 col-lg-4 col-md-12">
            <h2>Maintenance Web Site</h2>
            <button class="button"onclick="document.getElementById('id01').style.display='block'" >connexion</button>
            
            <p>Vous n avez pas un compte ? <a class="inscrire" onclick="document.getElementById('id02').style.display='block'">Inscrivez-vous</a></p>
            <div id="id01" class="modal">
                <form class="modal-content animate" action="authentification.php" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>
                
                    <div class="container">
                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Entrer votre adresse email" name="email" required>
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
                <form class="modal-content animate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>
                
                    <div class="container">
                        
                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Entrer votre adresse émail" name="email" required>

                        <label for="psw"><b>Mot de passe</b></label>
                        <input type="password" placeholder="Entrer votre mot de passe" name="psw" required>

                        <label for="psw"><b>Confirmer Mot de passe</b></label>
                        <input type="password" placeholder="Confirmer le mot de passe" name="psw1" required>

                        <button type="submit" name="submit1">connexion</button>
                    </div>

        
                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                    </div>
                </form>
                <?php
  if(isset($_POST['submit1'])) {

 // $sql="SELECT code FROM code_emplyé WHERE code=? ";
   //$sql1="SELECT code FROM emplyoe2";
/* $nom1 = $_POST['nom'];
  $name_pattern = "/^[a-zA-Z ,.'-]+$/u";

  if(!preg_match($name_pattern, $nom1)){
    die("Erreur: Veuillez entrer un nom valide!");
  }
  $prenom1 = $_POST['prénom'];
  $name_pattern = "/^[a-zA-Z ,.'-]+$/u";
  preg_match($name_pattern, $prenom1, $name_matches);
  if(!$name_matches){
    die("Erreur: Veuillez entrer un prénom valide!");
  }*/

 // if($_POST['psw']!=$_POST['psw1']){
   // die("Erreur: Les deux mots de passes ne correspondent pas!");
 // }


 /*  $resultat_code=$con->query("SELECT code FROM code_emplyé");
    if($resultat_code->num_rows >0){
      $row = $resultat_code->fetch_assoc();
      $code_employé=$row['code'];
    }
    else if($resultat_code->num_rows ==0){
      //die("Erreur: Impossible de récupérer le code veuillez réessayer! si le problème persiste veuillez contacter votre administration  ");
    }
    if($_POST['code']!=$code_employé){
      die("Le code entré est incorrect veuillez réessayer!");
    }*/

  

          	//insription
  /* $n=1000;
    for ($i=0; $i <n ; $i++) { 
      # code...
      $array_id[$i]=$i;

    }  */
  /*  $id=0;
    $sql="SELECT id FROM employe";



$resultat_id=$conn->query($sql);

    while($row_id = $resultat_id->fetch_assoc()){
   $stmt=$conn->prepare("SELECT id FROM employe WHERE $id=?");
   $stmt->bind_param('s',$row_id);
   $stmt->execute();
   $stmt->store_result();
   if($stmt->num_rows>0){
    $id++;
   }*/
    $nom=htmlspecialchars($_POST['nom']);
          $prenom=htmlspecialchars($_POST['prénom']);
          $email=htmlspecialchars($_POST['email']);
          $mdp=htmlspecialchars($_POST['psw']);
          $code=htmlspecialchars($_POST['code']);
          $poste=htmlspecialchars($_POST['poste']);


  /*     $stmt=$conn->prepare("SELECT id FROM employe WHERE id=?");
          $stmt->bind_param('i', $array_id[]);
          $stmt->execute();
         while ($stmt->num_rows>0) {
 
             }*/

          $sql_2 = "INSERT INTO employe (nom,prénom,email,mot_de_passe,code,poste) VALUES('$nom','$prenom','$email','$mdp','$code','$poste')";


             if($conn->query($sql_2)){
               echo "New records created successfully";
            }else{
            echo "erreur : ".$conn->error;
            }
            
$conn->close();
}
        
    



       
?>
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



