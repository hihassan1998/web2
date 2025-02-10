<?php include '../../includes/header.php' ?>

<head>
    <title>Sida 5</title>
</head>

<body>

    <div class="main-content center-content">

        <h1>Välkommen till Sida 5</h1>
        <br>
        <p>Denna sida presenterar information om servernamn, användarens IP-adress, filnamnet på PHP-sidan, portnummer och HTTP-metoden som använts.</p>
        <br>
        <!-- <hr> -->
        <br>
        <hr>
        <br>
        <h2>Serverinformation</h2>
        <form class='cont'>
            <!-- <hr> -->
            <p><b>Servernamn:</b> <?= $_SERVER['SERVER_NAME'] ?></p>
            <p><b>IP-adress:</b> <?= $_SERVER['REMOTE_ADDR'] ?></p>
            <p><b>Filnamn:</b> <?= $_SERVER['SCRIPT_NAME'] ?></p>
            <p><b>Port:</b> <?= $_SERVER['SERVER_PORT'] ?></p>
            <p><b>HTTP-metod:</b> <?= $_SERVER['REQUEST_METHOD'] ?></p>
        </form>

    </div>

    <?php include '../../includes/footer.php' ?>