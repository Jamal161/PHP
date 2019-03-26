<!DOCTYPE html>
<html>
<body>


<form action="site.php" method="GET">
     Color: <input type="text" name="color">
     Plural Noun: <input type="text" name="pluralNoun">
     Celebrity: <input type="text" name="celebrity">
     <input type="submit">
</form>

<?php
     $color = $_GET["color"];
     $pluralNoun = $_GET["pluralNoun"];
     $celebrity = $_GET["celebrity"];

     echo "Roses are $color";
     echo "$pluralNoun are blue";
     echo "I love $celebrity";
?>



</body>
</html>