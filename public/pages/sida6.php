<?php
// page title
$title = "Sida 6 - Formulär Resultat";
include '../../includes/header.php';

?>


<div class="main-content center-content">

    <h1>Välkommen till Sida 6 (Formulär Resultat)</h1>
    <p>Här ser du informationen från de två olika formulären, som skickades med GET och POST-metod.</p>
    <br>
    <hr>
    <a href="sida6.html">Länk till: Sida 6 - HTML Formulär</a>
    <hr>
    <br>

    <?php
    echo "<pre class='cont'>";
    // Check if data was sent via GET method and print on page
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['name']) && isset($_GET['phone'])):
        $name = htmlspecialchars($_GET['name']);
        $phone = htmlspecialchars($_GET['phone']);
        // Output the results to the screen of the user

        echo "<h2>GET Resultat:</h2>";
        echo "<p><b>Namn:</b> $name</p>";
        echo "<p><b>Telefonnummer:</b> $phone</p>";
    endif;

    // Check if data was sent via POST method and print on page
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name']) && isset($_POST['phone'])):
        $name = htmlspecialchars($_POST['name']);
        $phone = htmlspecialchars($_POST['phone']);
        // Output the results to the screen of the user
        echo "<h2>POST Resultat:</h2>";
        echo "<p><b>Namn:</b> $name</p>";
        echo "<p><b>Telefonnummer:</b> $phone</p>";
    endif;
    echo "</pre>";
    ?>

</div>
<?php include '../../includes/footer.php' ?>