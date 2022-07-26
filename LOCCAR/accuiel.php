<?php require_once('connexion.php');?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tableau de Bord...</title>
<link rel="stylesheet" href="loccar_style.css" type="text/css">
<style>
	.myphoto{
		width: 50px;height: 50px;border-radius: 50%;border: 1px solid;
	}
	</style>
</head>

<body>
<div id="global">
<div id="profil">
<?php
	
	session_start();
	echo "Bonjour et Bienvenue ".$_SESSION['login']."<br>";
	
	$req="select * from utilisateurs where nom_utilisateur='".$_SESSION['login']."'";
	$resultat=mysqli_query($cnloccar,$req);
	$ligne=mysqli_fetch_assoc($resultat);
	?>
	<img class="myphoto" src="<?php echo $ligne['my_photo'];?>">
	
<br>	
<a href="deconnecter.php">Deconnection</a>
</div>

	<div id="tableaubord">

	<?php include("tableauBord.php");?>
	</div>
</div>
<div><?php include('includes/footer.php');?></div>
</body>
</html>