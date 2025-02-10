<?php
// page title
$title = "Sida 3";
include '../../includes/header.php';
?>

<div class="main-content center-content">

    <h1>Välkommen till Sida 5</h1>
    <br>
    <p>Denna sida presenterar information om servernamn, användarens IP-adress, filnamnet på PHP-sidan, portnummer och HTTP-metoden som använts.</p>
    <br>
    <!-- <hr> -->
    <br>
    <hr>
    <br>
    <!-- (Form used for ease in styling of container and) displaying server-related information -->
    <h2>Serverinformation</h2>

        <!-- Server information section -->
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