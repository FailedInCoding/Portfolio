<!DOCTYPE html>
<html lang="nl">

<head>
	<title>MyPortofolio | Projects</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

	<?php
		require_once('header.php')

	?>
		<main>
			<h4 class="header-main-project">Op deze pagina vind je de projecten die ik voor school heb gemaakt.</h4>

			<h3>Week Checks:</h3>
			<button type="button" class="collapse"><b>Week 1</b></button>
			<div class="content">
				<p class="weekCheckP">Flowcharts, Microbit opdrachtkaart en Microbit coderen.</p>

				<i>Flowcharts:</i>
				<br>
				<p> Flowcharts zijn visuele blokjes die een voorbeeld of idee makkelijk kunnen maken. Hier moest ik een visuele presentatie maken van mijn standaard ochtend en van hoe een student op Curio zich zou moeten ziekmelden afhankelijk van de leeftijd</p>

				<i>Microbit opdrachtenkaart:</i>
				<br>
				<p> Hier heb ik 1 opdracht gedaan waarin ik een rekenmachine heb gemaakt in "Microbit taal"</p>

				<i>Microbit coderen:</i>
				<br>
				<p>Hier heb ik geoefend met het programeren van de microbit taal</p>

				<i>Website programeren in HTML:</i>
				<br>
				<p>Hier heb ik 2 websites gemaakt die gingen over een digitaal restaurant en 1 website ging over mijzelf, dat was mijn portofolio website.</p>
			</div>

			<button type="button" class="collapse"><b>Week 2</b></button>
			<div class="content">
  				<p class="weekCheckP"> HTML & CSS, Microbit Variables, V-model, Snelkoppelingen, Pixels besturen en Sprites.</p>

				<i>HTML & CSS:</i>
				<br>
				<p> Wij hebben vorige week al geleerd hoe je simpele websites moet maken met HTML, deze week hebben we daar op uitbereid met moeilijkere code en als toepassing daarop hebben we kennis gemaakt met CSS, dit is de opmaak van de alleen; kale HTML code. </p>

				<i>Microbit variables:</i>
				<br>
				<p>Deze week zijn we ook verder gegaan met de microbit, hier hebben we geleerd hoe je moet werken met de variables.</p>

				<i>V-model</i>
				<br>
				<p>Het v-model is een "tekening" die de stappen uitlegt en duidelijk maakt over hoe je een applicatie ontwikkeld</p>

				<i>Snelkoppelingen</i>
				<br>
				<p>Een snelkoppeling is een function die je kan callen, zodat je het niet steeds opnieuw kan maken</p>

				<i>Pixels besturen</i>
				<br>
				<p>Met pixels besturen kan je bepalen waar pixels heen gaan met bepaalde bewegingen en opdrachten.</p>

				<i>Sprites</i>
				<br>
				<p>Het aanmaken en besturen van sprites, hiemee kan je ze besturen en dus een simpele game maken zoals "Catch the Apple".</p>
			</div>
			<button type="button" class="collapse"><b>Week 3</b></button>
			<div class="content">
				<p>Sprites, Botsende sprites en rotation.</p>

				<i>Sprites:</i>
				<p>Het aanmaken en besturen van sprites, hiemee kan je ze besturen en dus een simpele game maken zoals "Catch the Apple". </p>

				<i>Botsende Sprites:</i>
				<p>Botsende sprites zijn 2 sprites die elkaar aanraken, hierdoor kan je een simpele game maken zoals "Catch the Apple". </p>

				<i>Rotation:</i>
				<p>Rotation is een onderdeel op de microbit waarmee je de graden kan meten.". </p>
			</div>
			<button type="button" class="collapse"><b>Week 4</b></button>
			<div class="content">
				<p>Microbit leds, Classes en Div.</p>

				<i>Microbit Leds:</i>
				<p>Microbit leds zijn led op de microbit die je kan aansturen doormiddel van verschillende led atributen . </p>

				<i>Classes:</i>
				<p>Classes zijn benamingen voor specifieke statements aan te spreken om ze later te veranderen naar wat je wilt. </p>

				<i>Div:</i>
				<p>. </p>
			</div>

			<h1 class="header-eindopdracht">Microbit Eindopdracht Praktijk</h1>
			<p class="header-microbit">Voor het vak Praktijk heb ik een eindproject moeten kiezen, hiervoor heb ik Catch The Apple gekozen omdat dit mij een leuke uitdaging leek.</p>

			<div class="microbit-center" style="position:absolute;;padding-bottom:70%;overflow:hidden;"><iframe style="position:absolute;left:70%;width:20%;height:20%;" src="https://makecode.microbit.org/---run?id=_Ph6h3dTePJYu" allowfullscreen="allowfullscreen" sandbox="allow-popups allow-forms allow-scripts allow-same-origin" frameborder="0"></iframe></div>

			<h2 class="eindopdracht">Catch The Apple <div class="badge">Eindopdracht</div></h2>
			<p class="eindopdracht1">Catch The Apple is een spel waarbij je "appels" moet vangen die uit de lucht komen vallen. Zodra je (in dit geval) meer dan 5 keer appels hebt gevangen dan vallen ze sneller en vaker. bij nog meer gevangen appels stijgt deze frequentie meer.</p>


			<h2 class="deelopdracht">Rock Paper Scissors <div class="badge">Deelopdracht</div></h2>
			<p class="deelopdracht1">Rock paper scissors is een spel dat al duizende jaren word gespeeld. En dus ook op de Microhbit, in het spel heb je de keuze uit steen, papier en schaar. Afhankelijk van welke je kiest kiest de computer een random counter, als deze wint van die van jou. Heb je verloren, of niet.</p>

			<h2 class="deelopdracht">Firework Show <div class="badge">Deelopdracht</div></h2>
			<p class="deelopdracht1">Firework show is een Microbit programma dat ik heb gemaakt in opdracht van Native. In dit progamma zie je een vuurwerk show met een random variable. Op deze manier krijg je niet altijd dezelfde te zien. In dit programma zitten 3 verschillende vuurwerkpijlen, waarvan 1 lange en uitgebereidde en 2 korte, normalere.</p>


			<div class="MicrobitMakeCode">
				<h2>
					Microbit Tutorial
					<div id="microbit_tutorial_loader" style="display:none;" class="spinner-grow" role="status">
						<span class="sr-only">Loading...</span>
					</div>
				</h2>
				<p>Maak je eigen Microbit blok!</p>
				<div id="microbit_tutorial" style="display:none;">
					<pre class="blocks">                    
					<code>
						basic.showString("Hallo ${naam}!")
					</code>
				</pre>
			</div>
			<div>
				<input type="text" class="form-control" id="microbit_blok_naam" placeholder="Jouw naam">
				<button onclick="createMicrobitBlock()" class="MakeButton" type="button"><b>Blok maken</b></button>
			</div>
			</div>

			<br>

			<button type="button" class="collapse"><b>Inputs</b></button>
			<div class="content">
				<p class="inputP"><b>Inputs</b></p>

				<ul>
					<li>Knop <b>A</b></li>
					<li>Knob <b>B</b></li>
					<li>Touch Microbit Logo</li>
					<li>Sound</li>
					<li>Shake</li>
					<li>Direction</li>
					<li>Tempature</li>
					<li>Light Levels</li>
					<li>Microbit Pins (Bottom of Microbit)</li>
				</ul>
			</div>

			<button type="button" class="collapse"><b>Output</b></button>
			<div class="content">
				<p class="inputP"><b>Output</b></p>

				<ul>
					<li>Leds 5x5</li>
					<li>Sound</li>

					<li>Microbit Pins</li>
				</ul>
			</div>

			<br>
			<br>
			<a class="github-link" href="https://github.com/FailedInCoding">Github Link</a>

		</main>
		<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
		<?php
		require_once('footer.php')

		?>
		<script type="text/javascript" src="js/script.js"></script>
</body>