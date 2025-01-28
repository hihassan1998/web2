<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Sida 2</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
<?php include '../../includes/menu.php' ?>

    <h1>Välkommen till Sida 2</h1>
    <p>Denna sida arbetar med arrayer och låter användaren mata in information om bondgårdsdjur.</p>
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
            $_POST['animal1'] ?? '',
            $_POST['animal2'] ?? '',
            $_POST['animal3'] ?? ''
        ];
        echo "<pre>";
        print_r($farmAnimals);
        echo "</pre>";

        $farmAnimals[2] = "Struts";
        $farmAnimals[] = "Alpacka";
        array_shift($farmAnimals);

        echo "<pre>";
        print_r($farmAnimals);
        echo "</pre>";

        echo "Andra djuret är nu: " . $farmAnimals[1];
    }
    ?>
    <?php include '../../includes/footer.php' ?>
</body>
</html>
