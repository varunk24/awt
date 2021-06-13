<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>program5</title>
</head>
<body>
    <h1>Calculator</h1>
    <form method="post">
    <label>Number 1</label>
    <input type="number" name="numb1" style="margin:5px;width:50px;padding:5px">
    <br>
    <label>Operation</label>
    <select name="optn">
    <option value="+">Add</option>
    <option value="-">Subtraction</option>
    <option value="*">Multiply</option>
    <option value="/">Divide</option>
    </select>
    <br>
    <label>Number 2</label>
    <input type="number"  name="numb2" style="margin:5px;width:50px;padding:5px">
    <br><input type="submit" name="submit" value="Submit">
    
    </form>
    <?php
        if(isset($_POST['submit'])){
            $num1=intval($_POST['numb1']);
            $num2=intval($_POST['numb2']);
            $val=0;
            $optn=$_POST['optn'];
            switch($optn){
                case '+': $val=$num1+$num2;
                          break;
                case '-': $val=$num1-$num2;
                          break;
                case '*': $val=$num1*$num2;
                          break;
                case '/': $val=$num1/$num2;
                          break;
            }
        ?>
        <h1>The value is <?php echo $val ?></h1>
        <?php
        }

    ?>
    
</body>
</html>