<?php
    $firstInput = floatval($_POST["num1"] ?? 0);
    $secondInput = floatval($_POST["num2"] ?? 0);
    $operator = $_POST["operator"] ?? null;

switch ($_POST["operator"]) {
    case "sum":
        echo "<p>" . $firstInput+$secondInput . "</p>";
        break;
    case "subtract":
        echo "<p>" . $firstInput-$secondInput . "</p>";
        break;
    case "multiply":
        echo "<p>" . $firstInput*$secondInput . "</p>";
        break;
    case "divide":
        echo "<p>" . $firstInput/$secondInput . "</p>";
        break;
}