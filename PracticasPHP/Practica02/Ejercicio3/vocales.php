<?php

//echo "value: " . $_POST["inputField"] . "\n";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = strtolower($_POST["inputField"]);
} else {
    $input = "";
}
preg_match_all("/[aeiou]/i", $input, $matches);

$count = count($matches[0]);


?>
<p>el total de vocales son: <?php echo $count;?></p>

