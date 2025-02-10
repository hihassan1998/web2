<?php include '../../includes/header.php';

$numbers = [4, 2, 8, 1, 9, 3, 7, 5, 6];
echo "<p>Ursprunglig lista: " . implode(", ", $numbers) . "</p>";

sort($numbers);
echo "<p>Sorterad lista (stigande): " . implode(", ", $numbers) . "</p>";

rsort($numbers);
echo "<p>Sorterad lista (fallande): " . implode(", ", $numbers) . "</p>";
?>

<head>
    <title>Sida 4</title>
</head>


<div class="main-content">

    <h1>Välkommen till Sida 4</h1>
    <p>Denna sida illustrerar sortering av en lista.</p>
</div>




<?php include '../../includes/footer.php' ?>