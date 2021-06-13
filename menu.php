<html>
<head><title>Menu Driven</title></head>
<body style="background-image: url('h3.jpg');color:tomato">
<center>
     <h2>
        String Operations
    </h2>
     
    <form method="post">
        <input type="text" name="txt" placeholder="Enter the String" required />
        <br><br>
        <td><select name="opt" required>MCA,MBA, M.Tech, MSc
                    <option value="Reverse">Reverse </option>
                    <option value="Length">Lenght</option>
                    <option value="SubString">SubString</option>
                    <option value="Upper">Upper Case</option>
                    <option value="Lower">Lower Case</option>
                    <option value="Words">Words</option>
        <br><br>
        <input type="submit" name="submit" value="Submit"/>
    </form>

 
<?php   
    if($_POST)  
    {   
        $string =$_POST['opt'];
        $txt = $_POST['txt'];

        switch($string){
            case 'Reverse': $rev = strrev($txt);
                            echo 'The reversed string of '. $txt. ' is: '. $rev;
                            break;
            case 'Length': $len = strlen($txt);
                            echo "The length of the string ".$txt. " is: ". $len;
                            break;
            case 'SubString':$sub = substr($txt, 2, 13);
                            echo "The substring of the string ".$txt. " is: ". $sub;
                            break;
            case 'Upper': $up = strtoupper($txt);
                            echo "The string ".$txt. " in uppercase is: ". $up;
                            break;
            case 'Lower':$low = strtolower($txt);
                            echo "The string ".$txt. " in lowercase is: ". $low;
                            break;
            case 'Words':$wrd = str_word_count($txt);
                            echo "The number of words in the string ".$txt. " is: ". $wrd;
                            break;

        }
       
    }     
?> 
</center>
</body>
</html>

