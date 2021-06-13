<html>  
<head>  
<title>Factorial </title>  
</head>  
<body style="background-image: url('h3.jpg');color:tomato" >  
<center>
    <h1>Factorial Number </h1>
<form method="post">  
    Enter the Number:<br>  
    <input type="number" name="number" id="number">  
    <input type="submit" name="submit" value="Submit" />  
</form>  

<?php   
    if($_POST){  
        $fact = 1;  
       
        $number = $_POST['number'];  
        echo "Factorial of $number:<br><br>";  
         
        for ($i = 1; $i <= $number; $i++){         
            $fact = $fact * $i;  
            }  
            echo $fact . "<br>";  
    }  
?>  </center>
</body>  
</html>  