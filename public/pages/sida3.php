<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Sida 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include '../../includes/menu.php' ?>

    <h1>Välkommen till Sida 3</h1>
    <p>Denna sida demonstrerar loopar och villkorssatser i PHP.</p>
    <form method="post">
        <label for="words">Ange ord (separera med mellanslag):</label><br>
        <input type="text" id="words" name="words"><br>
        <label for="searchWord">Sökord:</label><br>
        <input type="text" id="searchWord" name="searchWord"><br>
        <button type="submit">Skicka</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $words = explode(" ", $_POST['words'] ?? '');
        $searchWord = $_POST['searchWord'] ?? '';

        echo "<pre>";
        print_r($words);
        echo "</pre>";

        $positions = [];
        foreach ($words as $index => $word) {
            if ($word === $searchWord) {
                $positions[] = $index + 1;
            }
        }

        if (!empty($positions)) {
            echo "Ordet '{$searchWord}' finns på plats: " . implode(", ", $positions) . "<br>";
            echo "Ordet '{$searchWord}' hittades " . count($positions) . " gånger.";
        } else {
            echo "Ordet '{$searchWord}' hittades inte.";
        }
    }
    ?>
    <?php include '../../includes/footer.php' ?>

</body>
</html>
