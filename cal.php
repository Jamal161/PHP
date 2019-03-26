<!DOCTYPE html>
<html>
<body>


<form action="site.php" method="GET">
     Num1: <input type="number" name="num1">
     Operator: <input type="text" name="op">
     Num2: <input type="number" name="num2">
     <input type="submit">
</form>

<?php
     $num1 = $_GET["num1"];
     $num2 = $_GET["num2"];
     $op = $_GET["op"];

     if($op == "+"){
          echo $num1 + $num2;
     } elseif($op == "-"){
          echo $num1 - $num2;
     } elseif($op == "/"){
          echo $num1 / $num2;
     } elseif($op == "*"){
          echo $num1 * $num2;
     } else {
          echo "Invalid Operator";
     }
?>


</body>
</html>