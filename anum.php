<html>  
<head>  
<title>Factorial </title>  
</head>  
<body style="background-image: url('h3.jpg');color:tomato" >  
<center>
    <h1>Amsrong  Number </h1>
    <form method="post">  
    Enter the Number:<br>  
    <input type="number" name="number" id="number">  
    <input type="submit" name="submit" value="Submit" />  
</form>  
<?php
 $number = $_POST['number'];  
 if($_POST){  
    $sum = 0; 
    $x = $number; 
    while($x != 0) 
    { 
        $rem = $x % 10; 
        $sum = $sum + $rem*$rem*$rem; 
        $x = $x / 10; 
    } 
     
    
    if ($number == $sum)
    {
        echo "Number $number is armstrong";
    }
    else{
 echo "Number $number is not-armstrong";
    }
  
   
}
    
?>
<center>
</body>  
</html>  