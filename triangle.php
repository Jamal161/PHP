<html>  
<body>  
<form method = "post">   
Base: <input type="number" name="base">   
<br><br>  
Height: <input type="number" name="height"><br>   
<input type = "submit" name = "submit" value="Calculate">   
</form>   
</body>   
</html>  
<?php   
if(isset($_POST['submit']))  
    {   
$base = $_POST['base'];   
$height = $_POST['height'];   
$area = ($base*$height) / 2;   
echo "The area of a triangle with base as $base and height as $height is $area";   
}   
?>  