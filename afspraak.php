<?php $thisPage = 'afspraak'; ?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="De website van de gemeente Lansingerland">
    <meta name="keywords" content="Gemeenteloket, Gemeente Lansingerland, Gemeente">
    <meta name="author" content="Damian Zanoni, Thomas Jacoby">
    <title>Afspraak maken &#124; Gemeente </title>
    <link rel="stylesheet" href="assets/css/afspraak.css">
    <link rel="icon" href="assets/img/GemeenteIcon.png" type="image/x-icon">
</head>
<body>
    <?php include('assets/header.php'); ?>
    <section id="content">
        <h1>Afspraak maken</h1>
        <h3>Vul uw gegevens in het onderstaand formulier.</h3>
        <form name="contactform" method="post" action="assets/sendmail.php">
            <table>
                <tbody>
                    <tr>
                        <td><label for="voornaam">Voornaam:</label></td>
                        <td><input  type="text" name="voornaam" size="30"/></td>
                    </tr>
                    <tr>
                        <td><label for="achternaam">Achternaam:</label></td>
                        <td><input  type="text" name="achternaam" size="30"/></td>
                    </tr>
                    <tr>
                        <td><label for="email">Emailadres:</label></td>
                        <td><input  type="email" name="email" size="30"/></td>
                    </tr>
                        <td><label for="telefoon">Telefoonnummer:</label></td>
                        <td><input  type="tel" name="telefoon" size="30"/></td>
                    </tr>
                    <tr>
                        <td><label for="type">Type afspraak:</label></td>
                        <td>
                            <select name="type">
                                <option value="Paspoortaanvraag">Paspoortaanvraag</option>
                                <option value="Kapvergunningaanvraag">Kapvergunningaanvraag</option>
                                <option value="Bevolkingsregistratie">Bevolkingsregistratie</option>
                                <option value="Overige">Overige</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="datum">Voorgestelde datum <strong>in cijfers</strong> (dag/maand/jaar):</label></td>
                        <td><input name="datum" id="datum" type='date' min='2019-01-01' max='2019-12-31'> </td>
                    </tr>
                    <tr>
                        <td><label for="time">Voorgestelde tijd tussen 8:30 & 17:00 : </label></td>
                        <td><input type="time" id="time" name="time" min="8:30" max="17:00" required></td>
                    <tr>
                        <td><label for="opmerkingen">Opmerkingen:</label></td>
                        <td><textarea  name="opmerkingen" cols="40" rows="5"></textarea></td>
                    </tr>
                </tbody>
            </table>
            <p><strong>Controleer de ingevoerde informatie.</strong> Als er iets niet klopt wordt de afspraak mogelijk niet doorgevoerd.</p>
            <p>U ontvangt een bevestigingsmail met de gegevens. Indien dit niet het geval is, controleert u ingevoerde gegevens nogmaals.</p>
            <input type="submit" value="Submit"/>
        </form>

    </section>
    <div class="height"></div>
    <?php include('assets/footer.php'); ?>
</body>
</html>
