<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>program 11</title>
</head>
<body>
    <h2>Item Store</h2>
    <form method="post">
    <label>Enter the item names :</label>
    <input type="text" name="names"><br><br>
    <label>Enter the item price :</label>
    <input type="text" name="price"><br><br>
    <input type="submit" name="store" value="Store">
    <input type="reset" name="reset">
    </form>
    <?php 
    if(isset($_POST['store'])){
        $name=explode(",",$_POST['names']);
        $price=explode(",",$_POST['price']);
        $cheap=0;
        $cost=0;
        for($i=1;$i<count($price);$i++){
            if(intval($price[$cheap])>intval($price[$i])){
                $cheap=$i;
            }
            if(intval($price[$cost])<intval($price[$i])){
                $cost=$i;
            }
        }?>
        <table style="border:1px black solid">
        <tr>
        <th>Item Name</th>
        <th>Item Cost</th>
        </tr>
        <?php
        for($i=0;$i<count($name);$i++){
         echo "<tr><td> $name[$i]</td>";
        echo "<td>$price[$i]</td></tr>";
        }
        echo "</table>";
        echo "<h3>Cheapest item is : $name[$cheap]</h3>";
        echo "<h3>Costliest item is : $name[$cost]</h3>";
    }
    ?>
</body>
</html>