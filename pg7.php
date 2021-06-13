<!DOCTYPE html>
<html>
<body>
<form method="post">
enter the previous reading:<input type="text" name="value1"><br>
enter the current reading:<input type="text" name="value2"><br>
<input  type="submit" name="submit"value="submit"><br>
</form>
<?php
if($_POST){
$a=$_POST['value1'];
$b=$_POST['value2'];
$units=$b-$a;
$total=0;
if($units<=100){
$total=$units*3;
} elseif($units<=200){
$total=(100*3)+($units-100)*4;
} elseif($units<=300){
$total=(100*3)+($units-200)*5;
} elseif($units>300){
$total=(100*3)+(100*4)+(100*5)+($units-300)*6;
}
echo "current reading $b <br>";
echo "previous reading $a <br>";
echo "consumed reading $units <br>";
echo "total payment $total <br>";
}
?>

<center><a href="index.html">back</a></center>
</body></html>