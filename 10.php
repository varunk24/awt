<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>program 10</title>
</head>
<body>
    <h2>String Functions</h2>
    <form method="post">
    <label>Enter String :</label>
    <input type="text" name="str"><br><br>
    <ol >
    <li>Reversing the string</li>
    <li>Finding the length of the string</li>
    <li>Coverting to uppercase</li>
    <li>Coverting to lowercase</li>
    <li>Counting the number of words</li>    
    </ol>
    <label>Enter your choice</label>
    <input type="number" name="choice"><br>
    <input type="submit" name="submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $c=$_POST['choice'];
            $str=$_POST['str'];
            
            switch($c){
                case 1: $output=strrev($str);
                        break;
                case 2: $output=strlen($str);
                        break;
                case 3: $output=strtoupper($str);
                        break;
                case 4:  $output=strtolower($str);
                        break;
                case 5: $output=str_word_count($str);
            }    
            echo "Result : $output";   
        }
    ?>
</body>
</html>