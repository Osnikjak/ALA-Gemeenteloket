function verwerk(){
var aanvraag = document.getElementById("aanvraag").value;

	switch(aanvraag){
		case '0':
			document.getElementById('output').innerHTML = " ";
		break;
		case '1':
			document.getElementById('output').innerHTML = "Bedankt voor het aanvragen voor informatie over het Uittreksel Bevolkingsregister." + "<br />" + "<br />" + "Een uittreksel heeft u nodig bijvoorbeeld:" + "<br />" + "Voor een aanmelding op een school" + "<br />" + "Het sluiten van een huwelijk"  + "<br />" + "<br />" + "De kosten zijn 10 euro voor het uittreksel"  + "<br />" + "<br />" + "U kunt het uittreksel opvragen bij het gemeenteloket in Lansingerland:"  + "<br />" + "<br />" + "Gemeenteloket Lansingerland" + "<br />" + "2662 SB Bergschenhoek" + "<br />" + "14010" + "<br />" + "gemeentelansingerland.nl" + "<br/>" + "<br />" + "Elke dag geopend van 08:30 tot 17:00"  + "<br />";
		break;
		case '2':
			document.getElementById('output').innerHTML = "Bedankt voor het aanvragen voor informatie over de kapvergunning." + "<br />" + "<br />" + "Een vergunning heeft u nodig als:" + "<br />" + "De stamdoorsnede van de boom groter is dan 20 cm op 1.3 meter boven maaienveld." + "<br />" + "U een houtopstand met een oppervlakte van minimaal 100 m2 verwijderd" + "<br />" + "Als u een boom verplant."  + "<br />" + "<br />" + "Dit mag u alleen doen met uw eigen houtopstand, als het van een ander is moet u hier schriftelijk gemachtigd voor zijn." + "<br />" + "<br />" +  "De gemeente kan een verplichting opleggen om een nieuwe boom te planten, als dit nodig is geeft de gemeente u hier zo spoedig mogelijk informatie over." + "<br />" + "<br />" +  "De kosten zijn 56 euro voor een boom, en 30 euro voor elke opvolgende boom."  + "<br />" + "<br />" + "U kunt de vergunning opvragen bij het gemeenteloket in Lansingerland:"  + "<br />" + "<br />" + "Gemeenteloket Lansingerland" + "<br />" + "2662 SB Bergschenhoek" + "<br />" + "14010" + "<br />" + "gemeentelansingerland.nl" + "<br/>" + "<br />" + "Elke dag geopend van 08:30 tot 17:00"  + "<br />";
		break;
		case '3':
		    document.getElementById('output').innerHTML = "Bedankt voor het aanvragen voor informatie over een paspoort aanvragen.<br/><br/>Om uw paspoort aan te vragen moet u:<br/>Ingeschreven staan in de gemeente Wallonius<br/>Een Nederlandse nationaliteit hebben<br/>Een goede kleurenfoto meenemen<br/>Alle Nederlandse en buitenlandse reisdocumenten meenemen, of uw oude paspoort of identiteitskaart meenemen<br/><br/>De kosten zijn 51 euro tot 18 jaar, en 67 euro vanaf 18 jaar.<br/>Voor een identiteitskaart is het 29 euro tot 18 jaar en 50 euro vanaf 18 jaar<br/><br/>U kunt het paspoort opvragen bij het gemeenteloket in Lansingerland:<br/><br/>Gemeenteloket Lansingerland" + "<br />" + "2662 SB Bergschenhoek" + "<br />" + "14 010" + "<br />" + "gemeentelansingerland.nl" + "<br/>" + "<br />" + "Elke dag geopend van 08:30 tot 17:00"  + "<br />";
		break;
    }
		document.getElementById("output").style.display = "block";
}

var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("datefield").setAttribute("min", today);