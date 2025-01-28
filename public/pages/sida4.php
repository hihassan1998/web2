<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Sida 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include '../../includes/menu.php' ?>

    <h1>Välkommen till Sida 4</h1>
    <p>Denna sida illustrerar sortering av en lista.</p>
    <?php
    $numbers = [4, 2, 8, 1, 9, 3, 7, 5, 6];
    echo "<p>Ursprunglig lista: " . implode(", ", $numbers) . "</p>";

    sort($numbers);
    echo "<p>Sorterad lista (stigande): " . implode(", ", $numbers) . "</p>";

    rsort($numbers);
    echo "<p>Sorterad lista (fallande): " . implode(", ", $numbers) . "</p>";
    ?>
    <?php include '../../includes/footer.php' ?>

</body>
</html>
