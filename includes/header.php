<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    </head>

    <body>

        <nav class="navbar">
            <ul>
                <li><a href="index.php" style="text-decoration:none; color:black;">Home</a></li>
                <li>Rapportages
                <ul class="dropdown">
                    <li>Piramides
                    <ul class="submenu">
                        <li><a href="monitor.php" style="color:black;">Piramide 2016</a></li>
                        <li><a href="monitor.php" style="color:black;">Piramide 2015</a></li>
                        <li><a href="monitor.php" style="color:black;">Piramide 2014</a></li>
                    </ul>
                    </li>
                <li>Tussenrapportage
                <ul class="submenu">
                    <li>Test</li>
                    <li>Test</li>
                    <li>Test</li>
                    <li>Test</li>
                </ul>
                </li>
                <li><a href="enquete.php" style="color:black;">Enquette</a></li>
                <li>Test</li>
                <li>Test</li>
            </ul>
            </li>
            <li>&nbsp;&nbsp;&nbsp;Analyse &nbsp;&nbsp;&nbsp;
            <ul class="dropdown">
                <li><a href="AutoMonitor.php" style="color:black;">Auto/bestelauto</a></li>
                    <li><a href="Bikemonitor.php" style="color:black;">Fiets/snorfiets</a></li>
                    <li><a href="Motormonitor.php" style="color:black;">Bromfietsen</a></li>
                </ul>
            </li>
            <li>Organisatie
            <ul class="dropdown">
                <li>Test</li>
                <li>Test</li>
                <li>Test</li>
            </ul>
            </li>
            <li>Informatie
            <ul class="dropdown">
                <li>Test</li>
                <li>Test</li>
                <li>Test</li>
            </ul>
            <li>
                <form action="../controller/loginController.php" method="post" style="color:black;">
                    <input type="hidden" name="action" value="logout">
                    <input type="submit" name="submit" value="Logout">
                </form>
            </li>
            </li>
            </ul>
        </nav>
    </body>
</html>