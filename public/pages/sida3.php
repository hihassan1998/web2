<?php
// page title
$title = "Sida 3";
include '../../includes/header.php';

?>



<div class="main-content center-content">

    <h1>Välkommen till Sida 3</h1>
    <p>Denna sida demonstrerar loopar och villkorssatser i PHP.</p>
    <p>Denna sida låter användaren mata in en lista av ord och ett sökord. Genom att använda loopar och villkorssatser i PHP analyseras inmatningen för att hitta och räkna förekomsten av sökordet i listan. Resultatet visar på vilka positioner ordet förekommer och hur många gånger det hittades.</p>

    <br>
    <hr>
    <br>
    <form method="post">
        <label for="words">Ange ord (separera med mellanslag):</label><br>
        <input type="text" id="words" name="words"><br>
        <label for="searchWord">Sökord:</label><br>
        <input type="text" id="searchWord" name="searchWord"><br>
        <button type="submit">Skicka</button>
        <br><br>
        <?php
        // Check if the form has been submitted using POST method

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $words = explode(" ", $_POST['words'] ?? '');
            $searchWord = $_POST['searchWord'] ?? '';
            // Display the array of words entered by the user
            echo "<pre class='cont'>";
            print_r($words);
            echo "</pre>";

            $positions = [];
            foreach ($words as $index => $word) {
                if ($word === $searchWord) {
                    $positions[] = $index + 1;
                }
            }
            // Check if any positions were found for the search word
            if (!empty($positions)) {
                // Output the results if the search word was found in the list
                echo "<h2>PHP Resultat:</h2>";
                echo "Ordet '{$searchWord}' finns på plats: " . implode(", ", $positions) . "<br>";
                echo "Ordet '{$searchWord}' hittades " . count($positions) . " gånger.";
            } else {
                echo "Ordet '{$searchWord}' hittades inte.";
            }
        }
        ?>
    </form>

</div>
<?php

?>
<?php include '../../includes/footer.php' ?>