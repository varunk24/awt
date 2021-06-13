<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>program 9</title>
</head>
<body>
<div style="border:1px black solid;width:50%;margin:2em 20em;padding:50px;">
<form method="post" enctype="multipart/form-data">
    <label> Employee Photo   :</label>
    <input type="file" name="ephoto" required>
    <br><br>
    <label> Employee No   :</label>
    <input type="number" name="eno" required>
    <br><br>
    <label> First Name  :</label>
    <input type="text" name="fname" required>
    <br><br>
    <label> Last Name   :</label>
    <input type="text" name="lname" required>
    <br><br>
    <label> Address   :</label>
    <textarea name="addr" required></textarea>
    <br><br>
    <label> Gender   :</label>
    <select name="gender" required>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    </select>
    <label> Designation   :</label>
    <input type="text" name="desg" required>
    <br><br>
    <label> Contact No   :</label>
    <input type="number" name="cno" required>
    <br><br>
    <label> Employee Category  :</label>
    <select name="ecat" required>
    <option value="PartTime">Part Time</option>
    <option value="FullTime">Full Time</option>
    <option value="Contract">Contract</option>
    </select>
    <br><br>
    <label> Number of hours(part time)   :</label>
    <input type="number" name="nho" >
    <br><br>
    <label> Basic Salary <small>(Enter 0 for part time employees)</small>  :</label>
    <input type="number" name="bs" required >
    <br><br>
    <input type="submit" name="Submit">
    <input type="reset" name="Reset">
</form>
</div>
<?php 
    if(isset($_POST['Submit'])){
        $empno=$_POST['eno'];
        $empname=$_POST['fname'].$_POST['lname'];
        $addr=$_POST['addr'];
        $gender=$_POST['gender'];
        $desg=$_POST['desg'];
        $pno=$_POST['cno'];
        $fileinfo = $_FILES['ephoto']['tmp_name'];
        $empimg= $_FILES['ephoto']['name'];
        $target="./uploads/".basename($_FILES['ephoto']['name']);
        move_uploaded_file($_FILES['ephoto']['tmp_name'],$target);
        $ecat=$_POST['ecat'];
        $sal=0;
        $bs=$_POST['bs'];
        if($ecat=='PartTime'){
            $nho=intval($_POST['nho']);
            $sal=$nho*100;
        }
        elseif($ecat=='FullTime'){
            if($bs<10000){
                $da=$bs*0.45;
                $hra=$bs*0.1;
                $pf=0;
                $tax=0;
                $sal=$bs+$da+$hra-$pf-$tax;
            }
            elseif(($bs<50000)&&($bs>=10000)){
                $da=$bs*0.75;
                $hra=$bs*0.2;
                $pf=1200;
                $tax=$bs*0.05;
                $sal=$bs+$da+$hra-$pf-$tax;
            }else{
                $da=$bs*0.9;
                $hra=$bs*0.3;
                $pf=$bs*0.05;
                $tax=$bs*0.15;
                $sal=$bs+$da+$hra-$pf-$tax;
            }
        }else{
            if($bs<5000){
                $da=200;
                $hra=0;
                $tax=0;
                $sal=$bs+$da+$hra-$tax;
            }
            elseif(($bs<5000)&&($bs>=25000)){
                $da=$bs*0.15;
                $hra=1000;
                $tax=$bs*0.03;
                $sal=$bs+$da+$hra-$tax;
            }else{
                $da=$bs*0.2;
                $hra=$bs*0.05;
                $tax=$bs*0.09;
                $sal=$bs+$da+$hra-$tax;
            }
        }
  ?>
<div style="border:1px black solid;width:50%;margin:2em 20em;padding:50px;">
<h3 style="text-align:center;">Employee Details</h3>
<?php
echo "<img src='./uploads/$empimg' width='50%'>" ;
echo "<h3>Empno :$empno</h3>";
echo "<h3>Emp Name :$empname</h3>";
echo "<h5>Address :$addr</h5>";
echo "<h3>Gender :$gender</h3>";
echo "<h3>Designation :$desg</h3>";
echo "<h3>Phone No :$pno</h3>";
echo "<h3>Category :$ecat</h3>";
echo "<h3>Salary :$sal</h3>";
}?>
</div>

</body>
</html>