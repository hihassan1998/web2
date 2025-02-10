<?php
// page title
$title = "Sida 2";
include '../../includes/header.php';
?>




<div class="main-content center-content">

    <h1>Välkommen till Sida 2</h1>
    <p>Denna sida arbetar med arrayer och låter användaren mata in information om bondgårdsdjur.</p>
    <p>Fyll i namnen på tre bondgårdsdjur i formuläret nedan, och vi kommer att bearbeta informationen och visa den i olika format.</p>
    <br>
    <hr>
    <br>
    <form method="post">
        <label for="animal1">Djur 1:</label><br>
        <input type="text" id="animal1" name="animal1"><br>
        <label for="animal2">Djur 2:</label><br>
        <input type="text" id="animal2" name="animal2"><br>
        <label for="animal3">Djur 3:</label><br>
        <input type="text" id="animal3" name="animal3"><br>
        <button type="submit">Skicka</button>
    </form>


    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $farmAnimals = [
            // Create an array with the entered animal names (using POST values or empty strings as default)
            $_POST['animal1'] ?? '',
            $_POST['animal2'] ?? '',
            $_POST['animal3'] ?? ''
        ];
        // Output the farm animals array in a readable format
        $output = print_r($farmAnimals, true);
        echo '<div class="print-r-box cont"><code>' . $output . '</code></div>';

        // Change the third animal in the array to "Struts"

        $farmAnimals[2] = "Struts";
        // Add a new animal "Alpacka" to the end of the array

        $farmAnimals[] = "Alpacka";
        echo "Andra djuret i början är: " . $farmAnimals[1];
        // Output the farm animals array in a readable format
        array_shift($farmAnimals);
        $output = print_r($farmAnimals, true);
        echo '<div class="print-r-box cont"><code>' . $output . '</code></div>';
        echo "<h2>PHP Resultat:</h2>";
        echo "Andra djuret är nu: " . $farmAnimals[1];
    }
    ?>
</div>

<?php include '../../includes/footer.php' ?>