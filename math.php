<!DOCTYPE html>
<html>
<body>

<?php

echo (2 * 3)."<br>";            // Basic Arithmetic: +, -, /, *
echo (2**3)."<br>";             // Basic Arithmetic: +, -, /, *
echo (10 % 3)."<br>";           // Modulus Op. : returns remainder of 10/3
echo (1 + 2 * 3)."<br>";        // order of operations
echo (10 / 3.0)."<br><br>";     // int's and doubles


$num = 10;
$num += 100;                    // +=, -=, /=, *=
echo $num."<br>";

$num++;
echo $num."<br><br>";

// useful math methods
echo max(2, 3)."<br>";
echo sqrt(144)."<br>";
echo round(2.7)."<br>";

?>

</body>
</html>