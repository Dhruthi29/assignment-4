<!DOCTYPE html>
<html>
<body>
<form method="post">
<input type="text" name="num1" placeholder="enter value 1"><br>
<input type="text" name="num2" placeholder="enter value 2"><br>
<input type="text" name="opr" placeholder="enter operator"><br>
<input type="submit" name="submit" value="submit"><br>
</form>
<?php
if(isset($_POST['submit'])){
$a=$_POST['num1'];
$b=$_POST['num2'];
$x=$_POST['opr'];
echo "number 1 is $a <br>";
echo "number 2 is $b <br>";
switch($x){
case  "+":
$txt=$a+$b;
echo "addition of $a and $b is ";
echo $txt ;
break;
case  "-":
$txt=$a-$b;
echo "substration of $a and $b is :";
echo $txt;
break;
case "*":
$txt=$a*$b;
echo "multiplication of $a and $b is :";
echo  $txt;
break;
case "/":
$txt=$a/$b;
echo "division of $a and $b is :";
echo $txt;
break;
default:
echo "nothing";
}}
?>

<center><a href="index.html">back</a></center>
</body>
</html>