<!DOCTYPE html>
<html lang="nl">

<head>
	<title>MyPortfolio | Home</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- 	<script>
		function autoRefresh() {
        	window.location = window.location.href;
        }
        setInterval('autoRefresh()', 10000000000000);
	</script> -->
</head>

<body>

	<?php
		require_once('header.php')

	?>
	<main>
		<!-- <h2>Home</h2> -->
		<img class="imgHomePage"src="img/sjoerdpfp_website2.jpg" alt="Profielfoto van Sjoerd met een chincila.">

		<p id="greeting"></p>

		<button id="button">Klik Mij!</button>
		<p id="text-hidden" style= "display: none">Nu ben ik wel te zien!

		<script>
			let name = prompt("Hoi! Wat is jou naam?");
			if (name.length > 0) {
				document.getElementById('greeting').innerText = "Hallo " + name + ", welkom op de site"
			}

			document.getElementById('button').addEventListener("click", function(){
				document.getElementById('text-hidden').style.display = "block "
				document.getElementById('text-hidden').style.fontSize = "55px "
			})
		</script>
	</main>
	<?php
		require_once('footer.php')

		?>
</body>
</html>
