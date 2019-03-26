<?php $thisPage = 'loket'; ?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
    <meta name="description" content="De website van de gemeente Lansingerland">
    <meta name="keywords" content="Gemeenteloket, Gemeente Lansingerland, Gemeente">
    <meta name="author" content="Damian Zanoni, Thomas Jacoby">
    <title>Gemeente Lansingerland</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="icon" href="assets/img/GemeenteIcon.png" type="image/x-icon">
    <script type="text/javascript" src="assets/js/main.js"></script>
</head>
<body>
<?php include('assets/header.php'); ?>
<section id="content">
    <h1>Selecteer een onderwerp:</h1>
    <form>
        <select id="aanvraag" name="aanvraagform" onchange="verwerk()">
            <option value="">Selecteer</option>
            <option value="1">Bevolkingsregister</option>
            <option value="2">Kapvergunning</option>
            <option value="3">Paspoort</option>
        </select><br/>
        <div id="output"></div>
    </form>
</section>
<?php include('assets/footer.php'); ?>
</body>
</html>
