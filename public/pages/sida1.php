<!-- Including the header.php to include menu bar and responzive meta data -->
<?php 
// page title
$title = "Sida 1"; 
include '../../includes/header.php';
?>




<!-- main content styled to take most vh of the page with the main content -->

<div class="main-content center-content">

    <h1>Välkommen till Sida 1</h1>
    <p>Denna sida demonstrerar PHP-stränghantering genom att ta emot ett namn från användaren och visa det i olika format, inklusive omvänd ordning, gemener, versaler och antal tecken. Den visar också hur man inkluderar gemensamma element som header och footer för att skapa en dynamisk webbplats.</p>

    <br>

    <hr>

    <h2>PHP Stränghantering</h2>
    <p><?php echo "Denna text är genererad med utskriftskommandot i PHP."; ?></p>
    <!-- including the form to be submitted by post request -->
    <form method="POST">
        <label for="name">Ange ditt namn:</label>
        <input type="text" id="name" name="name">
        <button type="submit">Skicka</button>
    </form>
    <p>
        <!-- serverside code for form handleing -->
        <?php
        // Check if the form has been submitted via POST and if the "name" field exists in the submitted data
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"])) {
            // Trim name to remove whitespace around the input
            $strName = trim($_POST["name"]);

            // Default value of my name if empty
            if (empty($strName)) {
                $strName = "Hassan";
            }
            // echo '<b>The varible of strNAme is: </b>';
            // var_dump($strName);

            echo '<div class="print-r-box cont">';
            echo "<p> <b>Hej, </b> $strName</p>";
            echo "<p> <b>Baklänges:</b> " . strrev($strName) . "</p>";
            echo "<p> <b>Gemener:</b> " . strtolower($strName) . "</p>";
            echo "<p> <b>Versaler:</b> " . strtoupper($strName) . "</p>";
            echo "<p> <b>Antal tecken:</b> " . strlen($strName) . "</p>";
            echo '</div>';
        }
        ?>

    </p>

</div>

<?php include '../../includes/footer.php' ?>