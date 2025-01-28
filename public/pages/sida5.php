<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Sida 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include '../../includes/menu.php' ?>

    <h1>Välkommen till Sida 5</h1>
    <p>Denna sida demonstrerar användningen av funktioner i PHP.</p>
    <?php
    function calculateSum($array) {
        return array_sum($array);
    }

    function calculateAverage($array) {
        return count($array) > 0 ? array_sum($array) / count($array) : 0;
    }

    $numbers = [5, 10, 15, 20, 25];
    echo "<p>Lista av tal: " . implode(", ", $numbers) . "</p>";
    echo "<p>Summan av talen: " . calculateSum($numbers) . "</p>";
    echo "<p>Medelvärdet av talen: " . calculateAverage($numbers) . "</p>";
    ?>
<?php include '../../includes/footer.php' ?>

</body>
</html>
