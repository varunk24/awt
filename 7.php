<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>program 7</title>
</head>
<body>
    <form method="post">
    <label>Previous Reading</label>
    <input type="number"  name="prrd" style="margin:5px;width:50px;padding:5px">
    <br>
    <label>Current Reading</label>
    <input type="number"  name="crrd" style="margin:5px;width:50px;padding:5px">
    <input type="submit" name="submit" value="Calculate">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $cr=$_POST['crrd'];
            $pr=$_POST['prrd'];
            $units=$cr-$pr;
            $amt=0;
            if($units>300){
                $amt=$units*6;
            }
            elseif((200<$units) && ($units<=300)){
                $amt=$units*5;
            }
            elseif((100<$units) && ($units<=200)){
                $amt=$units*4;
            }
            else{
                $amt=$units*3;
            }
            echo "<br><h1>The Electricity Bill Is $amt";
        }
    ?>

</body>
</html>