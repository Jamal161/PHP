<html>  
<body>  
    <form method="post">  
        Enter the string: <input type="text" name="string">  
        <input type="submit" name="submit" value="Submit">  
    </form>  
</body>  
</html> 
<?php 
if(isset($_POST['submit']))  
    {  
        $string = $_POST['string']; 
  
$length = strlen($string);  
for ($i=($length-1) ; $i >= 0 ; $i--)   
{  
  echo $string[$i];  
	}
	} 
?> 