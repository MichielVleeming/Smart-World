<html>
    <head>
        <?php
        session_start();
            include '../includes/header.php';
            include '../includes/sentry.php';
            $stad = $_SESSION['city'];
        ?>
    </head>
    <body>
    <div class="container">
        <p><b>Monitoringssysteem verkeersveiligheid voor gemeenten in Oost-Nederland</b></p>
        <p>Het ROV Oost-Nederland heeft met deze verkeersveiligheidsmonitor het initiatief genomen om een monitoringssysteem te ontwikkelen voor de verkeersveiligheid op gemeentelijk niveau. Het doel van het systeem is om gemeenten, provincie en ROV te helpen ‘verkeersveiligheidswerk beter te kunnen doen’. Door beter inzicht te krijgen in de huidige stand van zaken en efficiënte verbetermogelijkheden, door van elkaar te leren en zo juiste keuzes te maken in uit te voeren maatregelen, zelfstandig of samen met andere actoren die ook verantwoordelijk zijn voor verkeersveiligheid.</p>
            
        <p><b>De verkeersveiligheidspiramide</b></p>
        <p> Het systeem is opgezet volgens het basismodel van de verkeersveiligheidspiramide. Deze verbindt de werkvelden mens (veilig gedrag), weg (veilig ingerichte wegen) en voertuig (veilige voertuigen) en legt ook verbindingen tussen beleid en uitvoering. In de opeenvolgende lagen zijn ongevallengegevens opgenomen, maar vooral ook informatie over onderliggende processen die leiden tot onveiligheid en ongevallen. Uitgedrukt in de kwaliteit van de weginrichting, verkeersgedrag, de samenstelling van het voertuigenpark, burgeroordelen, beleidsmatige aandacht voor verkeersveiligheid, uitgevoerde maatregelen, en kenmerken van bevolking, wegennet en voertuigenpark. De top van de piramide geeft de maatschappelijke kosten ten gevolge van de verkeersongevallen weer.</p>
        <p><b>Verkeersveiligheidsprofiel voor elke gemeente</b></p>
        <p>Elke gemeente heeft een verkeersveiligheidsprofiel dat is opgebouwd rondom de structuur van de piramide. Dat profiel bestaat uit een set indicatoren op elke laag. Deze set is zorgvuldig geselecteerd met als criteria: relevantie voor verkeersveiligheid (direct of indirect) en beschikbaarheid van data op gemeentelijk niveau.  Via ‘mijn rapporten’ komt u bij het profiel voor uw gemeente en de achterliggende gegevens. U kunt vergelijkingen maken met selecties van andere gemeenten of regionale en provinciale gemiddelden. Ook kunt u uw prestaties over meerdere jaren volgen. Via ‘mijn analyse’ kunt u ook direct doorklikken naar de achterliggende gegevens.</p>
        <p><b>Bronnen</b></p>
        <p> De datasets zijn gevuld met data uit:
            Bestand geRegistreerde Ongevallen in Nederland (BRON)
            Kwaliteitsinstituut Nederlandse Gemeenten (KING)
            Gemeentelijke enquête verkeersveiligheid van ROV Oost-Nederland
            CROW Fietsberaad
            Ministerie van Veiligheid en Justitie (CJIB)
            Centraal Bureau voor de Statistiek (CBS-statline)
            Bij de grafische weergave van elke indicator is ook de bron aangeduid.
            Jaarlijkse update
            De datasets voor alle gemeenten zullen jaarlijks worden aangevuld met de gegevens van het afgelopen jaar. Nieuwe ontwikkelingen in de beschikbare data zullen ook in deze updates worden meegenomen. De updates zullen tijdig met u worden gecommuniceerd.</p>
            <?php include '../includes/modaliteitsmenu.php' ?>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="dashboard">
            <a href="monitor.php"style="font-size:16px; color:black;">Dashboard<i class="fa fa-bar-chart" style="font-size:36px; color:black;"></i></a><br>
        </div>
        <div class="piramide">
            <a href="monitor.php"style="font-size:16px; color:black;">Piramide&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-search" style="font-size:36px; color:black;"></i></a><br>
        </div>
    </div>
</body>
    <?php
        include '../includes/footer.php';
    ?>
</html>

