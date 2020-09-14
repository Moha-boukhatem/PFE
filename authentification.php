 <?php ob_start();
session_start();
include('bdd.php');
?>
  <?php
                        
                      if($stmt=$conn->prepare("SELECT nom,prénom,email,mot_de_passe,code,poste FROM employe WHERE email=?")){
                      $stmt->bind_param('s',$_POST['email']);
                      $stmt->execute();
                      $stmt->store_result();
                      if($stmt->num_rows>0)
                      {
                        
                      if($stmt1=$conn->prepare("SELECT nom,prénom,email,mot_de_passe,code,poste FROM employe WHERE mot_de_passe=?")){
                      $stmt1->bind_param('s',$_POST['psw']);
                      $stmt1->execute();
                      $stmt1->store_result();
                      if($stmt1->num_rows==0)
                      {
                      die(" le mot de passe est incorrect");
                      }
                      else{                   
                      $stmt->bind_result($nom,$prénom,$email,$mot_de_passe,$code,$poste);
                        	$stmt->fetch();
                        	session_regenerate_id();
                      
                      	$_SESSION['loggedin']=TRUE;
			            $_SESSION['nom']=$nom;
                        $_SESSION['prénom']=$prénom;
		            	$_SESSION['poste']=$poste;
		            	$_SESSION['email']=$_POST['email'];
                        $_SESSION['type_compte']="employe";
                        
                         header("Location: utilisateur.php");
}
}
}

			
                      elseif($stmt2=$conn->prepare("SELECT email,mot_de_passe FROM chef_section WHERE email=?")){
                      $stmt2->bind_param('s',$_POST['email']);
                      $stmt2->execute();
                      $stmt2->store_result();
                      if($stmt2->num_rows>0)
                      {
                      if($stmt3=$conn->prepare("SELECT email,mot_de_passe FROM chef_section WHERE mot_de_passe=?")){
                      $stmt3->bind_param('s',$_POST['psw']);
                      $stmt3->execute();
                      $stmt3->store_result();
                      if($stmt3->num_rows==0)
                      {
                      die(" le mot de passe est incorrect");
                      }
                      else{                   
                      $stmt->bind_result($email,$mot_de_passe);
                        	$stmt->fetch();
                        session_regenerate_id();              
                      	$_SESSION['loggedin']=TRUE;			           
		            	$_SESSION['email']=$email;
                        $_SESSION['type_compte']="chef_section";                        
                         header("Location: chefSection.php");
                     }
  }    
}
}  

//echo'wsl hna';
                      if($stmt4=$conn->prepare("SELECT email,mot_de_passe FROM chef_département WHERE email=?")){
                      $stmt4->bind_param('s',$_POST['email']);
                      $stmt4->execute();
                      $stmt4->store_result();
                      if($stmt4->num_rows>0)
                      {
                      if($stmt5=$conn->prepare("SELECT email,mot_de_passe FROM chef_département WHERE mot_de_passe=?")){
                      $stmt5->bind_param('s',$_POST['psw']);
                      $stmt5->execute();
                      $stmt5->store_result();
                      if($stmt5->num_rows==0)
                      {
                      die(" le mot de passe est incorrect");
                      }
                      else{                   
                      $stmt->bind_result($email,$mot_de_passe);
                        	$stmt->fetch();
                        session_regenerate_id();              
                      	$_SESSION['loggedin']=TRUE;			           
		            	$_SESSION['email']=$email;
                        $_SESSION['type_compte']="chef_département";                        
                         header("Location: chefDepartement.php");
                     }
  }    
}
}   
          }
 ?>