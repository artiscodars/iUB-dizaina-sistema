<nav>
    <ul class="menu" id="menu">

        <li><a href="/piemeri/sakums.php" class="topnav <?php if ($title == "Publikāciju vadības sistēma" )  {echo 'active';} ?>"><i class="ri-home-line"></i> <txt>Sākums</txt></a></li>

        <li class="has-children">
            <span data-bs-toggle="collapse" data-bs-target="#iepirkumi" class="<?php if ($parent != "iepirkumi" ) { echo 'collapsed'; } else {echo 'active';} ?>" aria-expanded="false"><i class="ri-newspaper-line"></i>
                <txt>Publikācijas</txt>
            </span>

            <ul id="iepirkumi" class="collapse <?php if ($parent == "iepirkumi" && ($_COOKIE['minimenu']=="off" || $_COOKIE['minimenu']=="")) { echo 'show'; } ?>" data-bs-parent="#menu">
                <li><a class="nav <?php if ($saite == "/piemeri/publikaciju_saraksts.php") { echo "active"; } ?>" href="/piemeri/publikaciju_saraksts.php">Publikāciju saraksts</a></li>
                <li><a class="nav <?php if ($saite == "/piemeri/sadala.php") { echo "active"; } ?>" href="#">Sadaļa</a></li>

            </ul>

        </li>

        <li class="has-children">
            <span data-bs-toggle="collapse" data-bs-target="#adminriki" class="<?php if ($parent != "adminriki" ) { echo 'collapsed'; } else {echo 'active';} ?>" aria-expanded="false"><i class="ri-user-settings-line"></i>
                <txt>Administratora rīki</txt>
            </span>

            <ul id="adminriki" class="collapse <?php if ($parent == "adminriki" && ($_COOKIE['minimenu']=="off" || $_COOKIE['minimenu']=="")) { echo 'show'; } ?>" data-bs-parent="#menu">
                <li><a class="nav <?php if ($saite == "/piemeri/lietotaji.php") { echo "active"; } ?>" href="/piemeri/lietotaji.php">Lietotāji</a></li>
                <li><a class="nav <?php if ($saite == "/piemeri/organizacijas_profils.php") { echo "active"; } ?>" href="/piemeri/organizacijas_profils.php">Organizācijas profils</a></li>

            </ul>

        </li>

    </ul>

</nav>
