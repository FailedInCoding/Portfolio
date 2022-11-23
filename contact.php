<!DOCTYPE html>
<html lang="nl">

<head>
	<title>MyPortofolio | Contact</title>
	<meta charset="UTF-8">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<body>
    <?php
		require_once('header.php')

	?>

<main class="container">
    <div class="row mt-5">
        <div class="col-12 col-lg-6">
            <h4>Contact</h4>
            <form method="POST" action="/contact.php">
                <div class="row mt-4">
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label>Uw naam</label>
                            <input required type="text" name="name" class="form-control" placeholder="Uw naam">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label>Uw emaill</label>
                            <input required type="email" name="email" class="form-control" placeholder="Uw email">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Bericht</label>
                            <textarea required class="form-control" name="bericht" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row mt-2 text-right">
                    <div class="col-12">
                        <button class="btn btn-primary">Versturen</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-lg-4">
            <h4>Contact informatie</h4>
            <div class="mt-4 contact">
                <p>
                    <img class="business-icon" src="../assets/img/logo_icon_transparant.png">
                    Sjoerd Pelzer<br>
                    Theodora Haverstraat 18<br>
                    5122BD Gilze-Rijen<br>
                    Nederland
                </p>
                <p>
                    <img class="contact-icon" src="../assets/img/mail.svg">
                    <a href="mailto:sjoerd.pelzer@gmail.com">sjoerd.pelzer@gmail.com</a>
                </p>
                <p>
                    <img class="contact-icon" src="../assets/img/phone.svg">
                    <a href="tel:+31 6 15358386">06-15358386</a>
                </p>
            </div>
        </div>
    </div>
</main>
<?php
		require_once('footer.php')

		?>
</body>


	<!-- <main>
		<h2>Contact</h2>
		<p>Op deze pagina vind je contact informatie over mij.</p>

		<h3><form method="POST" action="contact.php">
				<input placeholder="Uw naam:">
				<input placeholder="Email:">
				<textarea placeholder="bericht"> </textarea>
				<button type="submit">Versturen</button>

				</form></h3>

		<footer><p>&copy; FailedInCoding, 2022</p></footer>
	</main> -->