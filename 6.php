<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>program 6</title>
</head>
<body>
    <h1>Fibonacci Series</h1>
    <form method="post">
    <label >Enter the range: </label>
    <input type="number" name="range">
    <br>
    <input type="submit" name="submit">
    <br>
    </form>
    <?php 
    
        if(isset($_POST['submit'])){
            $fibval=1; 
            $firstval=1;
            $n=intval($_POST['range']);
            $fibarr=[];
            for($i=0;$i<$n;$i++)
            {
            $fibarr[]=$fibval;
            $secondval=$fibval+$firstval;
            $fibval=$firstval;
            $firstval=$secondval;
            }
            ?>
            <h3>Fibonacci Series : <?php 
            foreach($fibarr as $ele){
                echo " '$ele', ";
            }
            ?> </h3>
            <?php
            $prmarr=[];
            foreach($fibarr as $ele){
                $flag=0;
                if(intval($ele)!=1){
                for($i=2;$i<intval($ele);$i++)
                {
                    if(intval($ele)%$i==0){
                        $flag=1;
                    }
                }
                if($flag==0){
                    $prmarr[]=$ele;
                }
            }
        }
            ?>
            <h3>Prime Numbers are : <?php
            foreach($prmarr as $ele){
                echo "'$ele', ";
            }?>
            </h3>
            <?php
        }
    ?>
    
</body>
</html>