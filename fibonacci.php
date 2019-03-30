<html>  
<body>  
    <form method="post">  
        Enter the series upto elements: <input type="text" name="num">  
        <input type="submit" name="submit" value="Submit">  
    </form>  
</body>  
</html> 
<?php  
if(isset($_POST['submit']))  
    {  
        $num = $_POST['num'];
	
/* Recursive function for fibonacci series. */  
function series($num){  
    if($num == 0){  
    return 0;  
    }else if( $num == 1){  
return 1;  
}  else {  
return (series($num-1) + series($num-2));  
}   
}  
/* Call Function. */  
for ($i = 0; $i < $num; $i++){  
echo series($i);  
echo "\n"; 
} 
}  