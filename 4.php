<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>program 4</title>
</head>
<body>
    <h1>Armstrong Numbers</h1>
    <form method="post" action="4.php">
    <input type="number" name="numb">
    <input type="submit" name="submit">
    <?php
    if(isset($_POST['submit']))
    {
        $val=intval($_POST['numb']);
        $sum=0;
        $val1=$val;
        $y=strlen(strval($val));
        while($val1!=0)
        {
            $x=$val1%10;
            $val1=intdiv($val1,10);
            $x1=$x;
            for($i=1;$i<$y;$i++)
            {
                $x1=$x*$x1;
            }
            $sum=$sum+$x1;
            
        }
    }
    ?>
    <?php 
    if($val==$sum){
        ?>
        <h1>The number <?php echo $val ?> is Armstrong </h1>
    <?php
    }
    else{
        ?>
         <h1>The number <?php echo $val ?> is not Armstrong </h1>
    <?php
    }

    ?>
</body>
</html>