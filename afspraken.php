<?php $thisPage = 'afspraken'; ?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="De website van de gemeente Lansingerland">
    <meta name="keywords" content="Gemeenteloket, Gemeente Lansingerland, Gemeente">
    <meta name="author" content="Damian Zanoni, Thomas Jacoby">
    <title>Afspraak maken &#124; Gemeente </title>
    <link rel="stylesheet" href="css/afspraak.css">
    <link rel="icon" href="img/Gemeente Logo.png" type="image/x-icon">
    <style>
    #center {
        text-align: center;
        width: 80%;
    }
    .afspraken {
        width: 50%;
        float: center;
        border-style: outset;
        border-color: maroon;
        background-color: #d8e9f5;
        text-align: center;
        margin-left: auto;
        margin-right: auto;

        
    }
    body {
        width: 96%;
        margin-left: auto;
        margin-right: auto;
        background-color: maroon;

        
        
    }
</style>
</head>
<body>

<?php
$bestanden = glob("afspraken/" . "*.html");
$nieuwstebestand = count($bestanden) - 1;
$bestandinhoud = file_get_contents($bestanden[$nieuwstebestand]);
echo $bestandinhoud; ?>

<!-- Alles hier boven niet verwijderen -->




