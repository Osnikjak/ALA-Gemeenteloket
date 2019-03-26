Verzoek verzonden, u kunt teruggaan naar de vorige pagina.
<?php
$to = $_POST['email'];
$to_name = $_POST['voornaam'] . ' ' . $_POST['achternaam'];
$subject = 'Betreft: Afspraak ' . $_POST['type'];
$info = array();
$info['telefoon'] = $_POST['telefoon'];
$_SESSION['datum'] = $_POST['datum'];
$info['time'] = $_POST['time'];
$info['opmerkingen'] = $_POST['opmerkingen'];
$info['achternaam'] = $_POST['achternaam'];


$content = '
<div class="afspraken">
<div style="text-align: center;">
    <img src="img/Gemeente Logo2.png" alt="Gemeente Lansingerland" width="200px"/>
    <h1>' . $subject . '</h1>
</div>
<p>Geachte meneer/mevrouw, </p>' . $info['achternaam'] . ' <br/><br/>
Hierbij uw afspraaksbevestiging. Uw gegevens zijn als volgt:<br/><br/>
<strong>Telefoonnr. :</strong> ' . $info['telefoon'] . '<br/>
<strong>Voorgestelde datum:</strong> ' . $_SESSION['datum'] . '<br/>
<strong>Voorgestelde tijd:</strong> ' . $info['time'] . '<br/>
<strong>Opmerkingen:</strong><br/><em>' . $info['opmerkingen'] . '</em><br/><br/>
U wordt nog op opgegeven nummer gebeld om de datum en tijd te bevestigen.<br/><br/>
Hoogachtend,<br/><br/>
Gemeente Lansingerland<br/>
Tobias Asserlaan 1 <br/>
2662 SB Bergschenhoek <br/>
079-3025134<br/>
www.gemeentelansingerland.nl
</p>
</div>
';

$file = microtime(true).".html";
$saved_file = fopen("afspraken/" . $file,"a");
fwrite($saved_file, $content);
fclose($saved_file);
header("location: afspraken.php");

