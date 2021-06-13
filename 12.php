<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>program 12</title>
    <style>
                table,
                td,
                th {
                    border: black 1px solid;
                }
            </style>
</head>
<body>
<h1>Please select item</h1>
    <form  method="post">
        <select name="item" >
            <option value="pen">Pen</option>
            <option value="pencil">Pencil</option>
            <option value="book">Book</option>
            <option value="eraser">Eraser</option>
            <option value="ruler">Ruler</option>
        </select>
        <table>
            <th>Description</th>
            <th>Values</th>
            <tr>
                <td>Sl. No.</td>
                <td><input type="number" name="no" ></td>
            </tr>
            <tr>
                <td>Item Brand</td>
                <td><input type="text" name="br"></td>
            </tr>
            <tr>
                <td>Item Price</td>
                <td><input type="number" name="pr" ></td>
            </tr>
            <tr>
                <td>Item Code</td>
                <td><input type="number" name="code" ></td>
            </tr>
            <tr>
                <td>Item Quantity</td>
                <td><input type="number" name="qty"></td>
            </tr>
        </table>
        <br>
        <input type="submit" name="submit" value="Bill">
    </form>

    <?php
        if(isset($_POST['submit'])){
            $bill=$_POST['pr'] * $_POST['qty'];
            $no=$_POST['no'];
            $item=$_POST['item'];
            $br=$_POST['br'];
            $pr=$_POST['pr'];
            $code=$_POST['code'];
            $qty=$_POST['qty'];
           echo "<h1>Bill</h1><br>";
           echo "<table>
        <th colspan='6'>Bill</th>
        <tr>
            <td>Sl. No.</td>
            <td>Item Name</td>
            <td>Item Brand</td>
            <td>Item Price</td>
            <td>Item Code</td>
            <td>Item Quantity</td>
        </tr>
        <tr>
            <td> $no </td>
            <td> $item </td>
            <td> $br </td>
            <td> $pr </td>
            <td> $code </td>
            <td> $qty </td>
        </tr>
        <tr>
            <td colspan='6' style='text-align: center;'>Total : Rs. $bill  </td>
        </tr>
    </table>";
        }
    ?>
</body>
</html>