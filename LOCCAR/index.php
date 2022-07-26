<?php require_once('connexion.php');?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Location CAR...</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="loccar_style.css">
</head>

<body>
<div id="entete">
<!-- ----------------------------------------------------Login ---------------------->
<a href="login.php" class="login">Login</a>


 <!-- ----------------------------------------------------------------------------------------------->


	<video class="video_entete" autoplay >
		<source   src="images/car.mp4" type="video/mp4">
	</video>
	<p class="nomsite">Location CAR</p>
	<div id="formauto">
		<form name="formauto" action="" method="post">
			<input type="text" name="motcle" placeholder="  Recherche par Marque" id="motcle">
			<input type="submit" name="btsubmit" value="Recherche" class="btfind">
		</form>
		
	</div>	
</div>


<div id="articles">
	
<?php
	
	if (isset($_POST['btsubmit']))
	{
		$mc=$_POST['motcle'];
		$reqselect="select * from automobile where MARQUE like '%$mc%'";
	}
		else{
		
		$reqselect="select * from automobile";
	}
	$resultat=mysqli_query($cnloccar,$reqselect);
	
	$nbr=mysqli_num_rows($resultat);
	echo "<p><b> ".$nbr."</b> Resultat de votre Recherche...</p>";
	while($ligne=mysqli_fetch_assoc($resultat))
	{
	?>
	<div id="auto">
		<img src="<?php echo $ligne['PHOTO']; ?>"><br>
		<?php echo $ligne['IMM']; ?><br>
		<?php echo $ligne['MARQUE']; ?><br>
		<?php echo $ligne['PRIX_LOC']; ?><br>
	</div>
	
	
<?php } ?>
	
</div>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div><?php include('includes/footer.php');?></div>

</body>

</html>