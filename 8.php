<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>program 8</title>
</head>
<body>
<div style="border:1px black solid;width:50%;margin:2em 20em;padding:50px;">
<form method="post" action="8.php" enctype="multipart/form-data">
<h3 style="text-align:center;">Application Form</h3>
    <label> First Name  :</label>
    <input type="text" name="fname" required>
    <br><br>
    <label> Middle Name  :</label>
    <input type="text" name="mname" required>
    <br><br>
    <label> Last Name   :</label>
    <input type="text" name="lname" required>
    <br><br>
    <label> Student Photo   :</label>
    <input type="file" name="sphoto" required>
    <br><br>
    <label> Fathers Name   :</label>
    <input type="text" name="fname" required>
    <br><br>
    <label> Address   :</label>
    <textarea name="addr" required></textarea>
    <br><br>
    <label> Contact No   :</label>
    <input type="number" name="cno" required>
    <br><br>
    <label> Email   :</label>
    <input type="text" name="email" required>
    <br><br>
    <label> Date of Birth   :</label>
    <input type="date" name="date" required>
    <br><br>
    <label> Gender   :</label>
    <select name="gender" required>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    </select>
    <br><br>
    <label> Marks Percentage   :</label>
    <input type="number" name="mp" required>
    <br><br>
    <label> Hobbies   :</label>
    <div>
    <input type="checkbox"  name="coding" value="coding" checked>
    <label >Coding</label>
    </div>
    <div>
    <input type="checkbox"  name="games" value="games">
    <label >Video Games</label>
    </div>
    <br><br>
    <label> Institution Studied   :</label>
    <input type="text" name="std" required>
    <br><br>
    <label> Course Studied   :</label>
    <input type="radio" name="course" value="BCA" required>
    <label> BCA</label>
    <input type="radio" name="course" value="BSc">
    <label> BSc</label>
    <input type="radio" name="course" value="BCOM">
    <label> BCOM</label>
    <input type="radio" name="course" value="BE">
    <label> BE</label>
    <br><br>
    <label> Course Offered   :</label>
    <select name="courseoff" required>
    <option value="MCA">MCA</option>
    <option value="Msc">MSc</option>
    <option value="MCOM">MCOM</option>
    <option value="MTech">MTech</option>
    </select>
    <br><br>
    <input type="submit" name="Submit">
    <input type="reset" name="Reset">
</form>
</div>
<?php 
    if(isset($_POST['Submit'])){
        echo "<h1>hhh</h1>";
        $courseselected=$_POST['courseoff'];
        $percent=intval($_POST['mp']);
        $course=$_POST['course'];
        $fileinfo = $_FILES['sphoto']['tmp_name'];
        $studimg= $_FILES['sphoto']['name'];
        $target="./uploads/".basename($_FILES['sphoto']['name']);
        move_uploaded_file($_FILES['sphoto']['tmp_name'],$target);
        if($courseselected=="MCA"||$courseselected=="MTech"){
            if($percent>70){
                if($courseselected=="MTech"){
                    if($course!="BE"){
                        echo "<h2>For MTech Course Studied Must be BE</h2>";
                    }
                }else{
                    if($course!="BCA"||$course!="Bsc"){
                        echo "<h2>For MCA Course Studied Must be BCA or BSc</h2>";
                    }
                }
            }else{
                echo "<h2> Degree percentage should be more than 70 </h2>";
            }
        }elseif($courseselected=="MBA"){
            if($percent>60){

            }else{
                echo "<h2> Degree percentage should be more than 60 </h2>";
            }
        }else{
            if($percent>40){
                if($courseselected=="Msc"){
                    if($course!="BSc"||$course!="BCA"){
                        echo "<h2>For MSc Course Studied Must be BCA or BSc</h2>";
                    }
                }

            }else{
                echo "<h2> Degree percentage should be more than 40 </h2>";
            }
        }
    }
    
?>

</body>
</html>