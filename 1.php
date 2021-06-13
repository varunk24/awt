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
    <h3>Random Number: <?php echo $rand ?> </h3>
    <h3> Square Root of Random Number: <?php echo $val ?> </h3>
</body>

</html>