<?php 
// page title
$title = "Sida 3"; 
include '../../includes/header.php';


// Function which calculates the area of shape
function calculateArea($length, $width)
{
    return $length * $width;
}

// Function which calculates the circumference of the shape
function calculateCircumference($length, $width)
{
    $circumference = 2 * ($length + $width);
    $area = calculateArea($length, $width);
    return [$circumference, $area];
}
// initialize values so that the circumference and areas can be printied in html side

$circumference = null;
$area = null;
// $length = null;
// $width = null;


?>


<div class="main-content center-content">

    <h1>Välkommen till Sida 4</h1>
    <p>Denna sida beräknar en rektangels area med funktionen <code>calculateArea()</code> och omkretsen med <code>calculateCircumference()</code>.</p>
    <p>Användaren kan mata in värden i formuläret och trycka på "Beräkna" för att se svaret på HTML-sidan, beräknat på serversidan.</p>
    <p>Om ogiltiga värden, såsom 0 eller negativa tal, matas in, visas ett felmeddelande som uppmanar användaren att ange giltiga värden.</p>

    <br>
    <hr>
    <br>
    <h2>Beräkna omkrets och area</h2>
    <form method="post">
        <label for="length">Längd (cm):</label>
        <input type="number" id="length" name="length" step="0.1" required><br>

        <label for="width">Bredd (cm):</label>
        <input type="number" id="width" name="width" step="0.1" required><br>

        <button type="submit">Beräkna</button>

        <br>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $length = isset($_POST['length']) ? (float)$_POST['length'] : 0;
            $width = isset($_POST['width']) ? (float)$_POST['width'] : 0;

            if ($length > 0 && $width > 0) {
                list($circumference, $area) = calculateCircumference($length, $width);
            } else {
                echo "<p style='color: red;'>Ange giltiga värden för längd och bredd.</p>";
            }
        }
        ?>


        <?php if ($circumference !== null && $area !== null): ?>
            <hr>
            <h2>Resultat:</h2>
            <p>Inmatat Längd: <?= $length ?> cm</p>
            <p>Inmatat Bredd: <?= $width ?> cm</p>
            <p><b>Omkrets: </b><?= $circumference ?> cm</p>
            <p><b>Area: </b><?= $area ?> cm²</p>
        <?php endif; ?>
    </form>



</div>




<?php include '../../includes/footer.php' ?>