<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>program 13</title>
</head>
<body>
    <form method="post">
    <label>Number</label>
    <input type="number" name="numb">
    <input type="submit" name="submit">
    </form>
    <?php
        function fact($num){
            if(intval($num)==0){
                return 1;
            }elseif(intval($num)==1){
                return 1;
            }else{
                return intval($num)*fact(intval($num)-1);
            }
        }
        if(isset($_POST['submit'])){
            $numb=$_POST['numb'];
            $val=fact($numb);
            echo "<h2>The factorial of $numb is $val</h2>";
        }
    ?>
</body>
</html>