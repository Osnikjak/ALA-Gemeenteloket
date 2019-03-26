<header>
    <div id="top">
        <a href="index.php"><img src="assets/img/Gemeente Logo.png" alt="Lansingerland" style="padding-left:50px" width="230px;"></a>
    </div>
    <nav>
        <ul>
            <li <?php if ($thisPage == 'home') echo 'class="active"';  ?>><a href="index.php"><img src="assets/img/icons/home.png" alt="home" width="20px"/> Startpagina</a></li> 
            <li <?php if ($thisPage == 'afspraak') echo 'class="active"'; ?>><a href="afspraak.php"><img src="assets/img/icons/folder.png" alt="folder" width="20px"/> Afspraak maken</a></li>
            <li <?php if ($thisPage == 'loket') echo 'class="active"'; ?>><a href="loket.php"><img src="assets/img/icons/file.png" alt="file" width="20px"/> Loket</a></li>
            <li <?php if ($thisPage == 'toerisme') echo 'class="active"'; ?>><a href="toerisme.php"><img src="assets/img/icons/camera.png" alt="camera" width="20px"/> Tourists page</a></li>
        </ul>
    </nav>
    <img id="banner" src="assets/img/border2.png" alt="banner"/>
</header>