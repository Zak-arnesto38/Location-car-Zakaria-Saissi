<?php require('connexion.php');?>
<!doctype html>

<meta charset="utf-8">
<?php
 
if (isset($_GET['supCar'])) {

	$sup=(int) ($_GET["supCar"]);
	
    $reqDelete="DELETE FROM automobile WHERE IMM =".$sup;
	$resultat=mysqli_query($cnloccar,$reqDelete);
	
    }
 
  if($reqDelete)
  {
    echo "La suppression a été correctement effectuée <a href='accuiel.php'>Tableau de Bord</a>" ;
  }
  else
  {
    echo"La suppression à échouée <a href='accuiel.php'>Tableau de Bord</a>" ;
  }
?>