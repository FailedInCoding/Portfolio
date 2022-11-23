<!DOCTYPE html>
<html lang="nl">

<head>
	<title>MyPortofolio | About me</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<?php
		require_once('header.php')

	?>
		<main>
			<h4>Op deze pagina vind je informatie over mij.</h4>

			<h3>Hallo! Ik ben Sjoerd Pelzer, ik ben 16 jaar oud. Ik woon in rijen en ik studeer Software Developer. In mijn vrije tijd game ik graag en ga graag met mijn beste vriend of vriendin iets leuk doen. Dit kan van alles zijn. Ik vind reizen heel erg leuk, ik vind het dan ook leuk om een stad te bezoeken of naar het buitenland te gaan.</h3>

			<img src="img/MaxBergFrankrijk.jpg" alt="Max Loopt steil op een berg in Frankrijk.">
			<img src="img/MaxCliffFrankrijk.jpg" alt="Max kijkt af naar een cliff terwijl hij op een hangbrug staat in Frankrijk. Gemaakt in 1914">
			<img src="img/MaxSjoerdAuto1.jpg" alt="Max kijkt Sjoerd Boos aan en Sjoerd kijkt Max heel erg blij aan.">
			<img src="img/MaxSjoerdChincilaBakkie.jpg" alt="Sjoerd houdt een zeef vast met daarin een Chincilla. Max zit hier op de grond.">
			<img src="img/MaxSjoerdTrein1.jpg" alt="Max en Sjoerd kijken erg sympatiek de camera in omdat grappig gezicht.">
			<img src="img/MaxEnSjoerdInIbiza.jpg" alt="Max en Sjoerd gingen naar Ibaza, soort van dan ig.">

			<video controls>
				<source src="img/ZwemmenMaxVideo.mp4" type="video/mp4" alt="Max en Sjoerd staan in hun lange en korte broek in een random meer in Breda">
			</video>
			<video controls>
				<source src="img/MaxSjoerdFiets1.mp4" type="video/mp4" alt="Max en Sjoerd zitten samen op 1 fiets waarbij de voeten van Sjoerd bij Max op zijn benen liggen terwijl hij aan het fietsen is.">
				<?php
					require_once('footer.php')

				?>
			</video>
		</main>
</body>