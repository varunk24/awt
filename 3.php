<?php
$rand=rand();
$val=sqrt($rand);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Square root</title>
</head>

<body>
    <form method="post" action="3.php">
    <input type="number"name="numb">
    <input type="submit" name="submit">
    </form>
    <?php
if(isset($_POST))
{
    if(isset($_POST['numb']))
    {
    $val=intval($_POST['numb']);
    $val1=$val;
    $rev=0;
    $sum=0;
    while($val1!=0)
    {
        $rev1=$val1%10;
        $val1=intdiv($val1,10);
        $rev=$rev*10+$rev1;
     
        $sum=$sum+$rev1;
    }

  
}
}
?>
    <h2>Reverse of the number : <?php echo $rev?></h2>
    <h2>Sum of digits of the number : <?php echo $sum?></h2>
    <?php 
    if($val==$rev)
    {?>
       <h2>Number is a palindrome </h2> 
    <?php }
    else{
        ?>
        <h2>Number is not a palindrome </h2> 
    <?php }
    ?>

</body>

</html>

